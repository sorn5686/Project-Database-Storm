<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
    <?php
    echo "<h5><br>Are you sure to delete this Event<br> <br> ณ เขต $event_list->county ในวันที่ $event_list->sdate เวลา $event_list->stime มีระดับน้ำ $event_list->waterlevel เซนติเมตร และมีมูลค่าความเสียหาย $event_list->damage บาท <br><br><br></h5>";
    ?>
    <form method="GET" action="">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="controller" value="recordEvent" />
        <input type="hidden" name="sitid" value="<?php echo $sitid; ?>" />
        <button type="submit" class="btn btn-dark" name="action" value="event">Back</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger" name="action" value="delete">Delete</button>
    </form>
</div>