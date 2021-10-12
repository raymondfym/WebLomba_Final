<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Lomba</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;

        }
    </style>
</head>

<body>
    <h1>List Lomba</h1>
    <a href="/Lomba/Tambah">
        <button>TambahLomba</button>
    </a>
    <br>
    <br>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Lomba</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach ($data as $lomba) : ?>
            <tr>
                <td><?= $nomor++;  ?></td>
                <td><?= $lomba['kategori_lomba']; ?></td>
                <td><?= $lomba['status_lomba']; ?></td>
                <td>
                    <a href="Lomba/Edit/<?= $lomba['lomba_id']; ?>">
                        <button type="button" class="btn">
                            Edit
                        </button></a>
                    <a href="Lomba/Hapus/<?= $lomba['lomba_id']; ?>">
                        <button type="button" class="btn">
                            Hapus
                        </button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>