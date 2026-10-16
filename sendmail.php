<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resto    = htmlspecialchars($_POST['resto']);
    $date  = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    $to      = "mirmaroun@hotmail.com";  // Replace with your email
    $subject = "date approved and submitted";
    $body    = "Dear Mr. Maroun EL-MIR\nWell, data has been submitted and here all information needed:\nrestaurant: $resto\ndate: $date\ntime:\n$time\nPlease make sure you will be available at the data and time above";
    $headers = "From: skayemdiana@gmail.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>