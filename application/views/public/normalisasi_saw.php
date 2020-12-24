
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Normalisasi SAW</h1>
          </div>
          <a class="btn btn-primary" href="<?php echo base_url().'saw/hitung_nilai_v';?>">Hitung Nilai V </a>
          <br/><br/>
          <!-- Content Row -->
          <div class="row">

          <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">C1</th>
                <th scope="col">C2</th>
                <th scope="col">C3</th>
                <th scope="col">C4</th>
                <th scope="col">C5</th>
                <th scope="col">C6</th>
                <th scope="col">C7</th>
                <th scope="col">C8</th>
                <th scope="col">C9</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $no = 1;
                foreach($data as $u){ 
                ?>
                <tr>
                <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->normal_C1 ?></td>
                  <td><?php echo $u->normal_C2 ?></td>
                  <td><?php echo $u->normal_C3 ?></td>
                  <td><?php echo $u->normal_C4 ?></td>
                  <td><?php echo $u->normal_C5 ?></td>
                  <td><?php echo $u->normal_C6 ?></td>
                  <td><?php echo $u->normal_C7 ?></td>
                  <td><?php echo $u->normal_C8 ?></td>
                  <td><?php echo $u->normal_C9 ?></td>
                  
                </tr>
                 <?php } ?>
                
            </tbody>
            </table>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      






