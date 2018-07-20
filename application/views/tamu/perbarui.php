  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Perbarui Tamu</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> Perbarui Tamu</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('tamu/proses_perbarui/'.$this->uri->segment(3)); ?>
          <input type="hidden" name="input_idTamu" value="<?php echo $tamu[0]['id_tamu']; ?>" readonly="readonly">
          <div class="form-group">
            <label>Nama Tamu</label>
            <input type="text" name="input_namaTamu" class="form-control" value="<?php echo $tamu[0]['nama_tamu']; ?>" >
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="input_jenisKelamin" class="form-control" value="<?php echo $tamu[0]['jenis_kelamin']; ?>" >
          </div>
          <div class="form-group">
            <label>Warga Negara</label>
            <input type="text" name="input_wargaNegara" class="form-control" value="<?php echo $tamu[0]['warganegara']; ?>" >
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="input_alamat" class="form-control" value="<?php echo $tamu[0]['alamat']; ?>">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="input_telepon" class="form-control" value="<?php echo $tamu[0]['telepon']; ?>" >
          </div>
         <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>