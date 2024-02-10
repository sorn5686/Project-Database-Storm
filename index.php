<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else
{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head>
    <body>
        <?php # echo "controller = ".$controller." , action = ".$action; ?>
        <br><a href="https://bservcpe.eng.kps.ku.ac.th/db23/db23_140/" class='btn btn-dark'>GROUP</a>&nbsp;&nbsp;&nbsp;
        <a href="?controller=pages&action=home" class='btn btn-dark'>Home</a>&nbsp;&nbsp;&nbsp;
        <a href="?controller=storms&action=storm" class='btn btn-dark'>รายงานสถานการณ์ผลกระทบจากพายุ</a>&nbsp;&nbsp;&nbsp;
        <a href="?controller=summary&action=index" class='btn btn-dark'>สรุปการรายงานผล</a>&nbsp;&nbsp;&nbsp;
        <?php require_once("routes.php"); ?>
    <body>
</html>