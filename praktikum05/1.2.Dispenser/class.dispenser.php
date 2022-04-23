<?php
class Dispenser
{
    protected static $volume = 3800;
    protected $harga_segelas = 2500;
    private $volume_gelas = 250;
    public $nama_muniman;
    protected static $penghasilan = 0;


    public function __construct($nm_minuman)
    {
        $this->nama_muniman = $nm_minuman;
    }

    public function getVolume()
    {
        return self::$volume;
    }

    public function getVolumeGelas()
    {
        return $this->volume_gelas;
    }

    public function getIsi()
    {
        return number_format(self::$volume);
    }

    public function getPenghasilan()
    {
        return number_format(self::$penghasilan, 0, ',', '.');
    }

    public static function tambahVolume($isi)
    {
        if (self::$volume == 3800) {
            return "Galon sudah penuh, tidak usah di isi lagi";
        } elseif (self::$volume + $isi > 3800) {
            return "Galon sudah terisi " .  number_format(self::$volume) . "ml jika ditambah " . number_format($isi) . "ml akan berlebihan, kami menyarankan tambah " . 3800 - self::$volume . "ml saja";
        } elseif (self::$volume < 3800) {
            return "<b>Volume Galon saat ini " . number_format(self::$volume) . "ml</b> + {$isi}ml " . ", jadi total <b>Volume Galon Sekarang adalah " . number_format(self::$volume += $isi) . "ml</b>";
        }
    }
}

class Pembeli extends Dispenser
{
    protected $nama_pembeli;
    protected $banyak_gelas;

    public function __construct($nm_pembeli, $bnyk_gelas, $nm_minuman)
    {
        $this->nama_pembeli = $nm_pembeli;
        $this->banyak_gelas = $bnyk_gelas;
        parent::__construct($nm_minuman);

        self::$volume -= ((int)$this->getVolumeGelas() * (int)$this->banyak_gelas);
        self::$penghasilan += ((int)$this->harga_segelas * (int)$this->banyak_gelas);
    }

    public function getStrukPenjualan()
    {
        $struk = 'Nama Pembeli : ' . $this->nama_pembeli . ' <br> 
                Nama Minuman : ' . $this->nama_muniman . ' <br> 
                Jumlah Gelas : ' . $this->banyak_gelas . ' gelas<br> 
                Sisa Isi Wadah Minuman: ' . $this->getIsi() . 'ml <br>
                <b>Penghasilan Bertambah Rp. ' . number_format($this->harga_segelas * $this->banyak_gelas, 0, ',', '.') . '<br>
                Total Penghasilan Saat Ini: Rp. ' . $this->getPenghasilan() . '</b>';
        return $struk;
    }
}
