<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php echo $this->session->flashdata("msg"); ?>  
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Skripsi 
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?php echo base_url();?>/skripsi/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari skripsi.." name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>List Data Skripsi</h3>
          <ul class="list-group">
            <?php foreach($skp as $skp ) : ?>
              <li class="list-group-item">
                  <?= $skp->nama; ?>
                  <a href="<?php echo base_url();?>skripsi/hapus/<?= $skp->id; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?php echo base_url();?>skripsi/ubah/<?php echo $skp->id; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $skp->id; ?>">ubah</a>
                  <a href="<?php echo base_url();?>skripsi/detail/<?= $skp->id; ?>" class="badge badge-primary float-right">detail</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Skripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?php echo base_url();?>/skripsi/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="judul" class="form-control" id="judul" name="judul" placeholder="judul skripsi">
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>assets/js/script_skripsi.js"></script>




