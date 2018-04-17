<div class="container-fluid">
  <div id="ui-view" style="opacity: 1;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong>Kategori</strong>
              <small>Tambah Data</small>
            </div>
            <div class="card-body">
              <div class="row">
                <div id="not" style="width: 100%">
                  <?php echo $this->session->flashdata('alert'); ?> 
                </div>
                <form action="<?php echo base_url('Admin/update_kontributor/').$data['id_kontributor']; ?>" method="POST" data-parsley-validate enctype="multipart/form-data" style="width: 100%">
                  <div class="form-group">
                    <label for="number1" style="margin-left: 25%;">Nama Lengkap</label>
                    <input disabled id="number1" style="margin-left: 25%;" type="text" required class="form-control col-md-4" name="fullname" placeholder="Nama Lengkap" value="<?php echo $data['fullname']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="number2" style="margin-left: 25%;">Alamat</label>
                    <textarea disabled id="number2" style="margin-left: 25%;" required class="form-control col-md-4" name="alamat" placeholder="Alamat Kontributor"><?php echo $data['alamat']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="number3" style="margin-left: 25%;">E-mail</label>
                    <input disabled id="number3" style="margin-left: 25%;" type="email" required class="form-control col-md-4"  name="email" placeholder="E-mail Kontributor" value="<?php echo $data['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="number4" style="margin-left: 25%;">No. HP</label>
                    <input disabled id="number4" style="margin-left: 25%;" type="number" required class="form-control col-md-4"  name="hp" placeholder="No. HP Kontributor" value="<?php echo $data['hp']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="number5" style="margin-left: 25%;">Status</label>
                    <select id="number5" style="margin-left: 25%;" required class="form-control col-md-4" name="status">
                      <?php  
                      if ($data['status']==1) 
                      { ?>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
               <?php  }
                      else
                      { ?>
                        <option value="0">Tidak Aktif</option>
                        <option value="1">Aktif</option>
                <?php }
                      ?>
                    </select>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div style="margin-left: 25%;">
                      <button class="btn btn-warning">Edit</button>
                      <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;">Kembali</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>