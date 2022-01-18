<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $to = "rebeccamrfoster@gmail.com";
        $from = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $headers = "From: $from";
        $subject = "You have received a message.";
        // $txt = "You have a message from".$name".\n\n".$message;

        mail($to, $subject, $message, $headers);
        header("Location: process.php?mailsend");
    }

    // $to = "rebeccamrfoster@gmail.com";
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $headers = "From: ".$from;
    // $subject = "You have a message.";

    // $fields = array();
    // $fields{"name"} = "name";
    // $fields{"email"} = "email";
    // $fields{"phone"} = "phone";
    // $fields{"message"} = "message";

    

    // $body = "Here is what was sent:\r\n"; 

    // foreach($fields as $a => $b){$body .= $b." : ".$_REQUEST[$a]."\r\n"; }


    // $send = mail($to, $subject, $body, $headers);

?>