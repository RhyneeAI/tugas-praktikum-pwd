<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6</title>
    <style>
        body {
            font-family: sans-serif;
        }
        table {
            width: 60%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #00ff00;
        }
        .yellow {
            background-color: #ffff00;
        }
        .blue {
            background-color: #00ffff;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>1. Pengulangan 1 sampai 10 dan menampilkan hanya genap</h2>
    <h3 class="text-center">
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <?php if($i % 2 == 0) { ?>
            <?php echo $i ?>
        <?php } ?>
    <?php } ?>
    </h3>
    <br>

    <h2>2. Tabel perkalian</h2>
    <table border="1" width="50%">
        <tr>
            <th>Bilangan</th>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <th><?php echo $i ?></th>
            <?php } ?>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <tr>
                <th><?php echo $i ?></th>
                <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <td class="<?php echo (($i * $j) % 2 == 0) ? 'blue' : 'yellow'; ?>">
                        <?= $i * $j ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>
</html>