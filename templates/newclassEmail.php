<?php
// the message
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $txt = "Name: ".$name."\nEmail: ".$email."\nMessage: ".$message;
// send email
mail("themathleticspage@gmail.com","Class Create Request",$message);

echo "email should have sent";
}
?>