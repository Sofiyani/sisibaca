<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
     <div class="card">
      <div class="card-header">
       <strong>Nama Do'a</strong>
       <small>Edit Data</small>
      </div>
      <div class="card-body">
       <div class="row">
        <form action="<?php echo base_url('Admin/update_namadoa/').$data['id_item']; ?>" method="POST" data-parsley-validate enctype="multipart/form-data" style="width: 100%">
         <div id="not" style="width: 100%">
            <?php echo $this->session->flashdata('alert'); ?> 
         </div>
         <div class="form-group">
           <label for="number3" style="margin-left: 25%;">Nama Do'a *</label>
           <input id="number3" style="margin-left: 25%;" type="text" name="n_item" class="form-control col-md-4" required placeholder="Nama Do'a" value="<?php echo $data['n_item']; ?>">
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