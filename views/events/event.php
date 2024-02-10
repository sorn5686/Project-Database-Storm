<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <div class="container text-center">
        <br><br><h2>รายงานสถานการณ์รายวัน </h2>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <form method="get" action="">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="controller" value="recordEvent" />
            <button type="submit" class="btn btn-warning" name="action" value="newEvent"> Creat New Event </button><br><br>
            <div class="input-group mb-3">
                <input class="form-control me-2" type="Search" name="key" />
                <button type="submit" class="btn btn-secondary" name="action" value="searchEvent"> search </button>
            </div>
        </form>
</div>
        <table border=1 class="table table-hover table-bordered">
            <tr class="table-primary" align="center">
                <td> เขต </td>
                <td> วันเกิดเหตุ </td>
                <td> เวลา </td>
                <td> ระดับน้ำ(เซนติเมตร) </td>
                <td> มูลค่าความเสียหาย(บาท) </td>
                <td> UPDATE </td>
                <td> DELETE </td>
            </tr>
            <?php foreach ($event_list as $eventlist) {
                echo "<tr><td>$eventlist->county</td><td>$eventlist->sdate</td><td>$eventlist->stime</td>
    <td>$eventlist->waterlevel</td><td>$eventlist->damage</td>
    <td style='text-align:center'><a href=?controller=recordEvent&action=updateForm&id=$id&sitid=$eventlist->sitid class='btn btn-primary'>Update</a></td>
    <td style='text-align:center'><a href=?controller=recordEvent&action=deleteConfirm&id=$id&sitid=$eventlist->sitid class='btn btn-danger'>Delete</a></td>
    </tr>";
            }
            echo "</table>";
            ?>
<br>
<?php echo"<a href=?controller=reports&action=detailStorm&sid=$sid class='btn btn-dark'>BACK</a>";?>