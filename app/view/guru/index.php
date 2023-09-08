<div class="container mt-5">
   <div class="row">  
  
    <?php Flasher::flash();?>

     <div class="col-6">
     <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data Guru
      </button>
      <div class="container mt-3">
         <h3>Data Guru</h3>
         <ul class="list-group">
         <?php foreach($data['guru'] as $guru) :?>
          <li class="list-group-item">
         <?= $guru['Nama']; ?>
         <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
          <a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $guru['id']; ?>">ubah</a>
          <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
        </li>
        <?php endforeach; ?>
        </ul>
         </div>
         </div>
         </div>
<!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASE_URL; ?>/guru/tambah" method="post">
      <input type="hidden" name="id" id="id">
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="Nama" name="Nama">
</div>
<div class="form-group">
    <label for="Komli">Komli</label>
    <input type="text" class="form-control" id="Komli" name="Komli">
</div>
<div class="form-group">
    <label for="Mapel">Mapel</label>
    <input type="text" class="form-control" id="Mapel" name="Mapel">
</div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   
 
</div>