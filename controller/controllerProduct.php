<?php
# OOP for product
// Class Kendaraan
class Kendaraan
{
    public $nama;
    public $harga;
    public $tahun;
    public $kota;

    public function __construct($dataKendaraan)
    {
        $this->nama = $dataKendaraan['nama'];
        $this->harga = $dataKendaraan['harga'];
        $this->tahun = $dataKendaraan['tahun'];
        $this->kota = $dataKendaraan['kota'];
    }
}

// //Inheritance class Mobil 
class Mobil extends Kendaraan
{
    public $img;

    public function __construct($dataKendaraan, $img)
    {
        parent::__construct($dataKendaraan);
        $this->img = $img;
    }
}

$dataMobil = [
    [
        "nama" => "Honda Civic",
        "harga" => "533.000.000",
        "tahun" => "2021 - 2022",
        "kota" => "Kota Bandung"
    ],
    [
        "nama" => "BMW X1",
        "harga" => "830.000.000",
        "tahun" => "2021 - 2022",
        "kota" => "Kota Bogor"
    ],
    [
        "nama" => "Mitsubishi Xpander",
        "harga" => "250.000.000",
        "tahun" => "2022",
        "kota" => "Kota Bandung"
    ],
    [
        "nama" => "Toyota Innova",
        "harga" => "370.000.000",
        "tahun" => "2022",
        "kota" => "Kota Cimahi"
    ]
];

$imgMobil = [
    "honda-civic.jpg",
    "BMWx11.png",
    "mitsubishi-xpander.jpg",
    "toyota-innova.jpg"
];

$dataMotor = [
    [
        "nama" => "NMAX",
        "harga" => "30.000.00",
        "tahun" => "2022",
        "kota" => "Kota Bogor"
    ],
    [
        "nama" => "PCX",
        "harga" => "32.000.000",
        "tahun" => "2021 - 2022",
        "kota" => "Kabupaten Bandung"
    ],
    [
        "nama" => "Aerox",
        "harga" => "23.200.000",
        "tahun" => "2020",
        "kota" => "Kota Bandung"
    ],
    [
        "nama" => "Vario",
        "harga" => "24.500.000",
        "tahun" => "2021",
        "kota" => "Kota Cimahi"
    ]
];

$imgMotor = [
    "nmax.jpg",
    "pcx.jpg",
    "aerox.jpeg",
    "vario.jpg"
];

foreach ($dataMobil as $key => $value) {
    ${"mobil" . $key} = new Mobil($value, $imgMobil[$key]);
}

foreach ($dataMotor as $key => $value) {
    ${"motor" . $key} = new Mobil($value, $imgMotor[$key]);
}

$resultMobil = [];
for ($i = 0; $i < 4; $i++) {
    $resultMobil[] = (${'mobil' . $i});
}

$resultMotor = [];
for ($i = 0; $i < 4; $i++) {
    $resultMotor[] = (${'motor' . $i});
}
