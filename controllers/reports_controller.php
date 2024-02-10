<?php
class ReportsController
{
    public function detailStorm()
    {
        $sid = $_GET['sid'];
        $report_list = Report::get($sid);
        require_once('views/reports/detailStorm.php');
    }

    public function searchReport()
    {
        $key = $_GET['key'];
        $report_list = Report::search($key);
        require_once('views/reports/detailStorm.php');       
    }

    public function newArea()
    {
        $sid = $_GET['sid'];
        $subdistrict = Subdistrict::getAll();
        require_once('views/reports/newArea.php'); 
    }

    public function addNewArea()
    {
        $sid = $_GET['sid'];
        $SD_ID = $_GET['SD_ID'];
        Report::Add($sid,$SD_ID);
        ReportsController::detailStorm();
    }

    public function updateForm()
    {
        $sid = $_GET['sid'];
        $report_id = $_GET['report_id'];
        $report_list = Report::getTo($report_id);
        $subdistrict = Subdistrict::getAll();
        require_once('views/reports/updateForm.php');
    }

    public function update()
    {
        $sid = $_GET['sid'];
        $report_id = $_GET['report_id'];
        $SD_ID = $_GET['SD_ID'];
        Report::update($report_id,$SD_ID);
        ReportsController::detailStorm();
    }

    public function deleteConfirm()
    {
        $sid = $_GET['sid'];
        $report_id = $_GET['report_id'];
        $report_list = Report::getTo($report_id);
        require_once('views/reports/deleteConfirm.php');
    }

    public function delete()
    {
        $sid = $_GET['sid'];
        $report_id = $_GET['report_id'];
        Report::delete($report_id);
        ReportsController::detailStorm();
    }
}
?>