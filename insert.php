<?php
    $mysqli = new mysqli('localhost', 'root', '', 'registration');
        if($mysqli->connect_error){
            printf("cannot connect to the database %s\n", $mysqli->connect_error);
            exit();
        }
        if(isset($_POST['submit'])){
            $firstname=mysql_real_escape_string($_POST['firstname']);
            $lastname=mysql_real_escape_string($_POST['lastname']);
            $email=mysql_real_escape_string($_POST['email']);
            $password=mysql_real_escape_string($_POST['password']);
            $telno=mysql_real_escape_string($_POST['phone']);
            $address=mysql_real_escape_string($_POST['address']);
        }
        $query="INSERT INTO students(firstname,lastname,email,password,telno,address) values ('$firstname','$lastname','$email','$password','$telno','$address')";
        $insert=$mysqli->query($query);


?>