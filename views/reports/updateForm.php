<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
    <h5><br><br>
        <form method="GET" action="">
            <input type="hidden" name="sid" value="<?php echo $sid ?>">
            <label> ตำบล <select name="SD_ID">
                    <?php
                    foreach ($subdistrict as $sd) {
                        echo "<option value = $sd->SD_ID";
                        if ($sd->SD_NAME == $report_list->sd_name) {
                            echo " selected='selected' ";
                        }
                        echo ">$sd->SD_NAME</option>";
                    }
                    ?>
                </select></label><br><br><br><br>

            <input type="hidden" name="controller" value="reports" />
            <input type="hidden" name="report_id" value="<?php echo $report_id; ?>" />
            <button type="submit" class="btn btn-dark" name="action" value="detailStorm">Back</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-success" name="action" value="update">update</button>
    </h5>
    </form>
</div>