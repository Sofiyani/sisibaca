<div class="container-fluid">
  <div id="ui-view" style="opacity: 1;">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <strong>Profil</strong>
              <small>Edit Data</small>
            </div>
            <div class="card-body">
              <div class="row">
                <div id="not" style="width: 100%">
                  <?php echo $this->session->flashdata('alert'); ?> 
                </div>
                <form action="<?php echo base_url('Kontributor/update_profil/').$data['id_kontributor']; ?>" method="POST" data-parsley-validate enctype="multipart/form-data" style="width: 100%">

                  <div class="form-group">
                    <label for="number1" style="margin-left: 25%;">Nama Lengkap</label>
                    <input id="number1" style="margin-left: 25%;" disabled type="text" required class="form-control col-md-4"  name="fullname" value="<?php echo $data['fullname']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="number2" style="margin-left: 25%;">E-mail</label>
                    <input id="number2" style="margin-left: 25%;" disabled type="text" name="email" class="form-control col-md-4" required value="<?php echo $data['email']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="number3" style="margin-left: 25%;">Alamat</label>
                    <textarea id="number3" style="margin-left: 25%;" required class="form-control col-md-4" name="alamat"><?php echo $data['alamat']; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="number4" style="margin-left: 25%;">No. HP</label>
                    <input id="number4" style="margin-left: 25%;" type="number" name="hp" class="form-control col-md-4" required value="<?php echo $data['hp']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="number5" style="margin-left: 25%;">Username</label>
                    <input id="number5" style="margin-left: 25%;" disabled type="text" name="username" class="form-control col-md-4" required value="<?php echo $data['username']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="number6" style="margin-left: 25%;">Password Lama</label>
                    <input id="number6" style="margin-left: 25%;" type="password" required class="form-control col-md-4"  name="passwordlama" placeholder="Password Lama">
                  </div>

                  <div class="form-group">
                    <label for="number7" style="margin-left: 25%;">Password Baru</label>
                    <input id="number7" style="margin-left: 25%;" type="password" required class="form-control col-md-4"  name="password" placeholder="Password Baru">
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