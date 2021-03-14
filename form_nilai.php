<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="d-flex justify-content-center" style="margin: 100px;">
    <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 30rem; padding:30px;">
        <form method="GET" action="array_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option selected="true" disabled="disabled">-- Pilih --</option>
                        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                        <option value="Basis Data I">Basis Data I</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="col-md-12 text-centercol-md-12 text-center">
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
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

