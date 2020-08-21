<?php echo validation_errors() ?>
      <form method="post" action="<?php echo base_url("C_pesanrs/update/".$pesan_rs['id_pesanrs']) ?>">
      	<input type="hidden" name="username" class="form-control" id="username" value="<?php echo $this->session->userdata('uname') ?>">
  <div class="form-group row">
    <label for="id_pesanrs" class="col-sm-2 col-form-label">ID PESAN RS</label>
    <div class="col-sm-10">
      <input type="text" name="id_pesanrs" class="form-control" id="id_pesanrs" value="<?php echo $pesan_rs['id_pesanrs'] ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="id_rs" class="col-sm-2 col-form-label">ID RS</label>
    <div class="col-sm-10">
      <input type="text" name="id_rs" class="form-control" id="id_rs" value="<?php echo $pesan_rs['id_rs'] ?>" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pesan_rs['nama'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_pesan" class="col-sm-2 col-form-label">TANGGAL</label>
    <div class="col-sm-10">
      <input type="date" name="tgl_pesan" class="form-control" id="tgl_pesan" value="<?php echo $pesan_rs['tgl_pesan'] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="waktu_pesan" class="col-sm-2 col-form-label">WAKTU</label>
    <div class="col-sm-10">
      <input type="time" name="waktu_pesan" class="form-control" id="waktu_pesan" value="<?php echo $pesan_rs['waktu_pesan'] ?>">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="submit" name="" class="btn btn-success" id="" value="Update">
    </div>
  </div>
</form>