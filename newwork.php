<h2>求職狀態</h2>
<?php
include_once ("./api/base.php");
$row = selectA("newwork");

foreach( $row as $value){
    if($value['sh'] == 1){
        echo "<table>";
        echo "<tr>";
        echo "<td>工作類型：</td>";
        echo "<td>" . $value['work_type'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>工作地點：</td>";
        echo "<td>" . $value['location'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>希望待遇：</td>";
        echo "<td>" . $value['salary'] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>職位：</td>";
        echo "<td>" . $value['position'] . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<br>";
    }
}
?>
