<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>masukkan nilai awal</h2><input type="text" name="a">
        <hr>
        <h2>masukkan banyak data</h2><input type="number" name="n" min="1" max="6">
        <hr>
        <h2>masukkan beda</h2> <input type="text" name="b">
        <hr>
        <button name="submit" type="submit">Submit</button>
    </form>
    
    <?php
        error_reporting(0);
        $n = $_POST["n"];
        $a = $_POST["a"];
        $b = $_POST["b"];

        for($i = 1; $i <= $n; $i++){
            $Un = $a + ($i - 1) * $b;
            $bulan = $i + 6;

            echo "Penjualan pada bulan ke $bulan adalah " , ($Un);
            echo "<br>";
        }
    ?>
</body>
</html>