<!DOCTYPE html>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    if (!empty($name)) {
        echo "<br>Name: " . $name;
    } else {
        echo "The name field is empty, please fill it in!";
    }

    if (!empty($subject)) {
        echo "<br>Subject: " . $subject;
    } else {
        echo "<br>The subject field is empty, please fill it in!";
    }

    if (!empty($message)) {
        echo "<br>Message: " . $message;
    } else {
        echo "<br>The message field is empty, please fill it in!";
    }

    if (!empty($email)) {
        echo "<br>Email: " . $email;
    } else {
        echo "<br>The email field is empty, please fill it in!";
    }

    if (!empty($email) && (!empty($subject)) && (!empty($message)) && (!empty($email))) {
        echo "<br>Thank you, the details above been submitted, we will get back to within 72 hours.";
    } else {
        echo "Please fill in all the required fields!";
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        <title></title>
    </head>
    <body>
    </body>
</html>
