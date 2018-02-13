<?php
  session_start();
  $_SESSION['lang'] = 'en';
  define('ENVIRONMENT', 'dev'); // DEV ~ PROD
  define('BASE_URL', 'http://localhost/project16/public/');

  // Database
  define('DB_HOST','127.0.0.1');
  define('DB_USER','root');
  define('DB_PASS','');
  define('DB_DATABASE','project16');
  define('SALT','аа');

  // EMAIL
  define('SERVER_EMAIL' ,'project16@project16.com');

  //Paths
  define('DS', DIRECTORY_SEPARATOR);
  define('BASE_PATH', dirname(__FILE__).DS."public".DS);
  define('LAYOUTS_PATH', BASE_PATH.'layouts'.DS);
  define('PAGES_PATH', BASE_PATH.'pages'.DS);
  define('MODALS_PATH', BASE_PATH . 'modals'.DS);
  define('ASSETS_PATH', BASE_URL . 'assets/');
  define('IMG_PATH', ASSETS_PATH . 'img/');
  define('CSS_PATH', ASSETS_PATH . 'css/');
  define('JS_PATH', ASSETS_PATH . 'js/');
  define('FONTS_PATH', ASSETS_PATH . 'fonts/');
  define('PHOTOS_PATH', ASSETS_PATH . 'photos/');



  if(ENVIRONMENT == 'dev') {
    ini_set('display_errors','On');
    error_reporting(E_ALL);
  } else {
    ini_set('display_errors','Off');
    error_reporting(0);
  }

  date_default_timezone_set('Europe/London');
/*
  $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

  mysqli_set_charset($connect,"utf8");
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

include "helpers/db.php";
include "helpers/functions.php";
*/
