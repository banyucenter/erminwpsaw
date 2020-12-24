
        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Alternatif</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
          <?php foreach($data as $u){ ?>

          <form action="<?php echo base_url(). 'wp/aksi_ubah'; ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $u->id ?>">
            <div class="form-group">
              <label for="inputAddress">Nama Karyawan</label>
              <input type="text" name="nama" class="form-control" id="inputAddress" value="<?php echo $u->nama ?>" placeholder="Nama lengkap" require>
            </div>
            <br/>
            <div class="form-group">
              <label for="inputAddress">Nilai Pengujian</label>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Pendidikan</label>
                <input type="number" name="C1" class="form-control" value="<?php echo $u->C1 ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Pengalaman Kerja</label>
                <input type="number" name="C2" class="form-control" value="<?php echo $u->C2 ?>" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Motivation Letter</label>
                <input type="number" name="C3" class="form-control" value="<?php echo $u->C3 ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Kemampuan Intrapersonal</label>
                <input type="number" name="C4" class="form-control" value="<?php echo $u->C4 ?>" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Orientasi Prestasi</label>
                <input type="number" name="C5" class="form-control" value="<?php echo $u->C5 ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Kemampuan Menjual</label>
                <input type="number" name="C6" class="form-control" value="<?php echo $u->C6 ?>" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Kepercayaan Diri</label>
                <input type="number" name="C7" class="form-control" value="<?php echo $u->C7 ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Dapat Dipercaya</label>
                <input type="number" name="C8" class="form-control" value="<?php echo $u->C8 ?>" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Etos Kerja</label>
                <input type="number" name="C9" class="form-control" value="<?php echo $u->C9 ?>" id="inputCity" require>
              </div>
              
              
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
          <?php } ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 