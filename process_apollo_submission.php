<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect specific fields
    $name = isset($_POST["name"]) ? strip_tags(trim($_POST["name"])) : "";
    $city = isset($_POST["city"]) ? strip_tags(trim($_POST["city"])) : "";
    $company = isset($_POST["company"]) ? strip_tags(trim($_POST["company"])) : "";
    $material = isset($_POST["required_material"]) ? strip_tags(trim($_POST["required_material"])) : "";
    $phone = isset($_POST["phone"]) ? strip_tags(trim($_POST["phone"])) : "";
    $application = isset($_POST["application"]) ? strip_tags(trim($_POST["application"])) : "";
    $email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : "";

    $email_content = "You have received a new difficult polymer part evaluation request.\n\n";
    $email_content .= "Client Details:\n";
    $email_content .= "------------------------\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Company: $company\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "City: $city\n\n";
    $email_content .= "Application Details:\n";
    $email_content .= "------------------------\n";
    $email_content .= "Required Material: $material\n";
    $email_content .= "Application Industry: $application\n\n";

    // Direct File Save & Attach Logic
    $file_attached = false;
    $email_content .= "File Diagnostic Logs:\n------------------------\n";
    
    if (isset($_FILES['cad_file'])) {
        $err = $_FILES['cad_file']['error'];
        $email_content .= "Upload Array Found. Error Code: $err\n";

        if ($err == UPLOAD_ERR_OK) {
            $upload_dir = "uploads/apollo_cad/";
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            $original_name = basename($_FILES['cad_file']['name']);
            $extension = pathinfo($original_name, PATHINFO_EXTENSION);
            $safe_filename = uniqid('cad_') . '.' . $extension;
            $target_path = $upload_dir . $safe_filename;
            
            $email_content .= "Filename: $original_name (" . round($_FILES['cad_file']['size'] / 1024 / 1024, 2) . " MB)\n";

            if (move_uploaded_file($_FILES['cad_file']['tmp_name'], $target_path)) {
                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $domainName = $_SERVER['HTTP_HOST'];
                $dirPath = dirname($_SERVER['PHP_SELF']);
                $full_url = $protocol . $domainName . $dirPath . "/" . $target_path;
                
                $email_content .= "CAD File Link: $full_url\n\n";
                $file_attached = $target_path;
                $file_original_name = $original_name;
            } else {
                $email_content .= "File Move Failed! Resorting to TMP direct attachment.\n\n";
                $file_attached = $_FILES['cad_file']['tmp_name'];
                $file_original_name = $original_name;
            }
        } else {
            $email_content .= "Upload failed or no file attached. (Code $err means: 1=Too big for php.ini, 4=No file selected).\n\n";
        }
    } else {
        $email_content .= "No CAD File Array mapped in POST (Check form enctype).\n\n";
    }

    $subject = "New Polymer Part Evaluation Request from $name";
    
    // Production Recipients
    $to_primary = "sm@precise3dm.com"; 
    $to_secondary = "sales@precise3dm.com";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = false;  
    $mail->isSMTP();            
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;                          
    $mail->Username = "precise3dmdre@gmail.com";                 
    $mail->Password = "nctdxqoxvqhflyaj";                           
    $mail->SMTPSecure = "ssl";                           
    $mail->Port = 465; 

    $mail->From = "precise3dmdre@gmail.com";
    $mail->FromName = "Apollo 310 Form";
    $mail->addAddress($to_primary); 
    $mail->addCC($to_secondary); 

    // Makes it easy to hit reply to the customer
    $mail->addReplyTo($email, $name);
    
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $email_content;

    if ($file_attached) {
        $mail->addAttachment($file_attached, $file_original_name);
    }

    // Unconditionally store data locally to text log
    $log_data = "======================\nTIME: ".date('Y-m-d H:i:s')."\nTO: $to\nSUBJECT: $subject\n\n$email_content\n\n";
    file_put_contents('local_email_test_log.txt', $log_data, FILE_APPEND);

    try {
        $result = $mail->send();
        header("Location: funmat-pro-310-apollo.php?status=success#dpp-form");
    } catch (Exception $e) {
        header("Location: funmat-pro-310-apollo.php?status=error#dpp-form");
    }
} else {
    header("Location: funmat-pro-310-apollo.php");
}
?>
