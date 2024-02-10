<?php
$controllers = array('pages'=>['home','error'],'storms'=>['storm','searchStorm'],'reports'=>['detailStorm','searchReport','newArea','addNewArea','updateForm','update','deleteConfirm','delete'],'recordRain'=>['rain','searchRain','newDay','addNewDay','updateForm','update','deleteConfirm','delete'],'recordEvent'=>['event','searchEvent','newEvent','addNewEvent','updateForm','update','deleteConfirm','delete'],'summary'=>['index']);

function call($controller,$action)
{
    #echo "routes to ".$controller." - ".$action."<br>";
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages": $controller = new PagesController();
                      break;
        case "storms" : require_once("models/stormModel.php"); 
                         $controller = new StormsController();
                         break;
        case "reports" : require_once("models/reportModel.php");
                         require_once("models/subdistrictModel.php");
                         $controller = new ReportsController();
                         break;
        case "recordRain" : require_once("models/recordRainModel.php");
                            $controller = new RecordRainController();
                            break;
        case "recordEvent" : require_once("models/recordEventModel.php");
                             require_once("models/countyModel.php");
                             $controller = new RecordEventController();
                             break; 
        case "summary" : require_once("models/summaryModal.php");
                         $controller = new SummaryController();
                         break;           
    }
    $controller -> {$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else
    {
        call('pages','error');
    }
}
else
{
    call('pages','error');
}
?>