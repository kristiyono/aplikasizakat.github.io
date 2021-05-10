<div class="container"><br><br><br>
  <div class="card">
  <h5 class="card-header text-center">Login</h5>
  <p>username : admin & password : zakatinaja</p>
  <div class="card-body">
  <?php echo form_open('admin/ProcessLog');?>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username..." name="username" required>
    <small id="emailHelp" class="form-text text-muted">Masukan username dengan benar.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
<br><br><br><br>
