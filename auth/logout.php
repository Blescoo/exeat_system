<?php

session_start(); 
session_destroy(); //destroy the session

header("location: admin_login.php");



?>