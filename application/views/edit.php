<div class="container mt-2">
<h4> Edit Data Cuti - <?= $data[0]['nama'] ?></h4> 
  <div class="jumbotron">
    
  <form action="<?= base_url('cuti/update/').$data[0]['id']?>" method="post">
<?php foreach($data as $key => $datas) :?>
    <div class="form-group">
    <label for="">Nama Karyawan</label>
    <input type="text" class="form-control" placeholder="Nama Karyawan" name="nama" value="<?= $datas['nama']?>" >
    </div>

    <div class="form-group">
    <label for="">Tgl Mulai Cuti</label>
    <input type="text" class="form-control" id="datepicker" placeholder="Tanggal Mulai Cuti" name="tgl_mulai" value="<?= $datas['tgl_mulai']?>">
    </div>

    <div class="form-group">
    <label for="">Tgl Akhir Cuti</label>
    <input type="text" class="form-control" id="datepicker1" placeholder="Tanggal Mulai Cuti" name="tgl_akhir" value="<?= $datas['tgl_akhir']?>">
    </div>
<?php endforeach; ?>
    <button type="button" class="btn btn-secondary">Close</button>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

  </div> 
</div>