  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Hapus Transaksi</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-trash"></i> Hapus Transaksi</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('transaksi/proses_hapus'); ?>
          <input type="hidden" name="input_idTransaksi" value="<?php echo $transaksi[0]['id_transaksi']; ?>">
          <div class="form-group">
            <label>Id Tamu</label>
            <input type="text" name="input_idTamu" class="form-control" value="<?php echo $transaksi[0]['id_tamu']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Id Kamar</label>
            <input type="text" name="input_idKamar" class="form-control" value="<?php echo $transaksi[0]['id_kamar']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Tanggal Cekin</label>
            <input type="text" name="input_tglcekin" class="form-control" value="<?php echo $transaksi[0]['tgl_cekin']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Tanggal Cekout</label>
            <input type="text" name="input_tglcekout" class="form-control" value="<?php echo $transaksi[0]['tgl_cekout']; ?>" >
          </div>
          <div class="form-group">
            <label>Lama Menginap</label>
            <input type="text" name="input_lamamenginap" class="form-control" value="<?php echo $transaksi[0]['lama_menginap']; ?>" readonly="readonly">
          </div>
           <div class="form-group">
            <label>Total Biaya</label>
            <input type="text" name="input_totalbiaya" class="form-control" value="<?php echo $transaksi[0]['total_biaya']; ?>" readonly="readonly">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>