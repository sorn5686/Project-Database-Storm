<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
    <h5><br><br>
        <form method="GET" action="">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label> เขต <select name="county">
                    <?php
                    foreach ($county as $c) {
                        echo "<option value = $c->CT_ID";
                        if ($c->CT_NAME == $event_list->county) {
                            echo " selected='selected' ";
                        }
                        echo ">$c->CT_NAME</option>";
                    }
                    ?>
                </select></label><br><br>

            <label> วันเกิดเหตุ <input type="date" name="sdate" value="<?php echo $event_list->sdate; ?>" /> </label><br><br>
            <label> เวลา <input type="time" name="stime" value="<?php echo $event_list->stime; ?>" /> </label><br><br>
            <label> ระดับน้ำ(เซนติเมตร) <input type="text" name="waterlevel" value="<?php echo $event_list->waterlevel; ?>" /> </label><br><br>
            <label> มูลค่าความเสียหาย(บาท) <input type="text" name="damage" value="<?php echo $event_list->damage; ?>" /> </label><br><br><br><br>

            <input type="hidden" name="controller" value="recordEvent" />
            <input type="hidden" name="sitid" value="<?php echo $sitid; ?>" />
            <button type="submit" class="btn btn-dark" name="action" value="event">Back</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-success" name="action" value="update">update</button>
    </h5>
    </form>
</div>