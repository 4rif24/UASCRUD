<?=$this->extend('main/layout');?>

<?=$this->section('judul');?>
Form Data Barang
<?=$this->endSection('judul');?>

<?=$this->section('subjudul');?>

<button type="button" class="btn btn-sm btn-primary" onclick="location.href('/barang/index')">
    <i class="fa fa-backward"></i> Kembali
</button>

<?=$this->endSection('subjudul');?>

<?=$this->section('isi');?>
    <div class="form-group row">
        <label for="" class="col-sm-4 col-form-label">Kode Barang</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="kodebarang" name="kodebarang" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-sm-4 col-form-label">Nama Barang</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="namabarang" name="namabarang">
        </div>

    <div class="form-group row">
        <label for="" class="col-sm-4 col-form-label">Pilih Kategori</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="pilihkaategori" name="pilihkaategori">
        </div>

    <div class="form-group row">
        <label for="" class="col-sm-4 col-form-label">Nama Barang</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" id="namabarang" name="namabarang">
        </div>
  </div>
<?=$this->endSection('isi');?>