<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
header("Content-Type: text/html;charset=utf8");
define("SERVIDOR", "mysql:host=localhost;dbname=nonna;charset=utf8");
define("USUARIO", "root");
define("SENHA", "");