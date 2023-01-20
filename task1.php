<?php

#echo phpinfo();

define("WEBSITE_NAME", "Website Title");

echo WEBSITE_NAME."<br>";


echo __FILE__."<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

$age = 4;

if ($age < 5){
    echo "stay at home";
}else if ($age = 5){
    echo "go to kindergarten";
}elseif ($age >5 && $age<12){
    echo "go to grade".$age-6;
}

?>
