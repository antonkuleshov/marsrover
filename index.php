<?php

require_once "vendor/autoload.php";

$marsRoverTest = new MarsRoverTest();
echo ($marsRoverTest->testMarsRoverWork()) ? 'true' : 'false';