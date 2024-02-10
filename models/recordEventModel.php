<?php
    class Event
    {
        public $sitid;
        public $county;
        public $sdate;
        public $stime;
        public $waterlevel;
        public $damage;

        public function __construct($sitid,$county,$sdate,$stime,$waterlevel,$damage)
        {
            $this->sitid = $sitid;
            $this->county = $county;
            $this->sdate = $sdate;
            $this->stime = $stime;
            $this->waterlevel = $waterlevel;
            $this->damage = $damage;
        }
        public static function get($id)
        {
            #echo "*2-$id*";
            $eventLists = [];
            require("connection_connect.php");
            $sql = "SELECT situation_id,county_name,situation_date,situation_time,water_level,damage_value FROM ReportSituation NATURAL JOIN County WHERE report_id = '$id' ORDER BY county_name,situation_date,situation_time";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc())
            {
                $sitid = $my_row[situation_id];
                $county = $my_row[county_name];
                $sdate = $my_row[situation_date];
                $stime = $my_row[situation_time];
                $waterlevel = $my_row[water_level];
                $damage = $my_row[damage_value];
                #echo "*3-$sitid*";
                #echo "*4-$county*";
                #echo "*5-$sdate*";
                #echo "*6-$stime*";
                #echo "*7-$waterlevel*";
                #echo "*8-$damage*";
    
                $eventLists[]= new Event($sitid,$county,$sdate,$stime,$waterlevel,$damage);
            }
            require("connection_close.php");
            return $eventLists;
            #echo "*9*";
        }

        public static function search($key)
        {
            require("connection_connect.php");
            $sql = "SELECT situation_id,county_name,situation_date,situation_time,water_level,damage_value FROM ReportSituation NATURAL JOIN County WHERE (county_name like '%$key%' or situation_date like '%$key%')";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc())
            {
                $sitid = $my_row[situation_id];
                $county = $my_row[county_name];
                $sdate = $my_row[situation_date];
                $stime = $my_row[situation_time];
                $waterlevel = $my_row[water_level];
                $damage = $my_row[damage_value];
                
                $eventLists[]= new Event($sitid,$county,$sdate,$stime,$waterlevel,$damage);

            }
            require("connection_close.php");
            return $eventLists;
        }

        public static function Add($id,$county,$sdate,$stime,$waterlevel,$damage)
        {
            require("connection_connect.php");
            $sql = "insert into ReportSituation(report_id,county_id,situation_date,situation_time,water_level,damage_value)
            values('$id','$county','$sdate','$stime','$waterlevel','$damage')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function getTo($sitid)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM ReportSituation NATURAL JOIN County WHERE situation_id ='$sitid'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $sitid = $my_row[situation_id];
            $county = $my_row[county_name];
            $sdate = $my_row[situation_date];
            $stime = $my_row[situation_time];
            $waterlevel = $my_row[water_level];
            $damage = $my_row[damage_value];
            #echo "*777-$sitid*";echo "*888-$county*";echo "*999-$sdate*";echo "*1010-$stime*";echo "*1111-$waterlevel*";echo "*1212-$damage*";
            require("connection_close.php");
            return new Event($sitid,$county,$sdate,$stime,$waterlevel,$damage);
        }

        public static function update($sitid,$county,$sdate,$stime,$waterlevel,$damage)
        {
            #echo "*h1-$sitid*";echo "*i1-$county*";echo "*j1-$sdate*";echo "*k1-$stime*";echo "*l1-$waterlevel*";echo "*m1-$damage*";

            require("connection_connect.php");
            $sql = "update ReportSituation set county_id = '$county',situation_date = '$sdate', situation_time = '$stime', water_level = '$waterlevel', damage_value = '$damage' WHERE situation_id = '$sitid' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function delete($sitid)
        {
            require("connection_connect.php");
            $sql = "Delete from ReportSituation WHERE situation_id = '$sitid' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }
    }
?>