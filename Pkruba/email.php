<?php

require("connect.php");

function spamcheck($field) {

    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function send($email) {
    if (isset($email)) {

        $mailcheck = spamcheck($email);
        if ($mailcheck == FALSE) {

            return "Please provide a correct mail address";
        } else {
            $query = "select * from unregistered where email='$email'";
            $query2 = "select * from subscriber where email='$email'";
            $result2 = mysql_query($query2) or die("couln't enter any records!" . mysql_error());
            $result = mysql_query($query) or die("couln't enter any records!" . mysql_error());
            if (mysql_num_rows($result) != 0)
                return $m = "You have already subscribed in our account... Thank you.. !!";
            elseif (mysql_num_rows($result2) != 0)
                return $m = "You have already completly subscribed us!! :)";
            else {

                $tempory = rand();


                $query = "INSERT INTO  unregistered(email,time,temporycode) values  ('$email',Now()," . $tempory . ")";
                //Insert into ('abc@def.com',LOCALTIMESTAMP,11111111); 


                $insert = mysql_query($query) or die("couln't enter any records!" . mysql_error());


                if (mysql_affected_rows() > 0) {

                    $m = "Confirmation message has been sent to your email Check your inbox.. Thank you...";
                } else {
                    $m = "Record was not inserted";
                }

                $subject = "Confirmation";
                $subject = "Subscription Confirmation : prshhoters.pagodabox.com";

                $message = "You have neen succesfully registered in our system...Thanks for subscribing us ";

                mail($email, "Subject: $subject", $message, "From:no-reply@prshooters.com");
            }
        }
        return $m;
    }
}

?>
