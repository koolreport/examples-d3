<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
require_once "../../../../common.php";
require_once "MyReport.php";
$report = new MyReport;
$report->run();
$report->render();
