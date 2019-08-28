<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ************** CONSTANT ******************************
const BASE_PATH = "C:\\xampp\\htdocs\\php3.exp\\Daily_Exm\\01_Register&Login\\";
const USERS_DB = BASE_PATH . "db\\user.json";
const TICKET_DB = BASE_PATH . "db\\ticket.json";
const BASE_URL = "http://php3.pro/Daily_Exm/01_Register&Login";

include_once "function.php";