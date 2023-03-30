<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            case 'OB':$gapok = 4000000; break;
            default: $gapok;
        }
        return $gapok;
    }
    public function getTunjab ($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000 *20/100; break;
            case 'Asisten Manager': $gapok = 10000000 *20/100; break;
            case 'Kepala Bagian': $gapok = 7000000 *20/100; break;
            case 'Staff': $gapok = 5000000 *20/100; break;
            case 'OB':$gapok = 4000000 *20/100; break;
            default: $gapok;
        }
        return $gapok;
    }

    private function setTunkel ($status,$jabatan){
        $this->status = $status;
        $this->jabatan = $jabatan;
        if($status == 'Menikah' && $jabatan == 'Manager')
        $setTunkel  = 15000000 *10/100;
        else if($status == 'Lajang' && $jabatan == 'Manager')
        $setTunkel  = 0;
        if($status == 'Menikah' && $jabatan == 'Asisten Manager')
        $setTunkel  = 10000000 *10/100;
        else if($status == 'Lajang' && $jabatan == 'Asisten Manager')
        $setTunkel  = 0;
        if($status == 'Menikah' && $jabatan == 'Kepala Bagian')
        $setTunkel  = 7000000 *10/100;
        else if($status == 'Lajang' && $jabatan == 'Kepala Bagian')
        $setTunkel  = 0;
        if($status == 'Menikah' && $jabatan == 'Staff')
        $setTunkel  = 5000000 *10/100;
        else if($status == 'Lajang' && $jabatan == 'Staff')
        $setTunkel  = 0;
        if($status == 'Menikah' && $jabatan == 'OB')
        $setTunkel  = 4000000 *10/100;
        else if($status == 'Lajang' && $jabatan == 'OB')
        $setTunkel  = 0;
        return $setTunkel ;
    }

    public function setgajikotor ($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gajikotor = 15000000 +(15000000 *20/100)+(15000000 *10/100);
            break;
            case 'Asisten Manager': $gajikotor = 10000000 +(10000000 *20/100)+(10000000 *10/100); 
            break;
            case 'Kepala Bagian': $gajikotor = 7000000 +(7000000*20/100)+(7000000*10/100); 
            break;
            case 'Staff': $gajikotor = 5000000 +(5000000*20/100)+(5000000*10/100); 
            break;
            case 'OB':$gajikotor = 4000000 +(4000000*20/100)+(4000000*10/100); 
            break;
            default: $gajikotor;
        }
        return $gajikotor;
    }

    public function getzakat ($jabatan,$agama){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gajikotor = 15000000 +(15000000 *20/100)+(15000000 *10/100);
            break;
            case 'Asisten Manager': $gajikotor = 10000000 +(10000000 *20/100)+(10000000 *10/100); 
            break;
            case 'Kepala Bagian': $gajikotor = 7000000 +(7000000*20/100)+(7000000*10/100); 
            break;
            case 'Staff': $gajikotor = 5000000 +(5000000*20/100)+(5000000*10/100); 
            break;
            case 'OB':$gajikotor = 4000000 +(4000000*20/100)+(4000000*10/100); 
            break;
            default: $gajikotor;
        }
        if($agama == 'Islam' && $jabatan == 'Manager' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Manager' && $gajikotor <= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Asisten Manager' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Asisten Manager' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'Kepala Bagian' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Kepala Bagian' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'Staff' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Staff' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'OB' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        else if($agama == 'Islam' && $jabatan == 'OB' && $gajikotor <= 6000000) 
        $zakat = 0;
        return $zakat;
    }
    public function getgajibersih ($jabatan,$agama){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gajikotor = 15000000 +(15000000 *20/100)+(15000000 *10/100);
            break;
            case 'Asisten Manager': $gajikotor = 10000000 +(10000000 *20/100)+(10000000 *10/100); 
            break;
            case 'Kepala Bagian': $gajikotor = 7000000 +(7000000*20/100)+(7000000*10/100); 
            break;
            case 'Staff': $gajikotor = 5000000 +(5000000*20/100)+(5000000*10/100); 
            break;
            case 'OB':$gajikotor = 4000000 +(4000000*20/100)+(4000000*10/100); 
            break;
            default: $gajikotor;
        }
        if($agama == 'Islam' && $jabatan == 'Manager' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Manager' && $gajikotor <= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Asisten Manager' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Asisten Manager' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'Kepala Bagian' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Kepala Bagian' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'Staff' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        if($agama == 'Islam' && $jabatan == 'Staff' && $gajikotor <= 6000000) 
        $zakat = 0;
        if($agama == 'Islam' && $jabatan == 'OB' && $gajikotor >= 6000000) 
        $zakat = $gajikotor * 2.5/100;
        else if($agama == 'Islam' && $jabatan == 'OB' && $gajikotor <= 6000000) 
        $zakat = 0;

        switch($jabatan){
            case 'Manager': $gajibersih = 15000000 +(15000000 *20/100)+(15000000 *10/100)-$zakat;
            break;
            case 'Asisten Manager': $gajibersih = 10000000 +(10000000 *20/100)+(10000000 *10/100)-$zakat; 
            break;
            case 'Kepala Bagian': $gajibersih = 7000000 +(7000000*20/100)+(7000000*10/100)-$zakat; 
            break;
            case 'Staff': $gajibersih = 5000000 +(5000000*20/100)+(5000000*10/100)-$zakat; 
            break;
            case 'OB':$gajibersih = 4000000 +(4000000*20/100)+(4000000*10/100)-$zakat; 
            break;
            default: $gajibersih;
        }
        return $gajibersih;
    }



    



    public function cetak(){
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '. $this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status;
        echo '<br>Gaji Pokok Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan Rp.'.number_format($this->getTunjab($this->jabatan),0,',','.');     
        echo '<br> Tunjangan Keluarga : '.number_format ($this->setTunkel($this->status,$this->jabatan),0,',','.');
        echo '<br>Gaji Kotor Rp.'.number_format($this->setgajikotor($this->jabatan),0,',','.');     
        echo '<br>Zakat Rp.'.number_format($this->getzakat($this->jabatan,$this->agama),0,',','.');     
        echo '<br>Gaji Bersih Rp.'.number_format($this->getgajibersih($this->jabatan,$this->agama),0,',','.');     
        echo '<hr>';

    }

}



?>