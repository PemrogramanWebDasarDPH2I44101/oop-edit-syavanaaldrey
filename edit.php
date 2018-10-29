<?php
$nim = $_GET["nim"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Class.php" method="post">
        <center><h3>EDIT DATA</h3></center>
        <table align="center">
    <tr>
        <td>
            Masukan nim
        </td>
        <td>
            <input type="text" value="<?php echo $nim ?>" disabled>
        </td>
    <tr>
        <td>
            Masukan nama
        </td>
        <td>
            <input type="text" name="input2">
        </td>
    <tr>
        <td>
            <input type="hidden" name="input1" value="<?php echo $nim ?>">
        </td>
    <tr>
        <td colspan="2">
            <input type="submit" name="edit" value="Edit">
        </td>
    </tr>
</table>
    </form>
</body>
</html>
