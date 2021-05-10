<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Terima Kasih Sudah Berzakat</h1>
    <p class="lead">Anda sudah melewati proses pengesisian data, untuk langkah selanjutnya silahkan transfer uang sebesar Rp. <?php echo number_format($nominal);?> ke Rekening : <?php foreach ($rekening as $value): ?>
      <?php echo $value['rekening'];?>
    <?php endforeach; ?></p>
    <hr class="my-4">
    <p>Batas waktu pentransferan 24 jam dari sekarang, jika anda tidak transfer dalam kurun waktu tersebut silahkan daftar ulang kembali <a href="<?php echo base_url();?>">di sini</a></p>
    <a href="<?php echo base_url();?>" class="btn btn-info btn-sm">Tutup</a>
  </div>
</div>
