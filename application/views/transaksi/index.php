  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
      </ol>
      <!-- Example DataTables Card-->
      <a href="<?php echo base_url(); ?>index.php/transaksi/tambah" class="btn btn-primary mb-3 btn-sm">Tambah</a>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Transaksi</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id Transaksi</th>
                  <th>Id Tamu</th>
                  <th>Id Kamar</th>
                  <th>Tanggal Cekin</th>
                  <th>Tanggal Cekout</th>
                  <th>Lama Menginap</th>
                  <th>Total Biaya</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id Transaksi</th>
                  <th>Id Tamu</th>
                  <th>Id Kamar</th>
                  <th>Tanggal Cekin</th>
                  <th>Tanggal Cekout</th>
                  <th>Lama Menginap</th>
                  <th>Total Biaya</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($semua_transaksi as $transaksi) { ?>
                <tr>
                  <td><?php echo $transaksi['id_transaksi']; ?></td>
                  <td><?php echo $transaksi['id_tamu']; ?></td>
                  <td><?php echo $transaksi['id_kamar']; ?></td>
                  <td><?php echo $transaksi['tgl_cekin']; ?></td>
                  <td><?php echo $transaksi['tgl_cekout']; ?></td>
                  <td><?php echo $transaksi['lama_menginap']; ?></td>
                  <td><?php echo $transaksi['total_biaya']; ?></td>
                  <td>
                    <a class="btn btn-success btn-sm mb-3" href="<?php echo base_url(); ?>index.php/transaksi/perbarui/<?php echo $transaksi['id_transaksi']; ?>">Perbarui</a>
                    &nbsp;
                    <a class="btn btn-danger btn-sm mb-3" href="<?php echo base_url(); ?>index.php/transaksi/hapus/<?php echo $transaksi['id_transaksi']; ?>">Hapus</a>
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