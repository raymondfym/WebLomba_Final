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
    <form action="/Lomba/Ubah/<?= $data['lomba_id'];?>"method="post">
        <label for="namaLomba">Nama Lomba:</label>
        <input type="text" id="namaLomba" name="namaLomba" value="<?= $data['kategori_lomba']; ?>"><br>
        <label for="status">Status Lomba:</label>
        <select id="statusLomba" name="statusLomba">
        <?php if($data['status_lomba']=="aktif"):?>
            <option selected value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
        <?php elseif($data['status_lomba']!="aktif"):?>
            <option value="aktif">Aktif</option>
            <option selected value="nonaktif">Nonaktif</option>
        <?php endif?>
        </select><br>       
        <button type="submit">Apply</button> 
    </form>
</body>

</html>