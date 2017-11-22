<?php

/*
 * @author Chinoms
 * https://twitter.com/chinoms
 */

/**
 * This class handles all the mail functions for this app.
 *
 * @author Chinoms
 */
class mailerClass {

    function welcomeTutor($email, $fname) {
        $to = $email;
        $subject = "Welcome to TutorKings";

        $message = "
<html>
<head>
<title>Welcome to TutorKings</title>
</head>
<body>
<center><img src='https://www.tutorkings.com/images/static.logo.png' height='100'></center>
<br>
<div style='margin-left:20%; margin-right:20%'>
<p style='text-align: justify'>Hi, " . $fname . "</p>
<p style='text-align: justify'>We're excited you're interested in becoming a TutorKings Tutor. The prospects are great.
In no time, you'll be making money from tutoring kids on subjects you know best.</p>
<p style='text-align: justify'>We'll contact you shortly to make arrangements for your tests. Once you scale through, 
we'll train you and you'll be fully on board</p>
<p style='text-align: justify'>Once more, welcome to TutorKings.</p>
<br>
<i>The TutorKings Team</i>
</body>
</html>
";


        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
        $headers .= 'From: <admin@tutorkings.com>' . "\r\n";


        mail($to, $subject, $message, $headers);
    }

}

$sendMail = new mailerClass();
