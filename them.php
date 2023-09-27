<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
</head>

<body>
    <h1 style="text-align: center;">Thêm dữ liệu</h1>
    <?php
    include_once("config.php");
    if (isset($_POST["quit"])) {
        header("location:index.php");
    }
    if (isset($_POST['them'])) {
        $ten = $_POST['ten'];
        $tuoi =  $_POST['tuoi'];
        $diachi =  $_POST['diachi'];
        $sql = "INSERT INTO sinhvien(ten, tuoi, diachi) VALUES ('$ten','$tuoi','$diachi')";
        if (empty($_POST['ten']) || empty($_POST['tuoi']) || empty($_POST['diachi'])) {
            echo "nhập đủ dữ liệu vào đê";
        } else {
            $result = mysqli_query($conn, $sql);
            header("location:index.php");
        }
    }
    ?>
    <form action="" method="POST">
        <table border="1" style="margin-left: 750px;">
            <tr>
                <td>tên</td>
                <td><input type="text" name="ten"></td>
            </tr>
            <tr>
                <td>tuổi</td>
                <td><input type="text" name="tuoi"></td>
            </tr>
            <tr>
                <td>địa chỉ</td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" style="margin-left:40px" name="them" value="Them"> <input type="submit" style="margin-left:20px" name="quit" value="Quit"></td>
            </tr>
        </table>
    </form>
</body>

</html>