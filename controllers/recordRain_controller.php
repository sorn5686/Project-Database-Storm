<?php
    class RecordRainController
    {
        public function rain()
        {
            $sid = $_GET['sid'];
            $id = $_GET['id'];
            $rain_list = Rain::get($id);
            require_once('views/rains/rain.php');
        }
        public function searchRain()
        {
            $key = $_GET['key'];
            $rain_list = Rain::search($key);
            require_once('views/rains/rain.php');       
        }

        public function newDay()
        {
            $id = $_GET['id'];
            require_once('views/rains/newDay.php');
        }

        public function addNewDay()
        {
            $id = $_GET['id'];
            $date = $_GET['date'];
            $amount = $_GET['amount'];
            $cover = $_GET['cover'];
            Rain::Add($id,$date,$amount,$cover);
            RecordRainController::rain();
        }

        public function updateForm()
        {
            $id = $_GET['id'];
            $did = $_GET['did'];
            $rain_list = Rain::getTo($did);
            require_once('views/rains/updateForm.php');
        }

        public function update()
        {
            $id = $_GET['id'];
            $did = $_GET['did'];
            $date = $_GET['date'];
            $amount = $_GET['amount'];
            $cover = $_GET['cover'];
            Rain::update($did,$date,$amount,$cover);
            RecordRainController::rain();

        }

        public function deleteConfirm()
        {
            $id = $_GET['id'];
            $did = $_GET['did'];
            $rain_list = Rain::getTo($did);
            require_once('views/rains/deleteConfirm.php');
        }

        public function delete()
        {
            $id = $_GET['id'];
            $did = $_GET['did'];
            Rain::delete($did);
            RecordRainController::rain();
        }

    }
?>