<?php
declare(strict_types=1);

require_once("Guitare.php");
require_once("Violon.php");
require_once("Saxo.php");
require_once("Flute.php");

$i1 = new Guitare();
$i1->joue();

$iv1 = new Saxo();
$iv1->souffle();

$ac1 = new Violon();
$ac1->tendre();
$ac1->utiliserArche();

?>