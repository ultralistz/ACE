<?php

//Start Session
session_start();


//定義區塊
if($_SERVER['HTTP_HOST']=="localhost")
{
    define('SITEURL', 'http://localhost/ACE/AceBiotek_scss/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
}
else
{
    define('SITEURL', 'https://huabambi.com/ACE/AceBiotek_scss/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'ultralistz');
    define('DB_PASSWORD', 'ult014077');
}


//定義區塊

define('IMGURL', SITEURL.'asset/img/');

?>