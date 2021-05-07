<?php 
if(isset($_POST['submit'])){
    $to = "post@sabba.no"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "New message from 'Sabba Invest AS' ";
    $subject2 = "Thank you for contact us";
    $message = "Name: " .$first_name . "\n\n" . $_POST['desc'];
    $message2 = "Hello " . $first_name . "\n\n Thank you for contacing us, we will contact with you soon.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>