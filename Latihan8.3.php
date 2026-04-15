<?php
echo "masukan username :";
$input_name= fopen("php://stdin", "r");
$username = trim(fgets($input_name));
echo "wellcome $username, apa kabar?\n";
?>