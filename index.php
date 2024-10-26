<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman Berorientasi Objek</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 50%;
            }
    
            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 3px;
            }
    
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    
    </head>
    <body>
        <img src="zoro.png" width="20%" height="20%"/>
        <h3>Ajeng Putri Salma: 42423031</h3>
        <h1 align="center">Pemrograman Berorientasi Objek</h1>
        <h1 align="left">Pengertian</h1>
        <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya,

            Model data berorientasi objek dikatakan dapat memberi fleksibilitas yang lebih, kemudahan mengubah program, dan digunakan luas dalam teknik peranti lunak skala besar. Lebih jauh lagi, pendukung OOP mengklaim bahwa OOP lebih mudah dipelajari bagi pemula dibanding dengan pendekatan sebelumnya, dan pendekatan OOP lebih mudah dikembangkan dan dirawat.
            
     <h1 align="left">Bahasa Pemrograman yang mendukung PBO</h1>
        <p> Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:
            <ul>
                <li> Visual Foxpro</li> 
                <li>  Java </li>
                <li>C++</li>
                <li>Pascal (bahasa pemrograman)</li>
                <li>SIMULA</li>
                <li>Smalltalk</li>
                <li>Ruby</li>
                <li>Python</li>
                <li>PHP</li>
                <li>TypeScript</li>
                <li>C#</li>
                <li>Delphi</li>
                <li>Eiffel</li>
                <li>Perl</li>
                <li>Adobe Flash AS 3.</li>
            </ul>
        
        <h1>Membuat Tabel Kategori Produk</h1>

            <table>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI PRODUK</th>
                    <th>NAMA PRODUK</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Bumbu dapur</td>
                    <td>Garam</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bumbu dapur</td>
                    <td>Cabe</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bumbu dapur</td>
                    <td>Lengkuas</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bumbu dapur</td>
                    <td>Terasi</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sembako</td>
                    <td>Beras</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Sembako</td>
                    <td>Minyak goreng</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Sembako</td>
                    <td>Gula pasir</td>
                </tr>
            </table>
        
        <h1>Membuat Tabel Produk</h1>

            <table>
                <tr>
                    <th>NO</th>
                    <th>PRODUK</th>
                    <th>STOCK</th>
                    <th>HARGA</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Garam</td>
                    <td>10</td>
                    <td>7000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cabe</td>
                    <td>10</td>
                    <td>25000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lengkuas</td>
                    <td>10</td>
                    <td>12000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Terasi</td>
                    <td>10</td>
                    <td>35000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Beras</td>
                    <td>10</td>
                    <td>13000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Minyak goreng</td>
                    <td>10</td>
                    <td>15000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Gula pasir</td>
                    <td>10</td>
                    <td>13000</td>
                </tr>
            </table>
              
              <?php 
              class Buah {
                // Properties
                public $nama;
                public $warna;

                // Methods
                function set_name ($nama) {
                    $this->nama = $nama;
                }
                function get_name() {
                    return $this-> nama;
                }
              }

              $apel = new Buah();
              $pisang = new Buah();
              $apel->set_name('Apel');
              $pisang->set_name('Pisang');

              echo $apel->get_name();
              echo "<br>";
              echo $pisang->get_name();
              ?>
        <p></p>
        <?php
            class mobil {
                // Properties
                public $nama;
                public $warna;

                // Methods
                function set_name($nama) {
                    $this->nama = $nama;
                }

                function get_name() {
                    return $this->nama;
                }

                function set_warna($warna) {
                    $this->warna = $warna;
                }

                function get_warna() {
                    return $this->warna;
                }
            }

            // Membuat objek dari kelas Buah
            $toyota = new mobil();

            // Mengatur nama
            $toyota->set_name('toyota');
            $toyota->set_warna('Biru Metalik');

            // Menampilkan nama 
            echo "Nama : " . $toyota->get_name();
            echo "<br>";
            echo "Warna : " . $toyota->get_warna();
        ?>
        <p></p>
        
        <h2 style="color: blue;" align=""left"">Pertemuan-4 <h1>

        <h3 style="color: black;" align=""left""> Konstruktor dan Destruktor </h1>
        <h4 style="color: black:" align=""left""> Konstruktor</h1>

        <br>

        <?php
        class Bwah {
            //properties
            public $nama;
            public $warna;

            //methods
            function __construct($nama, $warna) {
                $this->nama = $nama;
                $this->warna = $warna;
            }
            function get_nama() {
                return $this->nama;
            }
            function get_warna(){
                return $this->warna;
            }
        }

        $apel = new Bwah("Apel", "Merah");
        echo $apel->get_nama();
        echo "<br>";
        echo $apel->get_warna();
        ?>

        <h4 style="color: black:" align=""left""> Destruktor</h1>

        <br> 
        <?php
        class buahhh {
            public $nama;
            public $warna;

            function __construct($nama) {
            $this->nama = $nama;
            $this->warna = $warna;
            
            }
            function __destruct() {
                echo "buah tersebut adalah {$this-> nama} dan warnanya adalah {$this->warna}.";
              }
            }
            
            $apel = new buahhh("apel", "merah");
            ?>
            <h2> TUGAS PERTEMUAN 4</H2>
<?php
$mahasiswi = [
  [
    'nama' => 'Ajeng',
    'tinggi_badan' => 163,
    'warna_kulit' => 'Kuning Langsat'
  ],
   [
   'nama' => 'Naia',
   'tinggi_badan' => 155,
   'warna_kulit' => 'Kuning Langsat' 
   ],
   [
    'nama' => 'Khalwa',
    'tinggi_badan' => 147,
    'warna_kulit' => 'Kuning Langsat'
   ]
];

foreach ($mahasiswi as $mhs) {
  echo "Mahasiswi tersebut bernama ". $mhs['nama']. ",Tinggi Badan ". $mhs['tinggi_badan']. "cm, dan Warna Kulit ". $mhs['warna_kulit']. "<br>";
}
?>

            

    </body>
</html>