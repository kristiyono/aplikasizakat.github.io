<div class="container">
  <h1 class="display-4 text-center"> List Belum Diterima</h1>
  <br><br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Telp</th>
      <th scope="col">Nominal</th>
      <th scope="col">Via Bank</th>
      <th scope="col">Zakat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;
     foreach ($dataOrder as $value): ?>
      <tr>
        <th scope="row"><?php echo $i++;?></th>
        <td><?php echo $value['nama'];?></td>
        <td><?php echo $value['email'];?></td>
        <td><?php echo $value['notelp'];?></td>
        <td><?php echo 'Rp. '.number_format($value['nominal']);?></td>
        <td><?php echo $value['bank'];?></td>
        <td><?php echo $value['jzakat'];?></td>
        <td><a class="btn btn-info btn-sm" href="<?php echo site_url('/admin/Diterima/'.$value['id_activity'].'');?>">Diterima</a> | <a class="btn btn-danger btn-sm" href="<?php echo site_url('/admin/deleteOrder/'.$value['id_activity'].'');?>">X</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>
