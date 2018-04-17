<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
     <div class="card">
      <div class="card-header">
       <strong>Do'a</strong>
       <small>Edit Data</small>
      </div>
      <div class="card-body">
       <div class="row">
        <div id="not" style="width: 100%">
          <?php echo $this->session->flashdata('alert'); ?> 
        </div> 
        <form action="<?php echo base_url('Kontributor/update_doa/').$data['id_doa']; ?>" method="POST" data-parsley-validate enctype="multipart/form-data" style="width: 100%">
         
         <div class="form-group">
           <label for="number1" style="margin-left: 25%;">Nomor</label>
           <input id="number1" style="margin-left: 25%;" type="number" required class="form-control col-md-1" name="nomor" value="<?php echo $data['nomor']; ?>">
         </div>

         <div class="form-group">
           <label for="number2" style="margin-left: 25%;">Do'a</label>
           <textarea id="number2" style="margin-left: 25%;" name="doa" class="form-control col-md-7" style="direction: rtl; text-align: right;font-family: 'Amiri';font-size: 14pt;" required><?php echo $data['doa']; ?></textarea>
         </div>

         <div class="form-group">
           <label for="number3" style="margin-left: 25%;">Arti</label>
           <textarea id="number3" style="margin-left: 25%;" name="arti" class="form-control col-md-7" required><?php echo $data['arti']; ?></textarea>
         </div>

         <div class="form-group">
           <label for="number4" style="margin-left: 25%;">Cara Baca</label>
           <textarea id="number4" style="margin-left: 25%;" name="indo" class="form-control col-md-7" required><?php echo $data['indo']; ?></textarea>
         </div>

         <div class="form-group">
           <label for="number5" style="margin-left: 25%;">Dibaca</label>
           <input id="number5" style="margin-left: 25%;" name="kali" class="form-control col-md-1" required value="<?php echo $data['kali']; ?>"></input>
         </div> 

         <div class="form-group">
           <label for="number6" style="margin-left: 25%;">Sumber</label>
           <input id="number6" style="margin-left: 25%;" name="sumber" class="form-control col-md-7" required value="<?php echo $data['sumber']; ?>"></input>
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