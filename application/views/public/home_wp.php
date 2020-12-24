


   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kriteria</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

          <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Simbol</th>
                <th scope="col">Bobot</th>
                <th scope="col">Tipe</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                foreach($data as $u){ 
                ?>
                <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $u->kode_kriteria ?></td>
                <td><?php echo $u->bobot ?></td>
                <td><?php echo $u->tipe ?></td>
                <td>
                <a class="btn btn-success" href='<?php echo base_url('/wp/edit_kriteria/').$u->id;?>'> Edit</a>
                </td>
                </tr>
                 <?php } ?>
                
            </tbody>
            
            </table>

            <table class="table table-striped">
              <tbody>
                <tr>
                  <td><h3>Total Bobot</h3></td>
                  <?php
                  foreach($total_bobot as $u){ 
                    ?>
                  <td><h3><?php echo $u->total_bobot_wp ?></h3></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 