<?php
//array scalar

$m1 = ['NIM'=>'01111022', 'nama'=>'Ani', 'nilai'=>100];
$m2 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m3 = ['NIM'=>'01111024', 'nama'=>'Aji', 'nilai'=>40];
$m4 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m5 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m6 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m7 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bunu', 'nilai'=>28];
/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/
//array asossiative
$mahasiswa = [$m1,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Grade','Predikat'];
//fungsi-fungsi sederhana
$jumlah_data = count($mahasiswa);
$jml_mahasiswa = array_column($mahasiswa,'nilai');
$total_mahasiswa = array_sum($jml_mahasiswa);
$max_mahasiswa = max($jml_mahasiswa);
$min_mahasiswa = min($jml_mahasiswa);
$rata_rata    = $total_mahasiswa/$jumlah_data;
$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_data,
    'Nilai Tertinggi'=>$max_mahasiswa,
    'Nilai Terendah'=>$min_mahasiswa,
    'Nilai Rata-Rata '=>$rata_rata
]
?>
<table border="1" cellpadding="10px" width="100%">
    <thead>
        <tr>
            <?php 
            foreach ($ar_judul as $j){  
            ?>
            <th><?= $j ?></th>
<?php } ?>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 80) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = 'B';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'C';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade = 'E';
else $grade = '';
switch ($grade){
    case "A" : $predikat = "memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default: $predikat ="";
}
//grade 
    ?>
    <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $grade?></td>
        <td><?= $predikat?></td>
</tr>
<?php $no++; } ?>
</tbody>
<tfoot>
    <?php
    foreach($keterangan as $ket =>$hasil){
?>
<tr>
    <th colspan="5"><?= $ket ?></th>
    <th><?= $hasil ?></th>
    </tr>
<?php } ?>
</tfoot>
</table>