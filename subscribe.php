<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email from the form
    $email = $_POST["Email"];

    // Validate the email (you might want to perform more thorough validation)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Send the email to the specified address
        $to = "sahastraling12@gmail.com";
        $subject = "New Subscription";
        $message = "New email subscription: $email";
        $headers = "From: yubrajpandeya23s@ccrc.edu.np"; // Replace with your own email or leave it empty

        // Use the mail() function to send the email
        mail($to, $subject, $message, $headers);

        // Optionally, you can redirect the user after successful submission
        header("Location: success_page.html");
        exit;
    } else {
        // Handle invalid email address
        echo "Invalid email address";
    }
}
?>
