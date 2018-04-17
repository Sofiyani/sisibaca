<div class="container-fluid">
 	<div id="ui-view" style="opacity: 1;">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<strong>Nama Do'a</strong>
							<small>Data</small>
							<a href="<?php echo base_url('Admin/tambah_doa'); ?>" ><button class="btn btn-primary" type="submit" style="position: absolute; right: 10%;">Tambah Do'a</button></a>
							<button class="btn btn-outline-secondary" style="position: absolute; right: 12px;" onclick="window.history.go(-1); return false;">Kembali</button>	
							</div>
							<div class="card-body">
							<div class="row">
								<div id="not" style="width: 100%">
							     <?php echo $this->session->flashdata('alert'); ?>	
							    </div>
								<table class="table table-striped table-bordered datatable">
									<thead>
										<th style="width: 5%;">No</th>
										<th>Nama Do'a</th>
										<th style="width: 8%;">Jumlah</th>
										<th style="width: 16%;">Menu</th>
									</thead>
									<tbody>
										<?php 
										foreach ($data as $row) 
										{
										?>
											<tr>
												<td><?php echo $row['nomor']; ?>.</td>
												<td><?php echo $row['n_item']; ?></td>
												<td><?php echo $row['jumlah']; ?></td>
												<td style="text-align: center; ">
													<a  href="<?php echo base_url('Admin/doa/').$row['id_item']; ?>" class="btn btn-outline-info fa fa-search"></a>
		   <a  href="<?php echo base_url('Admin/edit_namadoa/').$row['id_item']; ?>" class="btn btn-outline-warning fa fa-pencil"></a>
		   <button type="button" data-toggle="modal" data-target="#<?php echo $row['id_item']; ?>" class="btn btn-outline-danger fa fa-trash-o"></button>
												</td>
											</tr>
											<div class="modal fade" id="<?php echo $row['id_item']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
	 				Apakah anda yakin ingin menghapus "<?php echo $row['n_item']; ?>"?
		 		</p>
		 	</div>
		 	<div class="modal-footer">
		 	  	<a href="<?php echo base_url('Admin/delete_namadoa/').$row['id_item']; ?>" ><button type="button" class="btn btn-danger">Hapus</button></a>
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