<?php

session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['pokemon'] = "Bulbasaur";

echo $_SESSION['cor']."<br>".$_SESSION['pokemon']."<br>".session_id();