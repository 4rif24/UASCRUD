<?=$this->extend('main/layout');?>

<?=$this->section('judul');?>
Manajemen Data Kategori
<?=$this->endSection('judul');?>

<?=$this->section('subjudul');?>

<?=form_button('', '<i class="fa fa-plus-circle"></i> Tambah Data', [
    'class' => 'btn btn-primary',
    'onclik' => "location.href=('" . site_url('kategori/formtambah') . "')",

]);?>


<?=$this->endSection('subjudul');?>

<?=$this->section('isi');?>

<?=$this->endSection('isi');?>