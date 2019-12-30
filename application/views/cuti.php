<div class="row">
  <div class="container mt-3">
    <?= $this->session->flashdata('msg')?>
  </div>  
</div>

<div class="row">
  <div class="container mt-3">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
      Tambah Data Cuti
    </button>

    <div class="float-right">
        <a href="<?= base_url('cuti/')?>" class="btn btn-success ml-2">Refresh</a>
    </div>
    <div class="float-right">
        <form action="<?= base_url('cuti/') ?>" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Karyawan" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" value="cari">Cari</button>
            </div>
        </div>
        </form>
    </div>



</div>
</div>

<div class="container mt-3">
<table class="table table-hover">
  <thead class>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">Tgl. Mulai Cuti</th>
      <th scope="col">Tgl. Akhir Cuti</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach($data as $key => $datas): ?>
    <tr>
      <th scope="row"><?= $no++;?></th>
      <td><?= $datas['nama']; ?></td>
      <td><?= $datas['tgl_mulai'] ?></td>
      <td><?= $datas['tgl_akhir'] ?></td>
      <td>
        <?php if($datas['status'] == 'Y') { ?>
          <span class="badge badge-info">Disetujui</span>
        <?php } else { ?>
          <span class="badge badge-secondary">Belum Disetujui</span>

        <?php } ?>
      </td>
      <td>   
          <?php if($datas['status'] == 'Y') { ?>
            <a href="#" class="btn btn-sm btn-secondary disabled" style="cursor: not-allowed" role="button" aria-disabled="true">Setujui</a>
          <?php } else { ?>
            <a href="<?= base_url('cuti/accepted/').$datas['id'];?>" class="btn btn-sm btn-info">Setujui</a>

          <?php } ?>

            <a href="<?= base_url('cuti/?edit=').$datas['id']?>" class="btn btn-sm btn-success">Edit</a>
            <a href="<?= base_url('cuti/?delete=').$datas['id']?>" class="btn btn-sm btn-danger">Hapus</a>
      </td>

    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Cuti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('cuti')?>" method="post">

        <div class="form-group">
          <label for="">Nama Karyawan</label>
          <input type="text" class="form-control" placeholder="Nama Karyawan" name="nama">
        </div>

        <div class="form-group">
          <label for="">Tgl Mulai Cuti</label>
          <input type="text" class="form-control" id="datepicker" placeholder="Tanggal Mulai Cuti" name="tgl_mulai">
        </div>

        <div class="form-group">
          <label for="">Tgl Akhir Cuti</label>
          <input type="text" class="form-control" id="datepicker1" placeholder="Tanggal Mulai Cuti" name="tgl_akhir">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

        </form>
      </div>
    </div>
  </div>
</div>