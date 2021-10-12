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
    <form action="/lomba/update/<?= $data['lomba_id']; ?>" method="post">
        <label for="namaLomba">Nama Lomba:</label>
        <input type="text" id="namaLomba" name="namaLomba" value="<?= $data['kategori_lomba']; ?>"><br>
        <label for="statusLomba">Status Lomba:</label>
        <select id="statusLomba" name="statusLomba">
            <option value="Aktif" <?= $data['status_lomba'] === 'Aktif' ? 'Selected' : ''; ?>>Aktif</option>
            <option value="Nonaktif" <?= $data['status_lomba'] === 'Nonaktif' ? 'Selected' : ''; ?>>Nonaktif</option>
        </select><br>
        <button type="submit">Apply</button>
    </form>
</body>

</html>