<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lomba</title>
</head>

<body>
    <h1>Tambah lomba</h1>
    <form action="/lomba/simpan" method="post">
        <label for="namaLomba">Nama Lomba:</label>
        <input type="text" id="namaLomba" name="namaLomba" placeholder="Nama Lomba"><br>
        <label for="namaLomba">Status Lomba:</label>
        <select id="statusLomba" name="statusLomba">
            <option selected disabled hidden>Status Lomba</option>
            <option value="Aktif">Aktif</option>
            <option value="Nonaktif">Nonaktif</option>
        </select><br>
        <button type="submit">Tambahkan</button>
    </form>
</body>

</html>