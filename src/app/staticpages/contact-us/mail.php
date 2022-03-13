<?php
if (isset($_POST['send'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "kamal8desai@gmail.com";
    $email_subject = "New form submissions";

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required
    $sub = $_POST['subject']; // required



    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";
    $email_message .= "Subject: " . clean_string($sub) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- include your success message below -->

    Thank you for contacting us. We will be in touch with you very soon.

<?php
}
?>
<html>
    <br><br>
    <b><a href="contact-us.component.html">Go Back</a></b>
</html>