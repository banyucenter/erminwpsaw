


   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Bobot SAW</h1>
          </div>
          
          <!-- Content Row -->
          <div class="row">

          <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Simbol</th>
                <th scope="col">Pangkat</th>
                
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
                <td><?php echo $u->pangkat_saw ?></td>
               
                </tr>
                 <?php } ?>
                
            </tbody>
            
            </table>

            <table class="table table-striped">
              <tbody>
                <tr>
                  <td><h3>Total Pangkat</h3></td>
                  <?php
                  foreach($total_pangkat as $u){ 
                    ?>
                  <td><h3><?php echo $u->total_pangkat_wp ?></h3></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 