<div class="container-fluid">
 <div id="ui-view" style="opacity: 1;">
  <div class="animated fadeIn">
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	 <div class="card">
	  <div class="card-header">
	  <strong>Kategori</strong>
	  <small>Data</small>
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
		<th style="width: 3%;">Menu</th>   
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
		   <a  href="<?php echo base_url('Kontributor/nama_doa/').$row['id_kat']; ?>" class="btn btn-outline-info fa fa-search"></a>
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