<?php
class Report
{
    public $report_id;
    public $pr_name;
    public $d_name;
    public $sd_name;

    public function __construct($report_id,$pr_name,$d_name,$sd_name)
    {
        $this->report_id = $report_id;
        $this->pr_name = $pr_name;
        $this->d_name = $d_name;
        $this->sd_name = $sd_name;
    }

    public static function get($sid)
    {
        $reportLists = [];
        require("connection_connect.php");
        $sql = "SELECT report_id,province_name,district_name,subdistrict_name FROM ReportStorm NATURAL JOIN Subdistrict NATURAL JOIN District NATURAL JOIN Province WHERE sid ='$sid'";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {
            $report_id = $my_row[report_id];
            $pr_name = $my_row[province_name];
            $d_name = $my_row[district_name];
            $sd_name = $my_row[subdistrict_name];

            $reportLists[]= new Report($report_id,$pr_name,$d_name,$sd_name);
        }
        require("connection_close.php");
        return $reportLists;
    }

    public static function getTo($report_id)
    {
        require("connection_connect.php");
        $sql = "SELECT report_id,province_name,district_name,subdistrict_name FROM ReportStorm NATURAL JOIN Subdistrict NATURAL JOIN District NATURAL JOIN Province WHERE report_id ='$report_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $report_id = $my_row[report_id];
        $pr_name = $my_row[province_name];
        $d_name = $my_row[district_name];
        $sd_name = $my_row[subdistrict_name];
        require("connection_close.php");
        return new Report($report_id,$pr_name,$d_name,$sd_name);
    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT report_id,province_name,district_name,subdistrict_name FROM ReportStorm NATURAL JOIN Subdistrict NATURAL JOIN District NATURAL JOIN Province WHERE (province_name like '%$key%' or district_name like '%$key%' or subdistrict_name like '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {
            $report_id = $my_row[report_id];
            $pr_name = $my_row[province_name];
            $d_name = $my_row[district_name];
            $sd_name = $my_row[subdistrict_name];

            $reportLists[]= new Report($report_id,$pr_name,$d_name,$sd_name);

        }
        require("connection_close.php");
        return $reportLists;
    }

    public static function Add($sid,$SD_ID)
    {
        require("connection_connect.php");
        $sql = "insert into ReportStorm(sid,subdistrict_id)
        values('$sid','$SD_ID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }    

    public static function update($report_id,$SD_ID)
    {
        require("connection_connect.php");
        $sql = "update ReportStorm set subdistrict_id = '$SD_ID' WHERE report_id = '$report_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($report_id)
    {
        require("connection_connect.php");
        $sql = "Delete from ReportStorm WHERE report_id = '$report_id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>