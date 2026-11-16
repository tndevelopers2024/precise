<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : '';
    $email  = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $number = isset($_POST['number']) ? strip_tags(trim($_POST['number'])) : '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreplytndev@gmail.com';
        $mail->Password   = 'dtypdbnuzdoozesr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        // Authenticated sender matching Gmail credentials to prevent SPF/DMARC rejection
        $mail->setFrom('noreplytndev@gmail.com', 'Precise3DM - Einstar Vega');

        // Recipients: Company lead destination emails
        $mail->addAddress('marketing@precise3dm.com');
        $mail->addCC('sm@precise3dm.com');
        $mail->addCC('sales@precise3dm.com');
        $mail->addCC('precise3dmdre@gmail.com');

        if (!empty($email)) {
            $mail->addReplyTo($email, $name);
        }

        $mail->isHTML(true);
        $mail->Subject = 'New Einstar Vega Instant Call Back Request from ' . ($name ?: 'Visitor');
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e5e5e5; border-radius: 8px;'>
                <h2 style='color: #ff931e; border-bottom: 2px solid #ff931e; padding-bottom: 10px; margin-top: 0;'>New Einstar Vega Instant Call Back Request</h2>
                <p>You have received a new lead from the Einstar Vega page (Get an Instant Call Back form):</p>
                <table style='width: 100%; border-collapse: collapse; margin-top: 15px;'>
                    <tr style='background-color: #f9f9f9;'>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: left; width: 30%;'>Name</th>
                        <td style='padding: 10px; border: 1px solid #ddd;'>{$name}</td>
                    </tr>
                    <tr>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: left;'>Email</th>
                        <td style='padding: 10px; border: 1px solid #ddd;'><a href='mailto:{$email}'>{$email}</a></td>
                    </tr>
                    <tr style='background-color: #f9f9f9;'>
                        <th style='padding: 10px; border: 1px solid #ddd; text-align: left;'>Phone</th>
                        <td style='padding: 10px; border: 1px solid #ddd;'><a href='tel:{$number}'>{$number}</a></td>
                    </tr>
                </table>
            </div>
        ";

        if ($mail->send()) {
            echo "<script>window.location.href='https://precise3dm.com/thankyou-page.php';</script>";
        } else {
            echo "<script>alert('Message could not be sent.'); window.history.back();</script>";
        }
    } catch (Exception $e) {
        echo "<h3>Error sending email:</h3>";
        echo "<pre>{$mail->ErrorInfo}</pre>";
    }
} else {
    echo "<h3>Invalid Request</h3>";
}
?>
