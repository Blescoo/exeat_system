<?php

session_start(); 
session_destroy(); //destroy the session

header("location: ../studentlogin.php");



?>