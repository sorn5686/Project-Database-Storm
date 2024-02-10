<?php
class Summary
{
        public $county;
        public $sdate;
        public $Mwater;
        public $Awater;
        public $damage;
        public $situa;

        public function __construct($county,$sdate,$Mwater,$Awater,$damage,$situa)
        {
            $this->county = $county;
            $this->sdate = $sdate;
            $this->Mwater = $Mwater;
            $this->Awater = $Awater;
            $this->damage = $damage;
            $this->situa = $situa;
        }

        public static function getAll()
        {
            $sumLists = [];
            require("connection_connect.php");
            $sql = "SELECT C.county_name AS 'county',
                RS.situation_date AS 'sdate',
                MAX(RS.water_level) AS 'Mwater',
                AVG(RS.water_level) AS 'Awater',
                SUM(RS.damage_value) AS 'damage',
                CASE
                    WHEN MAX(RS.water_level) >= 1 AND MAX(RS.water_level) <= 30 THEN 'น้ำท่วมระดับต่ำ'
                    WHEN MAX(RS.water_level) >= 31 AND MAX(RS.water_level) <= 90 THEN 'น้ำท่วมระดับปานกลาง'
                    WHEN MAX(RS.water_level) > 90 THEN 'น้ำท่วมระดับสูง'
                    ELSE NULL
                END AS 'situa'
            FROM ReportSituation AS RS
            JOIN County AS C ON RS.county_id = C.county_id
            GROUP BY C.county_name, RS.situation_date
            ORDER BY RS.situation_date";
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc())
            {
                $county = $my_row[county];
                $sdate = $my_row[sdate];
                $Mwater = $my_row[Mwater];
                $Awater = $my_row[Awater];
                $damage = $my_row[damage];
                $situa = $my_row[situa];

                $sumLists[]= new Summary($county,$sdate,$Mwater,$Awater,$damage,$situa);
            }
            require("connection_close.php");
            return $sumLists;
        }
}
?>