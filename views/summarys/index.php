<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container">
<div class="container text-center">
    <br><br><h2>สรุปการรายงานผล</h2>
</div>
<br><br>
<table border=1 class="table table-hover table-bordered">
    <tr class="table-primary" align="center">
        <td> เขต </td>
        <td> วันที่เกิดเหตุ </td>
        <td> ระดับน้ำสูงสุดของวัน </td>
        <td> ระดับน้ำเฉลี่ยของวัน </td>
        <td> ความเสียหายรวม </td>
        <td> สถานการณ์ภาพรวม </td>
        <?php foreach ($sumList as $s) {
            echo "<tr><td>$s->county</td><td>$s->sdate</td><td>$s->Mwater</td>
            <td>$s->Awater</td><td>$s->damage</td><td>$s->situa</td></tr>";
        }
        echo "</table>";
        ?>