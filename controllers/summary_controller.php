<?php
    class SummaryController
    {  
        public function index()
        {
            $sumList = Summary::getAll();
            require_once('views/summarys/index.php');
        }
    }
?>