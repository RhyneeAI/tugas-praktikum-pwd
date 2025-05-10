<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1" width="50%"> 
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </thead>
        <tbody>
            <?php
                require_once 'buku.php';
                $buku = new Buku();
                $data = $buku->showBooks();

                foreach($data as $index => $value):
            ?>

            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $value['judul'] ?></td>
                <td><?= $value['pengarang'] ?></td>
                <td><?= $value['tahun_terbit'] ?></td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>