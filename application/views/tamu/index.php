  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Tamu</li>
      </ol>
      <!-- Example DataTables Card-->
      <a href="<?php echo base_url(); ?>index.php/tamu/tambah" class="btn btn-primary mb-3 btn-sm">Tambah</a>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tamu</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Tamu</th>
                  <th>Jenis Kelamin</th>
                  <th>Warga Negara</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nama Tamu</th>
                  <th>Jenis Kelamin</th>
                  <th>Warga Negara</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($semua_tamu as $tamu) { ?>
                <tr>
                  <td><?php echo $tamu['nama_tamu']; ?></td>
                  <td><?php echo $tamu['jenis_kelamin']; ?></td>
                  <td><?php echo $tamu['warganegara']; ?></td>
                  <td><?php echo $tamu['alamat']; ?></td>
                  <td><?php echo $tamu['telepon']; ?></td> <td>
                    <a class="btn btn-success btn-sm mb-3" href="<?php echo base_url(); ?>index.php/tamu/perbarui/<?php echo $tamu['id_tamu']; ?>">Perbarui</a>
                    &nbsp;
                    <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url(); ?>index.php/tamu/hapus/<?php echo $tamu['id_tamu']; ?>">Hapus</a></td>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>