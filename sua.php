<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>

<body>
    <h1 style="text-align: center;">Sửa dữ liệu</h1>
    <?php
    $id = $_GET['id'];
    $sql_select = "SELECT * FROM sinhvien WHERE id = $id";
    $result = mysqli_query($conn,$sql_select);
    $row = mysqli_fetch_array($result);
    ?>
    <form action="" method="POST">
        <table border="1" style="margin-left: 750px;">
            <tr>
                <td>tên</td>
                <td><input type="text" name="ten" value="<?php echo $row['ten'] ?>"></td>
            </tr>
            <tr>
                <td>tuổi</td>
                <td><input type="text" name="tuoi" value="<?php echo $row['tuoi'] ?>"></td>
            </tr>
            <tr>
                <td>địa chỉ</td>
                <td><input type="text" name="diachi" value="<?php echo $row['diachi'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" style="margin-left:50px" name="sua" value="Sửa"> <input type="submit" style="margin-left:20px" name="quit" value="Quit"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["quit"])) {
        header("location:index.php");
    }
    if (isset($_POST['sua'])) {
        $ten = $_POST['ten'];
        $tuoi =  $_POST['tuoi'];
        $diachi =  $_POST['diachi'];
        $sql_update = "UPDATE sinhvien SET ten='$ten',tuoi='$tuoi',diachi='$diachi' WHERE id = $id";
        mysqli_query($conn,$sql_update);
        header("location:index.php");
    }
    ?>
</body>

</html>