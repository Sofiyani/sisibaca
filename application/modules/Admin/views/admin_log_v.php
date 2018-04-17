<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	 <div class="card">
	  <div class="card-header">
	  <strong>Log</strong>
	  <small>Data</small>
	  </div>
	 <div class="card-body">
	  <div class="row">
	   <div id="not" style="width: 100%">
	    <?php echo $this->session->flashdata('alert'); ?>	
	   </div>
	   <table class="table table-striped table-bordered datatable">
		<thead>
		<th style="width: 1%; vertical-align: middle;">No</th>
		<th style="width: 5%; vertical-align: middle;">Nama Kontributor</th>
		<th style="width: 10%; vertical-align: middle;">Kategori</th>
		<th style="width: 10%; vertical-align: middle;">Nama Do'a</th>
		<th style="width: 1%; vertical-align: middle;">Waktu</th>
		<th style="width: 2%; vertical-align: middle; text-align: center;">Menu</th>
	   </thead>
       <tbody>
	   	<?php
	   	$no=1;  
	   	foreach ($data as $row) 
	   	{
	   	?>
	   		<tr>
	   			<td><?php echo $no; ?>.</td>
	   			<td><?php echo $row['fullname']; ?></td>
	   			<td><?php echo $row['kategori']; ?></td>
	   			<td><?php echo $row['nama_doa']; ?></td>
	   			<td><?php echo date("d-m-Y H:i:s", strtotime($row['waktu'])); ?></td>
	   			<td>
	   				<a  href="<?php echo base_url('Admin/detail_log/').$row['id_log']; ?>" class="btn btn-outline-info fa fa-search"></a>
		   			<a><button data-toggle="modal" data-target="#<?php echo $row['id_log']; ?>" type="button" class="btn btn-outline-danger fa fa-trash-o"></button></a>
	      		</td>
		 	</tr>
		 <div class="modal fade" id="<?php echo $row['id_log']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
		 				Apakah anda yakin ingin menghapus data nomor "<?php echo $no++; ?>"?
		 		</p>
		 	</div>
		 	<div class="modal-footer">
		 	  	<a href="<?php echo base_url('Admin/delete_log/').$row['id_log']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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