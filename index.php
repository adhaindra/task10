<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Penambahan</title>
</head>
<body>
    <h2>Kalkulator Penambahan</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Angka Pertama" required>
        <input type="number" name="num2" placeholder="Angka Kedua" required>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $result = $num1 + $num2;

        echo "<p>Hasil: $num1 + $num2 = $result</p>";
    }
    ?>
</body>
</html>
