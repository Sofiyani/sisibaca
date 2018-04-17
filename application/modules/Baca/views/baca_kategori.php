<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	 <div class="card">
	  <div class="card-header">
	  <strong>Kategori Do'a</strong>
	  <small>Data</small>
	  <button class="btn btn-outline-secondary" style="position: absolute; right: 12px;" onclick="window.history.go(-1); return false;">Kembali</button>	
   	  
   
	  </div>
	 <div class="card-body">
	  <div class="row">
	   <div id="not" style="width: 100%">
	    <?php echo $this->session->flashdata('alert'); ?>	
	   </div>
	   <table class="table table-striped table-bordered datatable">
		<thead>
		<th style="width: 1%;">No</th>
		<th>Nama Kategori</th>
		<th style="width: 8%;">Jumlah</th>
		<th style="width: 16%;">Menu</th>
	   </thead>
       <tbody>
	    <?php
	    $no=1;  
	    foreach ($data as $row) 
	    {
	    ?>
	     <tr>
		  <td><?php echo $no++; ?>.</td>
		  <td><?php echo $row['n_kat']; ?></td>
		  <td><?php echo $row['jumlah']; ?></td>
		  <td style="text-align: center; ">
		   <a  href="<?php echo base_url('Baca/nama_doa/').$row['id_kat']; ?>" class="btn btn-outline-info fa fa-search"></a>

		 
	      </td>
		 </tr>
		 <div class="modal fade" id="<?php echo $row['id_kat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-danger" role="document">
		<div class="modal-content">
		 	<div class="modal-header">
		 	 	<h4 class="modal-title">Peringatan!</h4>
		 	 	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		 	 		<span aria-hidden="true">x</span>
		 	 	</button>
		 	</div>
		 	<div class="modal-body">
		 		<p>
		 				Apakah anda yakin ingin menghapus data "<?php echo $row['n_kat']; ?>"?
		 		</p>
		 	</div>
		 	<div class="modal-footer">
		 	  	<a href="<?php echo base_url('Admin/delete_kategori/').$row['id_kat']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
		 	  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		 	</div>
		</div>
	</div>
</div>
		<?php	
		}
		?>
	   </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>	
</div>
</div>
</div>