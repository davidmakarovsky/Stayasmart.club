<?php
    if (isset($_POST['submit'])) {
        $aname = $_POST['aname'];
        $cname = $_POST['cname'];
        $email = $_POST['email'];
        $grade = $_POST['grade'];
        $classType = $_POST['classType'];
        $message = $_POST['message'];

        $subject = "Class request from: ".$aname;
        $mailTo = "stevenspiv347@gmail.com, david.makarovsky@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have received an e-mail from ".$aname.".\n\n"."Student Name: ".$cname.".\nGrade Level: ".$grade.".\nClass: ".$classType.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsent")

    }