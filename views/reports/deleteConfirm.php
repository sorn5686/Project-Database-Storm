<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
    <?php
    echo "<h5><br>Are you sure to delete this Address<br> <br> ณ จังหวัด $report_list->pr_name อำเภอ $report_list->d_name ตำบล $report_list->sd_name <br><br><br></h5>";
    ?>
    <form method="GET" action="">
        <input type="hidden" name="sid" value="<?php echo $sid ?>">
        <input type="hidden" name="controller" value="reports" />
        <input type="hidden" name="report_id" value="<?php echo $report_id; ?>" />
        <button type="submit" class="btn btn-dark" name="action" value="detailStorm">Back</button> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger" name="action" value="delete">Delete</button>
    </form>
</div>