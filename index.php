<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);

require './vendor/autoload.php';
require 'include/functions.inc.php';

require_once 'components/header.php';
require_once 'components/controller.php';
require_once 'components/footer.php';