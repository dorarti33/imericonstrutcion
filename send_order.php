<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_reporting(E_ALL);  // Raporto të gjitha gabimet
    ini_set('display_errors', 1);  // Shfaq gabimet

    $service = $_POST['service'];
    $image = $_POST['image'];

    $to = "imeridorart295@gmail.com";
    $subject = "New Service Order: " . $service;
    $message = "Service: " . $service . "\n";
    $message .= "Image: " . $image . "\n";

    $headers = "From: noreply@yourwebsite.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kontrollo nëse emaili është dërguar me sukses
    if (mail($to, $subject, $message, $headers)) {
        echo "Order sent successfully";
    } else {
        echo "Failed to send order";
        error_log("Error: Email sending failed."); // Log erroret
    }
}
?>
<?php
if (mail("your-email@example.com", "Test Email", "This is a test", "From: noreply@yourwebsite.com")) {
    echo "Test email sent";
} else {
    echo "Failed to send test email";
}
?>
