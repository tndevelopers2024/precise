<?php
header('Content-Type: application/json');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Parse .env file robustly
$envFile = __DIR__ . '/.env';
$smtpUser = 'precise3dmdre@gmail.com';
$smtpPass = 'nctdxqoxvqhflyaj';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, ' "');
            if ($key === 'SMTP_USER') $smtpUser = $value;
            if ($key === 'SMTP_PASS') $smtpPass = $value;
        }
    }
}

$input = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

$fullName = isset($input['fullName']) ? $input['fullName'] : 'No Name';
$company = isset($input['companyName']) ? $input['companyName'] : 'No Company';
$email = isset($input['emailAddress']) ? $input['emailAddress'] : 'No Email';
$mobile = isset($input['mobileNumber']) ? $input['mobileNumber'] : 'No Mobile';
$country = isset($input['country']) ? $input['country'] : 'No Country';
$state = isset($input['state']) ? $input['state'] : 'No State';
$city = isset($input['city']) ? $input['city'] : 'No City';
$terms = isset($input['termsAgreed']) && $input['termsAgreed'] ? 'Yes' : 'No';

$category = isset($input['category']) ? $input['category'] : 'Not Selected';
$interests = isset($input['interests']) && is_array($input['interests']) ? implode(', ', $input['interests']) : 'None';
$demoType = isset($input['demoType']) ? $input['demoType'] : 'Not Selected';
$demoDate = isset($input['demoDate']) ? $input['demoDate'] : 'Not Selected';
$demoTime = isset($input['demoTime']) ? $input['demoTime'] : 'Not Selected';
$step = isset($input['step']) ? $input['step'] : '3';
// Build elegant HTML Email Body
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f6f6fa; padding: 20px; }
    .container { max-width: 650px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    h2 { color: #ff931e; border-bottom: 2px solid #ff931e; padding-bottom: 10px; margin-top: 0; }
    .section-title { font-size: 18px; font-weight: bold; color: #333; margin-top: 25px; margin-bottom: 12px; background: #fff5e9; padding: 10px 15px; border-left: 4px solid #ff931e; border-radius: 4px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { padding: 12px 10px; border-bottom: 1px solid #eee; text-align: left; vertical-align: top; }
    th { width: 38%; color: #555; font-weight: 600; }
    td { width: 62%; font-weight: 500; color: #111; }
</style>
</head>
<body>
<div class="container">
    <h2>New Live Demo Booking Request ' . ($step == '1' ? '(Step 1 Pending)' : '(Fully Completed)') . '</h2>
    <p>A user has ' . ($step == '1' ? 'started' : 'completed') . ' the Live Demo Booking form on Precise3DM.</p>
    
    <div class="section-title">Contact Information</div>
    <table>
        <tr><th>Full Name</th><td>' . htmlspecialchars($fullName) . '</td></tr>
        <tr><th>Company Name</th><td>' . htmlspecialchars($company) . '</td></tr>
        <tr><th>Email Address</th><td>' . htmlspecialchars($email) . '</td></tr>
        <tr><th>Mobile Number</th><td>' . htmlspecialchars($mobile) . '</td></tr>
        <tr><th>Country</th><td>' . htmlspecialchars($country) . '</td></tr>
        <tr><th>State</th><td>' . htmlspecialchars($state) . '</td></tr>
        <tr><th>City</th><td>' . htmlspecialchars($city) . '</td></tr>
        <tr><th>Agreed to WhatsApp</th><td>' . htmlspecialchars($terms) . '</td></tr>
    </table>';

if ($step != '1') {
    $htmlBody .= '
    <div class="section-title">Application Interests</div>
    <table>
        <tr><th>Demo Category</th><td>' . htmlspecialchars($category) . '</td></tr>
        <tr><th>Selected Interests</th><td>' . htmlspecialchars($interests) . '</td></tr>
        <tr><th>Demo Type</th><td>' . htmlspecialchars($demoType) . '</td></tr>
    </table>

    <div class="section-title">Scheduled Slot</div>
    <table>
        <tr><th>Date</th><td>' . htmlspecialchars($demoDate) . '</td></tr>
        <tr><th>Time Slot</th><td>' . htmlspecialchars($demoTime) . '</td></tr>
    </table>';
}

$htmlBody .= '
</div>
</body>
</html>
';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpUser;
    $mail->Password   = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom($smtpUser, 'Precise3DM Website');
    $mail->addAddress('service@precise3dm.com'); // Send to admin

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Live Demo Booking ' . ($step == '1' ? '(Step 1)' : '(Full)') . ' - ' . $company;
    $mail->Body    = $htmlBody;

    $mail->send();
    echo json_encode(['status' => 'success', 'message' => 'Email sent successfully']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
}
