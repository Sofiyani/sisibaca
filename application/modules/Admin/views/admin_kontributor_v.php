<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	 <div class="card">
	  <div class="card-header">
	  <strong>Kontributor</strong>
	  <small>Data</small>
   	  <a href="<?php echo base_url('Admin/tambah_kontributor'); ?>" ><button class="btn btn-primary" type="submit" style="position: absolute; right: 1%;">Tambah Kontributor</button></a>
   	  
	  </div>
	 <div class="card-body">
	  <div class="row">
	   <div id="not" style="width: 100%">
	    <?php echo $this->session->flashdata('alert'); ?>	
	   </div>
	   <table class="table table-striped table-bordered datatable">
		<thead>
		<th style="width: 1%;">id</th>
		<th style="width: 10%;">Nama Kontributor</th>
		<th style="width: 8%;">E-mail</th>
		<th style="width: 14%;">Alamat</th>
		<th style="width: 1%;">No. HP</th>
		<th style="width: 1%;">Status</th>
		<th style="width: 5%;">Menu</th>
	   </thead>
       <tbody>
	   	<?php  
	   	foreach ($data as $row) 
	   	{
	   	?>
	   		<tr>
	   			<td><?php echo $row['id_kontributor'] ?></td>
	   			<td><?php echo $row['fullname'] ?></td>
	   			<td><?php echo $row['email'] ?></td>
	   			<td><?php echo $row['alamat'] ?></td>
	   			<td><?php echo $row['hp'] ?></td>
	   			<?php  
	   			if ($row['status']==1) 
	   			{ ?>
	   				<td style="text-align: center;"><span class="badge badge-success">Aktif</span></td>
	   	  <?php }
	   	  		else
	   	  		{ ?>
	   	  			<td style="text-align: center;"><span class="badge badge-danger">Tidak Aktif</span></td>
	   	  <?php }
	   			?>
	   			<td style="text-align: center; ">
		   <a  href="<?php echo base_url('Admin/edit_kontributor/').$row['id_kontributor']; ?>" class="btn btn-outline-warning fa fa-pencil"></a>
		   <a ><button data-toggle="modal" data-target="#<?php echo $row['id_kontributor']; ?>" type="button" class="btn btn-outline-danger fa fa-trash-o"></button></a>
	      		</td>
		 	</tr>
		 <div class="modal fade" id="<?php echo $row['id_kontributor']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
		 				Apakah anda yakin ingin menghapus data "<?php echo $row['fullname']; ?>"?
		 		</p>
		 	</div>
		 	<div class="modal-footer">
		 	  	<a href="<?php echo base_url('Admin/delete_kontributor/').$row['id_kontributor']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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