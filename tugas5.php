<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30,"Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya", "lainnya"];
?>
<fieldset style="background-color:aquamarine;">
    <legend>Form Registrasi Kelompok Belajar</legend>
    <table>
        <thead>
            <tr>
            <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
            <tr>
                <td>NIM : </td>
                <td> 
                    <input type="text" name="nim" >
                </td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> 
                    <input type="text" name="nama" >
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td> 
                    <input type="radio" name="jk" value="Laki-laki" >Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="Laki-laki" >Perempuan 
                </td>
            </tr>
            <tr>
                <td>Program Studi: </td>
                <td> 
                    <select name="domisili">
                        <?php 

                        foreach($domisili as $d){
                            ?>
                            <option value="<?= $d ?>"><?= $d ?></option>
                       <?php } ?>
                        </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming : </td>
                <td> 
                    <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>" ><?= $skill ?>

                    <?php } ?>
                </td>
            </tr>
            <tr>
      
                <td>Email : </td>
                <td> 
                    <input type="text" name="email" >
                </td>
            </tr>
                <tfoot>
                <tr>
                    <th colspan="2">
                        <button name="proses">Submit</button>
                    </th>
                </tr>
            </tfoot>
            </form>

           




        </tbody>
    </table>
</fielset>
<?php 

if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $domisili = $_POST['domisili'];
    $skill = $_POST['skill'];
    $proses = $_POST['proses'];
    echo "Nim: $nim <br>" ;
    echo "Nama: $nama <br>" ;
    echo "Jenis Kelamin: $jk <br>" ;
    echo "Program Studi: $domisili <br>" ;
    echo "Skill :";
    foreach($_POST['skill'] as $item){  
    echo $item .",";
    } 
    $hasil = hitung($skill,$proses);
    $email = $_POST['email'];
    echo "Email: $email <br>" ;

}

?>
<?php  
function hitung($skill,$proses){
    if(isset($_POST['skill'])){
        $skill=$_POST["skill"];
        $c= count($skill);
        $Skor = 0.0;
        for($i=0;$i<$c;$i++){
            if($skill[$i]=='HTML'){
                $Skor=$Skor+10;
               
            }
            if($skill[$i]=='CSS'){
                $Skor=$Skor+10;
               
            }
            if($skill[$i]=='Javascript'){
                $Skor=$Skor+20;
               
            }
            if($skill[$i]=='RWD Bootstrap'){
                $Skor=$Skor+20;
               
            }
            if($skill[$i]=='PHP'){
                $Skor=$Skor+30;
               
            }
            if($skill[$i]=='MySQL'){
                $Skor=$Skor+30;
               
            }
            if($skill[$i]=='Laravel'){
                $Skor=$Skor+40;
               
            }
        }
        echo "<br>Skor Skill: ".$Skor."";
        if ($Skor <=0){$grade = "TIDAK MEMADAHI";
            }elseif ($Skor <=40){$grade = "KURANG";
            }elseif ($Skor <=60){$grade = "CUKUP";
            }elseif ($Skor <=100){$grade = "BAIK";
            }elseif ($Skor >=100){$grade = "SANGAT BAIK";
            }else{$grade = "INPUT SKILL";
            }echo "<br>Kategori Skill :".$grade."<br>";
    }
}
?>

    
</body>
</html>