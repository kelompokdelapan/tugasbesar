  <?php $this->load->view('admin/navigation'); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Administrator</a>
        </li>
        <li class="breadcrumb-item active">Tambah Kamar</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Tambah Kamar</div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('kamar/proses_tambah'); ?>
          <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="input_namaKamar" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis Kamar</label>
            <input type="text" name="input_jenisKamar" class="form-control">
          </div>
          <div class="form-group">
            <label>Harga Sewa</label>
            <input type="text" name="input_hargaSewa" class="form-control">
          </div>
          <div class="form-group">
            <label>Fasilitas</label>
            <textarea name="input_fasilitas" class="form-control" rows="5"></textarea>
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="input_gambarKamar" class="form-control" required="required">
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <?php $this->load->view('admin/footer'); ?>