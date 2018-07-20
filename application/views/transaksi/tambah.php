  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Tambah Transaksi</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Transaksi</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('transaksi/proses_tambah'); ?>
          <div class="form-group">
            <label>Id Transaksi</label>
            <input type="text" name="input_idtransaksi" class="form-control">
          </div>
           <div class="form-group">
            <label>Id Tamu</label>
            <input type="text" name="input_idtamu" class="form-control">
          </div>
          <div class="form-group">
            <label>Id Kamar</label>
            <input type="text" name="input_idkamar" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal Cekin</label>
            <input type="text" name="input_tglcekin" class="form-control">
          </div>
           <div class="form-group">
            <label>Tanggal Cekout</label>
            <input type="text" name="input_tglcekout" class="form-control">
          </div>
           <div class="form-group">
            <label>Lama Menginap</label>
            <input type="text" name="input_lamamenginap" class="form-control">
          </div>
           <div class="form-group">
            <label>Total Biaya</label>
            <input type="text" name="input_totalbiaya" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
          </form>
        </div>
      </div>
    </div>
