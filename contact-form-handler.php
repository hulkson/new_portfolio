<?php
    
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $project = $_POST['project'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "quy.qtp@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "New Mail From Portfolio Website";

    mail($mailTo, $project, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>

                    