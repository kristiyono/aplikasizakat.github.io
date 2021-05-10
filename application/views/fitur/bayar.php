<div class="container"><br>
  <h1 class="display-4" style="text-align:center;border-bottom: 1px solid black">Pembayaran</h1><br><br>
  <?php echo form_open('zakat/pembayaran');?>
    <div class="form-row">
      <div class="form-group col-md">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="" name="nama" required>
        <small id="help" class="form-text text-muted">Input Nama Anda</small>
      </div>
      <div class="form-group col-md">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder=" " name="email" required>
        <small id="help" class="form-text text-muted">Input Email Anda</small>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md">
        <label for="telp">Telepon</label>
        <input type="number" class="form-control" id=" " name="notelp" required>
        <small id="help" class="form-text text-muted">Input Nomor Telepon</small>
      </div>
      <div class="form-group col-md">
        <label for="nominal">Nominal</label>
        <input type="number" class="form-control" id=" " name="nominal" min="10000" required>
        <small id="help" class="form-text text-muted">Input Nominal Zakat</small>
      </div>
      <div class="form-group col-md">
      <label for="amal">Jenis Zakat</label>
          <select class="custom-select" name="jenis" required>
    <option selected>Pilih Jenis Zakat</option>
    <option value="Zakat Mal">Zakat Mal</option>
    <option value="Zakat penghasilan">Zakat Penghasilan</option>
  </select>
  <small id="help" class="form-text text-muted">Jenis Zakat</small>
  </div>
  </div>
  <label for="method">Metode Pembayaran</label>
  <div class="form-group col-md-12">
      <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name="metode" class="custom-control-input" value="transfer" required>
          <label class="custom-control-label" for="customRadioInline2">Bank</label>
          <div class="form-group col-md-1">
      </div>
      <select class="custom-select" name="pilihbank" required>
          <option selected>Pilih Bank</option>
          <?php foreach ($bank as $value): ?>
            <option value="<?php echo $value['nama_bank'];?>"><?php echo $value['nama_bank'];?></option>
          <?php endforeach; ?>
          </select>
      </div>
  </div>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
      </div>

  </form>
