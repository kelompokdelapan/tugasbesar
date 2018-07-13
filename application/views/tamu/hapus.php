  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Hapus Tamu</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-trash"></i> Hapus Tamu</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('tamu/proses_hapus'); ?>
          <input type="hidden" name="input_idTamu" value="<?php echo $tamu[0]['id_tamu']; ?>">
          <div class="form-group">
            <label>Nama Tamu</label>
            <input type="text" name="input_namaTamu" class="form-control" value="<?php echo $tamu[0]['nama_tamu']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="input_jenisKelamin" class="form-control" value="<?php echo $tamu[0]['jenis_kelamin']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Warga Negara</label>
            <input type="text" name="input_warganegara" class="form-control" value="<?php echo $tamu[0]['warganegara']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="input_alamat" class="form-control" value="<?php echo $tamu[0]['alamat']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="input_telepon" class="form-control" value="<?php echo $tamu[0]['telepon']; ?>" readonly="readonly">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>