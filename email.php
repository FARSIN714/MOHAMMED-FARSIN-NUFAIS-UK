<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $v_email = $_POST['email'];
    $subject = $_POST['sub'];
    $message = $_POST['message'];

    $mailto = "mfsnufais714@gmail.com";

    $headers = "From : ".$v_email;

    $txt = "You Have Recived An E-Mail From ".$name."\n\n SUBJECT : ".$subject "\n\n".$message;

    mail($mailto,$txt,$headers);

    header("Location: contactus.php?mailsend");
}

?>