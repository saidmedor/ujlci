<?php 
if(isset($_POST['submit'])){
    $to = "ujlci225@yahoo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];
    if($name !=''&& $email !=''&& $telephone !=''&& $subject !=''&& $comments !='')
    $message = $name . " a écrit ce message:" . "\n\n" . $_POST['comments'];
    $message2 = "Message de " . $name . "\n\n" . $_POST['comments'] . "\n\n" . "Mon numéro : " . $telephone;

    $headers = "De:" . $from;
    $headers2 = "A:" . $to;
    mail($to,$subject,$message2,$headers2);
    mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
   // echo "Le Mail a été envoyé. Merci " . $name . ", nous vous contacterons bientôt.";
    header("Location: http://ujlci.net/contact.html");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>