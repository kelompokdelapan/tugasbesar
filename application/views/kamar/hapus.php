  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Hapus Kamar</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-trash"></i> Hapus Kamar</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('kamar/proses_hapus'); ?>
          <input type="hidden" name="input_idKamar" value="<?php echo $kamar[0]['id_kamar']; ?>">
          <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="input_namaKamar" class="form-control" value="<?php echo $kamar[0]['nama_kamar']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Jenis Kamar</label>
            <input type="text" name="input_jenisKamar" class="form-control" value="<?php echo $kamar[0]['jenis_kamar']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Harga Sewa</label>
            <input type="text" name="input_hargaSewa" class="form-control" value="<?php echo $kamar[0]['harga_sewa']; ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label>Fasilitas</label>
            <textarea name="input_fasilitas" class="form-control" rows="5" readonly="readonly"><?php echo $kamar[0]['fasilitas']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Ganti Gambar</label>
            <br>
            <img src="<?php echo base_url(); ?>assets/frontend/img/portfolio/<?php echo $kamar[0]['gambar_kamar']; ?>" width="100">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>