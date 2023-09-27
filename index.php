<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chu</title>
</head>
<body>
    <?php
    include_once("config.php");
    ?>
    <h1 style="text-align:center">TRANG CHỦ</h1>
    <table border="1" style="margin-left: 600px;">
    <tr>
        <th class = "row1">Tên</th>
        <th class  ="row2">Tuổi</th>
        <th class  ="row3">Địa chỉ</th>
        <th><a href="them.php">Thêm</a></th>
    </tr>
    <?php
    $sql = "select * from sinhvien"; 
    $result = mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td class="row1"><?php echo $rows['ten'] ?></td>
        <td class="row2"><?php echo $rows['tuoi'] ?></td>
        <td class="row3"><?php echo $rows['diachi'] ?></td>
        <td colspan="2"> <a href="sua.php?id=<?php echo $rows['id'] ?>"><input type="submit" name="sua" value="Sua"></a> <a href="xoa.php?id=<?php echo $rows['id'] ?>"><input type="submit" name="xoa" value="Xoa"></a></td>
    </tr>
    <?php
    }
    ?>
    </table>
<style>
    .row1{
        width: 150px;
    }
    .row2{
        width: 60px;
    }
    .row3{
        width: 200px;
    }

</style>
</body>
</html>