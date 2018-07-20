  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Perbarui Kamar</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> Perbarui Kamar</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('kamar/proses_perbarui'); ?>
          <input type="hidden" name="input_idKamar" value="<?php echo $kamar[0]['id_kamar']; ?>">
          <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="input_namaKamar" class="form-control" value="<?php echo $kamar[0]['nama_kamar']; ?>">
          </div>
          <div class="form-group">
            <label>Jenis Kamar</label>
            <input type="text" name="input_jenisKamar" class="form-control" value="<?php echo $kamar[0]['jenis_kamar']; ?>">
          </div>
          <div class="form-group">
            <label>Harga Sewa</label>
            <input type="text" name="input_hargaSewa" class="form-control" value="<?php echo $kamar[0]['harga_sewa']; ?>">
          </div>
          <div class="form-group">
            <label>Fasilitas</label>
            <textarea name="input_fasilitas" class="form-control" rows="5"><?php echo $kamar[0]['fasilitas']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Ganti Gambar</label>
            <input type="file" name="input_gambarKamar" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>