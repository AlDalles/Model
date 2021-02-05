<?php
require_once '../src/vendor/autoload.php';
$us = new \Hillel\user();
echo $us->update();
echo \Hillel\User::findById(1);
echo $us->getID();


