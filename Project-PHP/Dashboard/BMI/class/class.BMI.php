<?php
trait BMI
{
    protected $berat_badan;
    protected $tinggi_badan;

    public function getBerat()
    {
        return $this->berat_badan;
    }

    public function getTinggi()
    {
        return $this->tinggi_badan;
    }

    // Rumus dan Interpretasi BMI
    public function getNilaiBMI()
    {
        if ($this->berat_badan > 0 && $this->tinggi_badan > 0) {
            $this->nilaiBMI = (int)$this->berat_badan / (((int)$this->tinggi_badan / 100) ** 2);
            return round($this->nilaiBMI, 1);
        }
    }

    public function getStatusBMI()
    {
        if ($this->nilaiBMI <= 0) {
            return '';
        } elseif ($this->nilaiBMI < 18.5) {
            return '<b>Kekurangan Berat Badan</b>';
        } elseif ($this->nilaiBMI >= 18.5 && $this->nilaiBMI <= 24.9) {
            return '<b>Normal (Ideal)</b>';
        } elseif ($this->nilaiBMI >= 25.0 && $this->nilaiBMI <= 29.9) {
            return '<b>Kelebihan Berat Badan</b>';
        } elseif ($this->nilaiBMI > 30.0) {
            return '<b>Kegemukan (Obesitas)</b>';
        }
    }

    // cetak gambar
    public function TampilGambarCowo()
    {
        if ($this->nilaiBMI <= 0) {
            return '';
        } elseif ($this->nilaiBMI < 18.5) {
            $images = glob("./gambar/cowo/1.kekurangan.berat.badan/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        } elseif ($this->nilaiBMI >= 18.5 && $this->nilaiBMI <= 24.9) {
            $images = glob("./gambar/cowo/2.normal/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }elseif ($this->nilaiBMI >= 25.0 && $this->nilaiBMI <= 29.9) {
            $images = glob("./gambar/cowo/3.kelebihan.berat.badan/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }elseif ($this->nilaiBMI >= 30.0) {
            $images = glob("./gambar/cowo/4.obesitas/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }
    }

    public function TampilGambarCewe()
    {
        if ($this->nilaiBMI <= 0) {
            return '';
        } elseif ($this->nilaiBMI < 18.5) {
            $images = glob("./gambar/cewe/1.kekurangan.berat.badan/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        } elseif ($this->nilaiBMI >= 18.5 && $this->nilaiBMI <= 24.9) {
            $images = glob("./gambar/cewe/2.normal/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }elseif ($this->nilaiBMI >= 25.0 && $this->nilaiBMI <= 29.9) {
            $images = glob("./gambar/cewe/3.kelebihan.berat.badan/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }elseif ($this->nilaiBMI >= 30.0) {
            $images = glob("./gambar/cewe/4.obesitas/*.*");
            for ($i = 0; $i < count($images); $i++) {
                $single_image = $images[$i];
                echo '<img src="' . $single_image . '" class="mx-auto d-block" width="70%">';
            }
        }
    }
}
