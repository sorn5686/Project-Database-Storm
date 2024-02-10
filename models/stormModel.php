<?php
class Storm
{
public $id; //sid
public $name_id;
#public $start_date;
#public $end_date;

public function __construct($id,$name_id)
{
    $this->id = $id;
    $this->name_id = $name_id;
    #$this->start_date = $start_date;
    #$this->end_date = $end_date;
}
public static function getAll()
{
    $stormLists = [];
    require("connection_connect.php");
    $sql = "SELECT DISTINCT sid, storm_nameth FROM TrackStormDate NATURAL JOIN Station NATURAL JOIN Province NATURAL JOIN Country NATURAL JOIN TrackStorm NATURAL JOIN Storm as s INNER JOIN StormList as sl on s.storm_id=sl.storm_id
    WHERE country_name = 'ไทย'";
    #$sql = "select sid,storm_id,start_date,end_date from Storm"; (old)
    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc())
    {
        $id = $my_row[sid];
        $name_id = $my_row[storm_nameth];
        #$start_date = $my_row[start_date]; 
        #$end_date = $my_row[end_date];

        $stormLists[]= new Storm($id,$name_id);

    }
    require("connection_close.php");
    return $stormLists;
}
public static function search($key)
{
    require("connection_connect.php");
    $sql = "SELECT DISTINCT sid, storm_nameth FROM TrackStormDate NATURAL JOIN Station NATURAL JOIN Province NATURAL JOIN Country NATURAL JOIN TrackStorm NATURAL JOIN Storm as s INNER JOIN StormList as sl on s.storm_id=sl.storm_id
    WHERE (sid like '%$key%' or storm_nameth like '%$key%' )";
    #$sql = "select sid,storm_id,start_date,end_date from Storm where (sid like '%$key%' or storm_id like '%$key%' or start_date like '%$key%' or end_date like '%$key%')"; (old)
    $result = $conn->query($sql);
    while ($my_row = $result->fetch_assoc())
    {
        $id = $my_row[sid];
        $name_id = $my_row[storm_nameth];
        #$start_date = $my_row[start_date]; 
        #$end_date = $my_row[end_date];

        $stormLists[]= new Storm($id,$name_id);

    }
    require("connection_close.php");
    return $stormLists;
}
}
?>