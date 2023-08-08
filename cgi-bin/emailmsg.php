<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $emailmsg = "From: ".$name."\n";
    $emailmsg .= "Email: ".$email."\n";
    $emailmsg .= "Message: \n".$message."\n";
    $emailmsg = wordwrap($emailmsg, 70);

    if (mail("jsissler@gmail.com", "Dracarys Interactive Message!", $emailmsg)) {
        header("Location: ../received.html");
    }
    else {
        header("Location: ../error.html");
    }
?>
