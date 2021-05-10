<div class="container">
  <h1 class="display-4 text-center">Buat Data Bank Baru</h1>
  <br>
  <?php echo form_open('admin/saveBank');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Bank</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Text" name="nama_bank">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Rekening Bank</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Rekening" name="rekening">
  </div>
  <button type="submit" class="btn btn-warning">Buat</button>
</form>
</div>
