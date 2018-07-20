  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Kamar</li>
      </ol>
      <!-- Example DataTables Card-->
      <a href="<?php echo base_url(); ?>index.php/kamar/tambah" class="btn btn-primary mb-3 btn-sm">Tambah</a>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Kamar</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kamar</th>
                  <th>Jenis</th>
                  <th>Harga Sewa</th>
                  <th>Fasilitas</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kamar</th>
                  <th>Jenis</th>
                  <th>Harga Sewa</th>
                  <th>Fasilitas</th>
                  <th>Gambar</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($semua_kamar as $kamar) { ?>
                <tr>
                  <td><?php echo $kamar['nama_kamar']; ?></td>
                  <td><?php echo $kamar['jenis_kamar']; ?></td>
                  <td><?php echo $kamar['harga_sewa']; ?></td>
                  <td><?php echo $kamar['fasilitas']; ?></td>
                  <td><img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/<?php echo $kamar['gambar_kamar']; ?>" width="100"></td>
                  <td>
                    <a class="btn btn-success btn-sm mb-3" href="<?php echo base_url(); ?>index.php/kamar/perbarui/<?php echo $kamar['id_kamar']; ?>">Perbarui</a>
                    &nbsp;
                    <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url(); ?>index.php/kamar/hapus/<?php echo $kamar['id_kamar']; ?>">Hapus</a>
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