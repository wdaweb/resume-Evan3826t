<h2>證照</h2>
<table>

<?php
include_once ("base.php");

$data = selectA("license");
$i = 1;
foreach($data as $row){
    ?>
    <tr>
        <td><?=$i?>_<?=$row['license']?></td>
        <td>
            <input type="button" class="edit" data-id="<?=$row['id']?>" value="更改">
            <input type="button" class="del" data-id="<?=$row['id']?>" value="刪除">
        </td>
    </tr>

    <?php
    $i++;
}
?>
</table>
