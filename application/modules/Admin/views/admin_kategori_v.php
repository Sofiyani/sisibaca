<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	 <div class="card">
	  <div class="card-header">
	  <strong>Kategori</strong>
	  <small>Data</small>
   	  <a href="<?php echo base_url('Admin/tambah_kategori'); ?>" ><button class="btn btn-primary" type="submit" style="position: absolute; right: 17%;">Tambah Kategori</button></a>
   	  <a href="<?php echo base_url('Admin/tambah_nama_doa'); ?>" ><button class="btn btn-primary" type="submit" style="position: absolute; right: 1%;">Tambah Nama Do'a</button></a>
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
		   <a  href="<?php echo base_url('Admin/nama_doa/').$row['id_kat']; ?>" class="btn btn-outline-info fa fa-search"></a>
		   <a  href="<?php echo base_url('Admin/edit_kategori/').$row['id_kat']; ?>" class="btn btn-outline-warning fa fa-pencil"></a>
		   <a ><button data-toggle="modal" data-target="#<?php echo $row['id_kat']; ?>" type="button" class="btn btn-outline-danger fa fa-trash-o"></button></a>
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