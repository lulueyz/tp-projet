<?php

session_start();

include_once 'config.php';
include_once 'functions.php';



include_once 'models/SimpleOrm.php';
$conn = new mysqli("localhost", "root", " ");

if ($conn->connect_error)
die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

SimpleOrm::useConnection($conn,'projet_php');



if (!empty($_GET['route'])) $route = $_GET['route'];
else $route = 'home';

