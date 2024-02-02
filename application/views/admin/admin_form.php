<?php $this->load->view('admin/header')?>
<div class="content-wrapper">
  <h3>Tambah Admin</h3>
  <div class="card card-body">
  <form action="<?php echo $action?>" method="post">
    <div class="mb-3">
      <label class="form-label">ID Admin</label>
      <input type="int" class="form-control" name="id_admin" value="<?php echo isset($id_admin) ? $id_admin : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Nama Admin</label>
      <input type="text" class="form-control" name="nama_admin" value="<?php echo isset($nama_admin) ? $nama_admin : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">No Tlp</label>
      <input type="text" class="form-control" name="no_tlp" value="<?php echo isset($no_tlp) ? $no_tlp : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Role</label>
      <input type="text" class="form-control" name="role" value="<?php echo isset($role) ? $role : ''; ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="<?php echo isset($password) ? $password : ''; ?>">
    </div>

    <input type="hidden" class="form-control" name="id_admin" value="<?php echo isset($id_admin) ? $id_admin : ''; ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
<?php $this->load->view('admin/footer')?>
