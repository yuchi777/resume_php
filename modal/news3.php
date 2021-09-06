<?php 
include "../base.php";
?>

<h3 style="text-align: center;"><?= $as['news3']; ?></h3>
<hr>

<form action="api/add.php" method="post" enctype="multipart/form-data">
<table style="margin: auto;">   
    <tr>
        <td style="text-align: right;">經歷: </td>
        <td>
            <textarea name="title"  cols="30" rows="5"></textarea>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">內容: </td>
        <td>
            <textarea name="text"  cols="30" rows="5"></textarea>
        </td>
    </tr>
    
</table>
<div style="text-align: center;">
    <input type="submit" value="新增">
    <input type="reset" value="重置">

    <!-- 資料表image -->
    <input type="hidden" name="table" value="news3">
</div>
</form>