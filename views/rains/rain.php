<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <div class="container text-center">
        <br><br><h2>รายงานปริมาณน้ำฝนรายวัน</h2>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <form method="get" action="">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="hidden" name="sid" value="<?php echo $sid ?>">
            <input type="hidden" name="controller" value="recordRain" />
            <button type="submit" class="btn btn-warning" name="action" value="newDay"> Creat New Day </button><br><br>
            <div class="input-group mb-3">
                <input class="form-control me-2" type="Search" name="key" />
                <button type="submit" class="btn btn-secondary" name="action" value="searchRain"> search </button>
            </div>
        </form>
    </div>

    <table border=1 class="table table-hover table-bordered">
        <tr class="table-primary" align="center">
            <td> วันที่บันทึก </td>
            <td> ปริมาณน้ำฝน(มิลลิเมตร) </td>
            <td> ครอบคลุมพื้นที่(%) </td>
            <td> UPDATE </td>
            <td> DELETE </td>
            <?php foreach ($rain_list as $rainlist) {
                echo "<tr><td>$rainlist->date</td><td>$rainlist->amount</td><td>$rainlist->cover</td>
    <td style='text-align:center'><a href=?controller=recordRain&action=updateForm&id=$id&did=$rainlist->did class='btn btn-primary'>Update</a></td>
    <td style='text-align:center'><a href=?controller=recordRain&action=deleteConfirm&id=$id&did=$rainlist->did class='btn btn-danger'>Delete</a></td>
    </tr>";
            }
            echo "</table>";

            ?>
<br>
<?php echo"<a href=?controller=reports&action=detailStorm&sid=$sid class='btn btn-dark'>BACK</a>";?>