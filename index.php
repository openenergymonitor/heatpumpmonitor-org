<?php

require "core.php";
$output = array();
$output['content'] = view("Views/home.php",array());
print view("theme.php", $output);
