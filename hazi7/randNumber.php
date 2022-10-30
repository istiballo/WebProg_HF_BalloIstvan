<?php
session_start();
echo $_SESSION['randNum'];
$_SESSION['randNum'] = rand(1,10);