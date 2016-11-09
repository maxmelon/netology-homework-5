<?php
include 'functions.php';
error_reporting (E_ALL);

$contact = newContact ('phone_book.json', htmlspecialchars($_POST['name']), htmlspecialchars($_POST['phone_number']));

header("Location: index.php");
die();
?>
