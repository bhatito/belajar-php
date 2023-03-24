<html>
<body>
<form method= "post" >
Jabatan: <select name="golongan">
<option value="1">Manager </option>
<option value="2">Asisten </option>
<option value="3">Kabag </option>
<option value="4">Staff </option>
</select>
<br>
<br>
<label> Status </label>
<input type="text" name="status" placeholder="Masukan status">
<br>
<br>
<label> Agama </label>
<input type="text" name="agama" placeholder="islam/kristen"><br>
<br>
<br>
<input type="submit" name="hitung" value="HITUNG">
</form>
<?php
$gol = $_POST["golongan"];
$status = $_POST["status"];
$agama = $_POST["agama"];
//Filter Gaji Pokok menggunakan switch case
//  Jika Manager = 20jt, Asisten = 15jt, Kabag = 10jt, Staff = 4jt
switch ($gol)
{
case 1: $gapok = 20000000; 
$tunjangan = 20000000 *0.2;break;
case 2: $gapok = 15000000;
$tunjangan = 15000000 *0.2; break;
case 3: $gapok = 10000000; 
$tunjangan = 10000000 *0.2;break;
case 4: $gapok = 4000000; 
$tunjangan = 4000000 *0.2;break;
    default;
}
//Filter Tunjangan keluarga menggunakan if
        if ($gol == 1 && $status =='lajang')
            $tunjangan_keluarga = '0';
        elseif ($gol == 1 && $status =='menikah dan mempunyai anak 2')
            $tunjangan_keluarga = $gapok *5/100;
            elseif ($gol == 1 && $status =='menikah dan anak antara 3-5')
            $tunjangan_keluarga = $gapok *10/100;
        elseif($gol == 2 && $status =='lajang')
            $tunjangan_keluarga = '0';
            elseif ($gol == 2 && $status =='menikah dan mempunyai anak 2')
            $tunjangan_keluarga = $gapok *5/100;
            elseif ($gol == 2 && $status =='menikah dan mempunyai anak 3-5')
            $tunjangan_keluarga = $gapok *10/100;
        elseif($gol == 3 && $status =='lajang')
            $tunjangan_keluarga = '0';
            elseif ($gol == 3 && $status =='menikah dan mempunyai anak 2')
            $tunjangan_keluarga = $gapok *5/100;
            elseif ($gol == 3 && $status =='menikah dan mempunyai anak 3-5')
            $tunjangan_keluarga = $gapok *10/100;
        elseif($gol == 4 && $status =='lajang')
            $tunjangan_keluarga = '0';
            elseif ($gol == 4 && $status =='menikah dan mempunyai anak 2')
            $tunjangan_keluarga = $gapok *5/100;
            elseif ($gol == 4 && $status =='menikah dan mempunyai anak 3-5')
            $tunjangan_keluarga = $gapok *10/100;

//ngitung gaji 
switch ($gol)
{
case 1: $hitung=$gapok + $tunjangan + $tunjangan_keluarga; break;
case 2: $hitung=$gapok + $tunjangan + $tunjangan_keluarga; break;
case 3: $hitung=$gapok + $tunjangan + $tunjangan_keluarga; break;
case 4: $hitung=$gapok + $tunjangan + $tunjangan_keluarga; break;
    default;
}

if($agama == 'islam' && $gol == 1 && $hitung >= 6000000) 
$zakat = $hitung * 0.25/10;
elseif($agama == 'islam' && $gol == 1 && $hitung < 6000000) 
$zakat = 0;
elseif($agama == 'kristen' && $gol == 1 ) 
$zakat = 0;
if($agama == 'islam' && $gol == 2 && $hitung >= 6000000) 
$zakat = $hitung * 0.25/10;
elseif($agama == 'islam' && $gol == 2 && $hitung < 6000000) 
$zakat = 0;
elseif($agama == 'kristen' && $gol == 2 ) 
$zakat = 0;
if($agama == 'islam' && $gol == 3 && $hitung >= 6000000) 
$zakat = $hitung * 0.25/10;
elseif($agama == 'islam' && $gol == 3 && $hitung < 6000000) 
$zakat = 0;
elseif($agama == 'kristen' && $gol == 3 ) 
$zakat = 0;
if($agama == 'islam' && $gol == 4 && $hitung >= 6000000) 
$zakat = $hitung * 0.25/10;
elseif($agama == 'islam' && $gol == 4 && $hitung < 6000000) 
$zakat = 0;
elseif($agama == 'kristen' && $gol == 4 ) 
$zakat = 0;

switch ($gol)
{
case 1: $hasil=$hitung- $zakat; break;
case 2: $hasil=$hitung- $zakat; break;
case 3: $hasil=$hitung- $zakat; break;
case 4: $hasil=$hitung- $zakat; break;
    default;
}

echo "Gaji Pokok : $gapok <br>
Tunjangan : $tunjangan <br>
Status : $status <br>
Tunjangan Keluarga : $tunjangan_keluarga <br>
Gaji Kotor : $hitung <br>
Agama : $agama <br>
Zakat : $zakat <br>
Home Pay : $hasil <br>
";
//yang bikin saya bingung, variable potongan tapi rumusnya malah nambahun gaji
?>

</body>
</html>