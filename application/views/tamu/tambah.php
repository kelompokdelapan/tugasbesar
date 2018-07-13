  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Tambah Tamu</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Tamu</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('tamu/proses_tambah'); ?>
            <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Tambah Tamu</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Tamu</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('tamu/proses_tambah'); ?>
         <div class="form-group">
            <label>Nama Tamu</label>
            <input type="text" name="input_namaTamu" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="input_jenisKelamin" class="form-control">
          </div>
          <div class="form-group">
            <label>Warga Negara</label>
            <input type="text" name="input_warganegara" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="input_alamat" class="form-control">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="input_telepon" class="form-control">
          </div>
         <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>