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
        <center><h3>ISI DATA DISINI</h3></center>
<table align="center">
    <tr>
        <td>
            Masukan nim
        </td>
        <td>
            <input type="text" name="input1">
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
            Pilih Operasi
        </td>
        <td>
            <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        </td>
    <tr align="center">
        <td colspan="2">
            <input type="submit" value="Kirim">
        </td>
    </tr>
</table>
    </form>
</body>
</html>

