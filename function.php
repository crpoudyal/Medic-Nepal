<?php

// require MySQL Connection
require ('database/DBController.php');

// require medicine class
require ('database/Fetch_medicine.php');

// DBController object
$db = new DBController();

$Fetch_medicine = new Fetch_medicine($db);



