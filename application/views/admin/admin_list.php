<?php $this->load->view('admin/header')?>
<div class="content-wrapper">
<?php if ($this->session->flashdata('message')):?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('message')?>
  </div>        
<?php endif?>

<h3>List Admin</h3> 
<a href="<?php echo site_url('Cadmin/tambah')?>">Tambah Data Admin</a>

<?php if ($list_admin):?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID Admin</th>
        <th scope="col">Nama Admin</th>
        <th scope="col">No Tlp</th>
        <th scope="col">role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1?>
      <?php foreach ($list_admin as $lk):?>
      <tr>
        <th scope="row"><?php echo $i?></th>
        <td><?php echo $lk->id_admin?></td>
        <td><?php echo $lk->nama_admin?></td>
        <td><?php echo $lk->no_tlp?></td>
        <td><?php echo $lk->role?></td>
        <td>
          <a href="<?php echo site_url('Cadmin/update/'.$lk->id_admin)?>">Edit</a> | 
          <a href="<?php echo site_url('Cadmin/delete/'.$lk->id_admin)?>" onclick="return confirm('Anda yakin hapus data ini?')">Delete</a>
        </td>
      </tr>
      <?php $i++?>
      <?php endforeach?>
    </tbody>
  </table>
<?php else:?>
  Data tidak ada
<?php endif?>
</div>

<?php $this->load->view('admin/footer')?>
