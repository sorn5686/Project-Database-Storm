<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <div class="container text-center">
        <br><br><h2>รายชื่อตำบลที่ได้รับผลกระทบจากพายุ</h2>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <form method="get" action="">
                <input type="hidden" name="sid" value="<?php echo $sid ?>">
                <button type="submit" class="btn btn-warning" name="action" value="newArea"> Creat New Area </button><br><br>
            <div class="input-group mb-3">
                <input class="form-control me-2" type="Search" name="key" />
                <input type="hidden" name="controller" value="reports" />
                <button type="submit" class="btn btn-secondary" name="action" value="searchReport"> search </button>
            </div>
        </form>

</div>

<table border=1 class="table table-hover table-bordered">
    <tr class="table-primary" align="center">
        <td> จังหวัด </td>
        <td> อำเภอ </td>
        <td> ตำบล </td>
        <td> บันทึกน้ำฝนรายวัน </td>
        <td> สถานการณ์ </td>
        <td> UPDATE </td>
        <td> DELETE </td>
        <?php foreach ($report_list as $reportlist) {
            echo "<tr><td>$reportlist->pr_name</td><td>$reportlist->d_name</td> 
    <td>$reportlist->sd_name</td>
    <td style='text-align:center' ><a href=?controller=recordRain&action=rain&sid=$sid&id=$reportlist->report_id class='btn btn-info'>รายละเอียด</a></td>
    <td style='text-align:center' ><a href=?controller=recordEvent&action=event&sid=$sid&id=$reportlist->report_id class='btn btn-info'>รายละเอียด</a></td>
    <td style='text-align:center' ><a href=?controller=reports&action=updateForm&sid=$sid&report_id=$reportlist->report_id class='btn btn-primary'>Update</a></td>
    <td style='text-align:center' ><a href=?controller=reports&action=deleteConfirm&sid=$sid&report_id=$reportlist->report_id class='btn btn-danger'>Delete</a></td>
    </tr>";
        }
        echo "</table>";

        ?>