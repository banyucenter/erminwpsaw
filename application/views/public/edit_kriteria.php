
        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Kriteria</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
          <?php foreach($data as $u){ ?>

          <form action="<?php echo base_url(). 'wp/aksi_ubah_kriteria'; ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $u->id ?>">
            <div class="form-group">
              <label for="inputAddress">Kode Kriteria</label>
              <input type="text" name="kode_kriteria" class="form-control" id="inputAddress" value="<?php echo $u->kode_kriteria ?>" placeholder="Kode Kriteria" require>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Kriteria</label>
                <input type="text" name="kriteria" class="form-control" value="<?php echo $u->kriteria ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Tipe</label>
                <input type="text" name="tipe" class="form-control" value="<?php echo $u->tipe ?>" id="inputZip" require>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Bobot</label>
                <input type="number" name="bobot" class="form-control" value="<?php echo $u->bobot ?>" id="inputCity" require>
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputZip">Value</label>
                <input type="number" name="value" class="form-control" value="<?php echo $u->value ?>" id="inputZip" require>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
          <?php } ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 