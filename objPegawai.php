<?php 
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('01112','Rendy','Asisten Manager','Islam','Lajang');
$pegawai3 = new Pegawai('01113','Krisna','Kepala Bagian','Islam','Lajang');
$pegawai4 = new Pegawai('01114','Fajar','Staff','Islam','Menikah');
$pegawai5 = new Pegawai('01115','Bagong','OB','Islam','Menikah');


$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>