<?php
include_once "FizzBuzzImproved.php";

$newList = new FizzBuzz();
echo json_encode($newList->list(20));
