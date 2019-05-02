<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php foreach ($artikel->result() as $row) { ?>
        <tr>
            <td><?php echo $row->judul_artikel ?></td>
            <td><?php echo $row->isi_artikel ?></td>
        </tr>
    <?php } ?>
</body>
</html>