<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1</title>
</head>
<body>
    <h1>Rumus Luas Dan Keliling Jajar Genjang </h1>

    <form method="POST">
        <table>
        <tr>
            <td>A</td>
            <td>
                <input type="text" name="sisi1" require>
            </td>
        </tr>
        <tr>
            <td>B</td>
            <td>
                <input type="text" name="sisi2" require>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Hitung">
        </td>
        </tr>
</table>
</form>
<?php 
    if(isset($_POST['submit'])){
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];

        $luasjajargenjang = $sisi1 * $sisi2;
        echo 'Hasil perhitungan Luas jajargenjang';
        echo '<br> Diketahui :';
        echo '<br> A : '.$sisi1;
        echo '<br> B : '.$sisi2;

        echo '<br> Maka Luasnya ' .$luasjajargenjang;

        echo '<hr>';
        $kelilingjajargenjang = 2*($sisi1+$sisi2);
        echo 'Hasil perhitungan keliling jajargenjang';
        echo '<br> Diketahui :';
        echo '<br> A : '.$sisi1;
        echo '<br> B : '.$sisi2;

        echo '<br> Maka kelilingnya ' .$kelilingjajargenjang;

    }
?>
</body>
</html>