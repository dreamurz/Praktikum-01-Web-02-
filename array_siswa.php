<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
      $proses = $_GET['proses'];
      $nama_siswa = $_GET['nama'];
      $nim = $_GET['nim'];
      $mata_kuliah = $_GET['matkul'];
      $nilai_uts = $_GET['nilai_uts'];
      $nilai_uas = $_GET['nilai_uas'];
      $nilai_tugas = $_GET['nilai_tugas'];


    $ns1 = ['id'=> 1, 'matkul'=> 'Dasar-Dasar Pemrograman', 'nim'=> '01101', 'uts'=> 80, 'uas'=> 84, 'tugas'=> 78];
    $ns2 = ['id'=> 2, 'matkul'=> 'Basis Data I', 'nim'=> '01121', 'uts'=> 70, 'uas'=> 50, 'tugas'=> 68];
    $ns3 = ['id'=> 3, 'matkul'=> 'Pemrograman Web','nim'=> '01130', 'uts'=> 60, 'uas'=> 86, 'tugas'=> 70];
    $ns4 = ['id'=> 4, 'matkul'=> 'Basis Data I','nim'=> '01134', 'uts'=> 90, 'uas'=> 91, 'tugas'=> 82];
    $ns5 = ['id'=> 5, 'nim'=> $nim,'matkul'=> $mata_kuliah, 'uts'=> $nilai_uts, 'uas'=> $nilai_uas, 'tugas'=> $nilai_tugas];


    $ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
?>

    <div class="d-flex justify-content-center" style="margin: 100px;">
        <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 60rem; padding:50px;">
            <br>
            <h4 class="text-center">Daftar Nilai Mahasiswa</h4>
            <br>
            <table border="1" width="100%" style="text-align: center;" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Mata Kuliah</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Tugas</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $nomor = 1;
                        foreach($ar_nilai as $ns){
                            echo '<tr><td>'.$nomor.'</td>';
                            echo '<td>'.$ns['nim'].'</td>';
                            echo '<td>'.$ns['matkul'].'</td>';
                            echo '<td>'.$ns['uts'].'</td>';
                            echo '<td>'.$ns['uas'].'<t/d>';
                            echo '<td>'.$ns['tugas'].'</td>';

                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                            echo '</tr>';
                            $nomor++;
                        }
                    ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-success" href="form_nilai.php" role="button">Kembali</a>
        </div>
    </div>
    <footer class="main-footer mt-auto py-3 bg-dark text-white fixed-bottom">
          <div class="container-fluid">
              <div class="pull-right hidden-xs">
                  Made with <i class="text-red fa fa-heart" title="love"></i>  & <i class="fa fa-coffee" title="coffee"></i>  by <a href="#" class="text-light">DREAMURZ</a>
              </div>
              <strong>Copyright &copy; 2021 <a href="#" class="text-light">Praktikum 01</a>.</strong> All rights reserved.
          </div>
    </footer>