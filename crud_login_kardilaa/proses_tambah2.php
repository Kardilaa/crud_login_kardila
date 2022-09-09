<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_tambah.php" method="post">
        <div>
            <label>username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>role</label>
            <select name="asal" id="">
                <option value="1">admin</option>
                <option value="2">user</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>