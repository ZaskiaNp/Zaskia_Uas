<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENGGAJIHAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <form action="" method="post">
      <img src="logo.png" alt="">
      <h3>PENGGAJIHAN</h3>
      <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
      <div class="card" style="width:50%;">
        <div class="card-header">
          <p style="text-align:left;">Data Penggajihan</p>
        </div>
        <div class="card-body">
          <p style="text-align:left;">No</p>
          <input type="text" class="form-control" placeholder="No" name="no" required>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Nama</p>
          <input type="text" class="form-control" placeholder="Nama" name="nama" required>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Unit Pendidikan</p>
          <select class="form-select" aria-label="Default select example" name="unit" required>
            <option selected disabled value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
          </select>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Tanggal Gaji</p>
          <input type="date" class="form-control" name="tgl" required>
        </div>

        <div class="card-body">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th style="text-align:center;"><i>Gaji</i></th>
                <th style="text-align:center;"><i>Potongan</i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Jabatan</p>
                    <select class="form-select" aria-label="Default select example" name="jabatan" required>
                      <option selected disabled value="">Pilih Jabatan</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                      <option value="Wakasek">Wakasek</option>
                      <option value="Guru">Guru</option>
                      <option value="OB">OB</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">BPJS</p>
                    <input type="text" class="form-control" name="bpjs" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Lama Kerja</p>
                    <input type="number" class="form-control" placeholder="Lama Kerja" name="lama" required>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Pinjaman</p>
                    <input type="text" class="form-control" placeholder="Pinjaman" name="pinjaman" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Status Kerja</p>
                    <select class="form-select" aria-label="Default select example" name="status" required>
                      <option selected disabled value="">Pilih Status Kerja</option>
                      <option value="Tetap">Tetap</option>
                      <option value="Kontrak">Kontrak</option>
                    </select>
                  </div>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Cicilan</p>
                    <input type="text" class="form-control" placeholder="Cicilan" name="tabungan" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Infaq</p>
                    <input type="text" class="form-control" placeholder="Infaq" name="lainnya" required>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>     
        </div>
      </div>
     
      <?php
    if (isset($_POST['simpan'])) {
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tanggal = $_POST['tgl'];
        $jabatan = $_POST['jabatan'];
        $lama = $_POST['lama'];
        $status = $_POST['status'];
        $bpjs = $_POST['bpjs'];
        $pinjaman = $_POST['pinjaman'];
        $tabungan = $_POST['tabungan'];
        $infaq = $_POST['lainnya'];

        
        if ($jabatan == 'Kepala Sekolah') {
            $gaji = 10000000;
        } elseif ($jabatan == 'Wakasek') {
            $gaji = 7500000;
        } elseif ($jabatan == 'Guru') {
            $gaji = 5000000;
        } elseif ($jabatan == 'OB') {
            $gaji = 2500000;
        } else {
            $gaji = 0;
        }

        
        if ($lama >= 5) {
            $tunjangan = 1000000;
        } else {
            $tunjangan = 0;
        }

       
        if ($status === 'Tetap') {
            $bonus = 500000;
        } else {
            $bonus = 0;
        }

        
        $gajiBersih = ($gaji + $bonus + $tunjangan) - ($bpjs + $pinjaman + $tabungan + $infaq);

        
        class gaji {
          public function gaji($no, $nama, $unit, $tanggal, $jabatan, $gaji, $status,$bonus, $lama, $bpjs, $pinjaman, $tabungan, $infaq, $gajiBersih) {
              ?>
              <br>
                <div class="card" style="width:50%;">
                <h5 class="card-header"><?php echo $nama; ?></h5>
              <div class="card-body">
                  <h4 class="text-primary">STRUK GAJI</h4>
                  <table>
                      <tr class="text-primary">
                          <td>No</td>
                          <td>:</td>
                          <td><?php echo $no; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Nama</td>
                          <td>:</td>
                          <td><?php echo $nama; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Unit Pendidikan</td>
                          <td>:</td>
                          <td><?php echo $unit; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Tanggal Gaji</td>
                          <td>:</td>
                          <td><?php echo $tanggal; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Jabatan</td>
                          <td>:</td>
                          <td><?php echo $jabatan; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Gaji</td>
                          <td>:</td>
                          <td><?php echo number_format($gaji, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Lama Kerja</td>
                          <td>:</td>
                          <td><?php echo $lama; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Status kerja</td>
                          <td>:</td>
                          <td><?php echo $status; ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Bonus</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($bonus, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>BPJS</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($bpjs, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Pinjaman</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($pinjaman, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Cicilan</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($tabungan, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Infaq</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($infaq, 0, ',', '.'); ?></td>
                      </tr>
                      <tr class="text-primary">
                          <td>Gaji Bersih</td>
                          <td>:</td>
                          <td><?php echo "Rp." . number_format($gajiBersih, 0, ',', '.'); ?></td>
                      </tr>
                  </table>
              </div>
          </div>
              <?php
          }
      }
   
      
      $cetak = new gaji();
      $cetak->gaji($no, $nama, $unit, $tanggal, $jabatan, $gaji, $status,$bonus, $lama, $bpjs, $pinjaman, $tabungan, $infaq, $gajiBersih);
    } 
?>


  
   
    </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
