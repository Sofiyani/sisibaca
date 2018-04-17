<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
     <div class="card">
      <div class="card-header">
       <strong>Do'a</strong>
       <small>Tambah Data</small>
      </div>
      <div class="card-body">
       <div class="row">
        <div id="not" style="width: 100%">
          <?php echo $this->session->flashdata('alert'); ?> 
        </div> 
        <form action="<?php echo base_url('Admin/add_doa'); ?>" method="POST" data-parsley-validate enctype="multipart/form-data" style="width: 100%">
          
         <div class="form-group">
          <label for="number1" style="margin-left: 25%;">Nama Do'a</label>
          <select  id="number1" style="margin-left: 25%;" name="id_item" required class="form-control col-md-4" >
           <option disabled selected>--Pilih Nama Do'a--</option>
             <?php echo $data; ?>
          </select>
         </div>
         <div  class="form-group">
           <label for="number2" style="margin-left: 25%;">Nomor</label>
           <input id="number2" style="margin-left: 25%;" type="number" required class="form-control col-md-2" name="nomor" placeholder="Nomor Do'a">
         </div>
         <div class="form-group">
           <label for="number3" style="margin-left: 25%;">Do'a</label>
           <textarea id="number3"  name="doa" class="form-control col-md-7" style="direction: rtl; text-align: right;font-family: 'Amiri';font-size: 14pt; margin-left: 25%;" required placeholder="Do'a"></textarea>
         </div>
         <div class="form-group">
           <label for="number4" style="margin-left: 25%;">Arti</label>
           <textarea id="number4" style="margin-left: 25%;" name="arti" class="form-control col-md-7" required placeholder="Arti"></textarea>
         </div>
         <div class="form-group">
           <label for="number5" style="margin-left: 25%;">Cara Baca</label>
           <textarea id="number5" style="margin-left: 25%;" name="indo" class="form-control col-md-7" required placeholder="Cara Baca"></textarea>
         </div>
         <div class="form-group">
           <label for="number6" style="margin-left: 25%;">Dibaca</label>
           <input id="number6" style="margin-left: 25%;" type="number" name="kali" class="form-control col-md-2" required placeholder="Dibaca Berapa Kali"></input>  
         </div> 
         <div class="form-group">
           <label for="number7" style="margin-left: 25%;">Sumber</label>
           <input id="number7" style="margin-left: 25%;" name="sumber" class="form-control col-md-7" required placeholder="Sumber Do'a"></input>
           </div>
           <div class="form-group">
           <label for="number8" style="margin-left: 25%;">File Audio</label>
           <input type="file"  style="margin-left: 25%;" name="file_audio" class="form-control col-md-7"  id="file_audio" required placeholder="file_audio"></input>
           </div> 
           <div class="ln_solid"></div>
           <div class="form-group">
           <div style="margin-left: 25%;">
            <button class="btn btn-success">Simpan</button>
            <button class="btn btn-primary" type="reset">Reset</button>
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