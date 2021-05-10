<div class="container">
  <h1 class="display-4 text-center"> List Diterima</h1>
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
      <th scope="col">Total</th>
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
    <?php endforeach; ?>
    <td><?php echo 'Rp. '.number_format($total[0]['total']);?></td>
  </tr>
  </tbody>
</table>

</div>
