<?php
$msg = "Name: " . $_POST["name"] . "\n" . "Email: " . $_POST["email"] . "\n" . "Message: " . $_POST["message"];
mail("jeet25.m@gmail.com", "Message from jeetmehta.com", $msg);
?>