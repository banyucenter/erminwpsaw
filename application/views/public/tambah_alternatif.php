
        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Alternatif</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

          <form action="<?php echo base_url(). 'wp/aksi_tambah'; ?>" method="post">
            
            <div class="form-group">
              <label for="inputAddress">Nama Karyawan</label>
              <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Nama lengkap" require>
            </div>
            <br/>
            <div class="form-group">
              <label for="inputAddress">Nilai Pengujian</label>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Pendidikan</label>
                <input type="number" name="C1" class="form-control" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Pengalaman Kerja</label>
                <input type="number" name="C2" class="form-control" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Motivation Letter</label>
                <input type="number" name="C3" class="form-control" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Kemampuan Intrapersonal</label>
                <input type="number" name="C4" class="form-control" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Orientasi Prestasi</label>
                <input type="number" name="C5" class="form-control" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Kemampuan Menjual</label>
                <input type="number" name="C6" class="form-control" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Kepercayaan Diri</label>
                <input type="number" name="C7" class="form-control" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Dapat Dipercaya</label>
                <input type="number" name="C8" class="form-control" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Etos Kerja</label>
                <input type="number" name="C9" class="form-control" id="inputCity" require>
              </div>
              
              
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 