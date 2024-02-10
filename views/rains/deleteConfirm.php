<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container text-center">
    <?php
    echo "<h5><br>Are you sure to delete this Day<br> <br> ณ วันที่ $rain_list->date ที่ปริมาณน้ำฝน $rain_list->amount มิลลิเมตร ครอบคลุมพื้นที่คิดเป็น $rain_list->cover (%) <br><br><br></h5>";
    ?>
    <form method="GET" action="">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="controller" value="recordRain" />
        <input type="hidden" name="did" value="<?php echo $did; ?>" />
        <button type="submit" class="btn btn-dark" name="action" value="rain">Back</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-danger" name="action" value="delete">Delete</button>
    </form>
</div>