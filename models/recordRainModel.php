<?php
class Rain
{
    public $did;
    public $date;
    public $amount;
    public $cover;

    public function __construct($did,$date,$amount,$cover)
    {
        $this->did = $did;
        $this->date = $date;
        $this->amount = $amount;
        $this->cover = $cover;
    }

    public static function get($id)
    {
        $rainLists = [];
        require("connection_connect.php");
        $sql = "SELECT daily_id,daily_date,amount_rainfall,cover_area FROM ReportRainDaily WHERE report_id = '$id'";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {
            $did = $my_row[daily_id];
            $date = $my_row[daily_date];
            $amount = $my_row[amount_rainfall];
            $cover = $my_row[cover_area];

            $rainLists[]= new Rain($did,$date,$amount,$cover);
        }
        require("connection_close.php");
        return $rainLists;
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT daily_id,daily_date,amount_rainfall,cover_area FROM ReportRainDaily WHERE (daily_date like '%$key%' or amount_rainfall like '%$key%' or cover_area like '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {
            $did = $my_row[daily_id];
            $date = $my_row[daily_date];
            $amount = $my_row[amount_rainfall];
            $cover = $my_row[cover_area];

            $rainLists[]= new Rain($did,$date,$amount,$cover);

        }
        require("connection_close.php");
        return $rainLists;
    }
    public static function Add($id,$date,$amount,$cover)
    {
        require("connection_connect.php");
        $sql = "insert into ReportRainDaily(report_id,daily_date,amount_rainfall,cover_area)
        values('$id','$date','$amount','$cover')";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "add success $result rows";
    }
    
    public static function getTo($did)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM ReportRainDaily WHERE daily_id ='$did'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $did = $my_row[daily_id];
        $date = $my_row[daily_date];
        $amount = $my_row[amount_rainfall];
        $cover = $my_row[cover_area];
        require("connection_close.php");
        return new Rain($did,$date,$amount,$cover);
    }

    public static function update($did,$date,$amount,$cover)
    {
        require("connection_connect.php");
        $sql = "update ReportRainDaily set daily_date = '$date',amount_rainfall = '$amount', cover_area = '$cover' WHERE daily_id = '$did' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($did)
    {
        require("connection_connect.php");
        $sql = "Delete from ReportRainDaily WHERE daily_id = '$did' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }


}
?>