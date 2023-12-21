<html>
<center>
    <br><br><br><br><br><br><br><br><br>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h2>เรามาเรียนกันเล๊ยย</h2>
    <?php $multi_x = 625; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class="multiply-container">
        <table>
            <tbody>
                <?php
                    for ($i = 1; $i <= 24; $i++) {
                        ?>
                        <tr>
                            <td><?php echo $multi_x ?></td>
                            <td>x</td>
                            <td><?php echo $i ?></td>
                            <td>=</td>
                            <td><?php echo $multi_x * $i ?></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</center>
</html>