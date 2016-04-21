<?php

require("./Config.php");

require("./ConfigHelper.php");

$con = new ConfigHelper();

echo $con->get_host('main');
