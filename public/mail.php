<?php
        session_start();
        $name = $_POST['name'];
        $visitor_name = $_POST['email'];
        $message = $_POST['message'];
        $_SESSION["check"] = 0;

        if (!empty($name) && !empty($visitor_name) && !empty($message)) {
          $_SESSION["check"] = 1;
          $email_form = 'gabindepaire@gmail.com';
          $email_subject = "Message Site CV";
          $email_body = "Sujet: $name.\n".
                          "User Emails: $visitor_name.\n".
                                  "User Message: $message.\n";

          $to = "gabin.depaire@ynov.com";

          $headers = "From: $email_form \r\n";

          mail($to, $email_subject, $email_body, $headers);
        }
        if (empty($name) || empty($visitor_name) || empty($message)) {
           $_SESSION["check"] = 2;
        }



        header("Location: contact.php");

?>
