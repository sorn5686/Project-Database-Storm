<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
    <div class="container text-center">
    <br><h2>รายชื่อพายุที่พัดผ่านประเทศไทย</h2>
    </div>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <form method="get" action="">
            <div class="input-group mb-3">
                <input class="form-control me-2" type="Search" name="key" />
                <input type="hidden" name="controller" value="storms" />
                <button type="submit" class="btn btn-secondary" name="action" value="searchStorm"> search </button>
            </div>
        </form>
</div>
<table border=1 class="table table-hover table-bordered">
    <tr class="table-primary" align="center">
        <td> ลำดับที่ </td>
        <td> ชื่อพายุ </td>
        <td> รายละเอียด </td>
        <?php foreach ($storm_list as $stormlist) {
            echo "<tr><td>$stormlist->id</td><td>$stormlist->name_id</td> 
    <td style='text-align:center' ><a href=?controller=reports&action=detailStorm&sid=$stormlist->id class='btn btn-info'>รายละเอียด</a></td>
    </tr>";
        }
        echo "</table>";
        ?>