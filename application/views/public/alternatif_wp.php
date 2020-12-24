


   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alternatif WP</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
          <div>
          <a class="btn btn-primary" href="<?php echo base_url().'wp/tambah_alternatif';?>">Tambah Data</a>
          <a class="btn btn-secondary" href="<?php echo base_url().'wp/hitung_vector_v';?>">Hitung Vector V</a>

          </div>
          <br/> <br/>
          <br/>
          <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Pengalaman Kerja</th>
                <th scope="col">Motivation Letter</th>
                <th scope="col">Kemampuan Interpersonal</th>
                <th scope="col">Orientasi Prestasi</th>
                <th scope="col">Kemampuan Menjual</th>
                <th scope="col">Kepercayaan Diri</th>
                <th scope="col">Dapat Dipercaya</th>
                <th scope="col">Etos Kerja</th>
                <th scope="col">Aksi</th>
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
                <td><?php echo $u->C1 ?></td>
                <td><?php echo $u->C2 ?></td>
                <td><?php echo $u->C3 ?></td>
                <td><?php echo $u->C4 ?></td>
                <td><?php echo $u->C5 ?></td>
                <td><?php echo $u->C6 ?></td>
                <td><?php echo $u->C7 ?></td>
                <td><?php echo $u->C8 ?></td>
                <td><?php echo $u->C9 ?></td>
                <td>
                  <a class="btn btn-success" href='<?php echo base_url('/wp/edit/').$u->id;?>'> Edit</a>
                  <a class="btn btn-danger" href='<?php echo base_url('/wp/hapus/').$u->id;?>' onclick="return confirm('Are you sure you want to delete this item?');"> Hapus</a> 
                </td> 
                </tr>
                 <?php } ?>
                
            </tbody>
            </table>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      

 