<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
        <h5><br><br>
                <form method="GET" action="">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <label> วันที่บันทึก <input type="date" name="date" value="<?php echo $rain_list->date; ?>" /></label><br><br>
                        <label> ปริมาณน้ำฝน <input type="text" name="amount" value="<?php echo $rain_list->amount; ?>" /></label><br><br>
                        <label> ครอบคลุมพื้นที่(%) <input type="text" name="cover" value="<?php echo $rain_list->cover; ?>" /></label><br><br><br><br>

                        <input type="hidden" name="controller" value="recordRain" />
                        <input type="hidden" name="did" value="<?php echo $did; ?>" />
                        <button type="submit" class="btn btn-dark" name="action" value="rain">Back</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success" name="action" value="update">Save</button>
        </h5>
        </form>
</div>