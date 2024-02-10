<?php 
class Subdistrict
{ 
    public $SD_ID;
    public $SD_NAME;
    public $D_ID;

    public function __construct($SD_ID,$SD_NAME,$D_ID)
    {
        $this->SD_ID = $SD_ID;
        $this->SD_NAME = $SD_NAME;
        $this->D_ID = $D_ID;
        
    }
    public static function getAll()
    {
        $subdistrict_list=[];
        require("connection_connect.php");
        $sql = "select * from Subdistrict";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $SD_ID = $my_row[subdistrict_id];
            $SD_NAME = $my_row[subdistrict_name];
            $D_ID = $my_row[district_id];

            $subdistrict_list[] = new Subdistrict($SD_ID,$SD_NAME,$D_ID);
        }
        require("connection_close.php");
        return $subdistrict_list;
    }
        
}