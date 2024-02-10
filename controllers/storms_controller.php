<?php
class StormsController
{
    public function storm()
    {
        $storm_list = Storm::getAll();
        require_once('views/storms/storm.php');
    }

    public function searchStorm()
    {
        $key = $_GET['key'];
        $storm_list = Storm::search($key);
        require_once('views/storms/storm.php');
    }
}
