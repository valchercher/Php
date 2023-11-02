<?php
header('Content-Type: application/json; charset=utf-8');
require_once "../Route/Route.php";

$route = new Route();
$route->router();
