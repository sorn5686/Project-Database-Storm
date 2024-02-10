<?php 
class County
{ 
    public $CT_ID;
    public $CT_NAME;
    public $SD_ID;

    public function __construct($CT_ID,$CT_NAME,$SD_ID)
    {
        $this->CT_ID = $CT_ID;
        $this->CT_NAME = $CT_NAME;
        $this->SD_ID = $SD_ID;
        
    }
    public static function getAll($id)
    {
        $county_list=[];
        require("connection_connect.php");
        $sql = "SELECT county_id,county_name,County.subdistrict_id FROM County INNER JOIN ReportStorm ON County.subdistrict_id = ReportStorm.subdistrict_id WHERE ReportStorm.report_id = '$id'";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $CT_ID = $my_row[county_id];
            $CT_NAME = $my_row[county_name];
            $SD_ID = $my_row[subdistrict_id];

            $county_list[]=new County($CT_ID,$CT_NAME,$SD_ID);
        }
        require("connection_close.php");
        return $county_list;
    }
        
}