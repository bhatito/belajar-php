<?php

$ar_buah = ['pepaya','mangga','pisang','jambu'];

foreach($ar_buah as $id =>$buah){
    echo '<br> Tampilkan Ray'.$id;
}
echo'<hr> ';
foreach($ar_buah as $buah){
    echo '<br> Buah'.$buah;
}
?>