<?php
    class RecordEventController
    {
        public function event()
        {
            $sid = $_GET['sid'];
            $id = $_GET['id'];
            #echo "*1-$id*";
            $event_list = Event::get($id);
            #echo "*10*";
            require_once('views/events/event.php');
        }

        public function searchEvent()
        {
            $key = $_GET['key'];
            $event_list = Event::search($key);
            require_once('views/events/event.php');       
        }

        public function newEvent()
        {
            $id = $_GET['id'];
            $county = County::getAll($id);
            require_once('views/events/newEvent.php');
        }

        public function addNewEvent()
        {
            $id = $_GET['id'];
            $county = $_GET['county'];
            $sdate = $_GET['sdate'];
            $stime = $_GET['stime'];
            $waterlevel = $_GET['waterlevel'];
            $damage = $_GET['damage'];
            #echo "*111-$id*";echo "*222-$county*";echo "*333-$sdate*";echo "*444-$stime*";echo "*555-$waterlevel*";echo "*666-$damage*";
            Event::Add($id,$county,$sdate,$stime,$waterlevel,$damage);
            RecordEventController::event();
        }

        public function updateForm()
        {
            $id = $_GET['id'];
            $sitid = $_GET['sitid'];
            $event_list = Event::getTo($sitid);
            #echo "*a-$event_list->sitid*";echo "*b-$event_list->county*";echo "*c-$event_list->sdate*";echo "*d-$event_list->stime*";echo "*e-$event_list->waterlevel*";echo "*f-$event_list->damage*";
            $county = County::getAll($id);


            require_once('views/events/updateForm.php');
        }

        public function update()
        {
            $id = $_GET['id'];
            $sitid = $_GET['sitid'];
            $county = $_GET['county'];
            $sdate = $_GET['sdate'];
            $stime = $_GET['stime'];
            $waterlevel = $_GET['waterlevel'];
            $damage = $_GET['damage'];
            #echo "*g-$id*";echo "*h-$sitid*";echo "*i-$county*";echo "*j-$sdate*";echo "*k-$stime*";echo "*l-$waterlevel*";echo "*m-$damage*";

            Event::update($sitid,$county,$sdate,$stime,$waterlevel,$damage);
            RecordEventController::event();

        }

        public function deleteConfirm()
        {
            $id = $_GET['id'];
            $sitid = $_GET['sitid'];
            $event_list = Event::getTo($sitid);
            require_once('views/events/deleteConfirm.php');
        }

        public function delete()
        {
            $id = $_GET['id'];
            $sitid = $_GET['sitid'];
            Event::delete($sitid);
            RecordEventController::event();
        }

    }
?>
