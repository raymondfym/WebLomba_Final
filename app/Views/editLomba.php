<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lomba</title>
</head>
<body>
    <h1>Edit Lomba</h1>
    <form action="">
        <label for="namaLomba">Nama Lomba:</label>
        <input type="text" id="namaLomba" name="namaLomba" value="<?= $id['kategori_lomba']; ?>"><br>
        <label for="status">Status Lomba:</label>
        <select id="status" name="status">
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        </select><br>       
        <button type="submit">Apply</button> 
    </form>
</body>
</html>