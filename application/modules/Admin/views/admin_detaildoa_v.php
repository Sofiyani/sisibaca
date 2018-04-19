<!DOCTYPE html>
</html><div class="container-fluid">
	<div id="ui-view" style="opacity: 1;">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<strong>Do'a</strong>
							<small>Data</small>
							<button class="btn btn-outline-secondary" style="position: absolute; right: 12px;" onclick="window.history.go(-1); return false;">Kembali</button>	
						</div>
						<div class="card-body">
							<div class="row">
								<div id="not" style="width: 100%">
							     <?php echo $this->session->flashdata('alert'); ?>	
							    </div>
								<table class="table table-striped  table-bordered datatable">
									
									<tbody>
										<?php 
										foreach ($data as $row) 
										{
										?>
										<tr>
												<td colspan="1" style="font-weight : bold;">No.</td>
												<td colspan="3" ><?php echo $row['nomor']; ?></td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Doa</td>
												<td colspan="4" style="text-align: right; background: #e6e6e6;font-family: 'Amiri';font-size: 14pt;"><?php echo $row['doa']; ?></td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Arti</td>
												<td colspan="3" style="text-align: center; background: #e6e6e6; vertical-align: middle;"><?php echo $row['arti'];
												 ?></td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Cara Membaca</td>
												<td colspan="3" style="text-align: center; background: #e6e6e6; vertical-align: middle;"><?php echo $row['indo'];
												 ?></td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Di Baca</td>
												<td colspan="3" style="text-align: center; background: #e6e6e6;
												vertical-align: middle;"><?php echo $row['kali'];?>X</td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Audio</td>
												<td colspan="3" style="background: #e6e6e6;"><audio controls>
												<source src="<?php echo base_url('file_audio/').$row['file_audio']; ?>" type="audio/mpeg">
												</audio></td>
											</tr>
											<tr>
												<td colspan="1" style="font-weight : bold;">Sumber</td>
												<td colspan="3" style="text-align: center; background: #e6e6e6;
												vertical-align: middle;"><?php echo $row['sumber'];?>X</td>
											</tr>
											</tbody>
							</table>
						

											<div class="modal fade" id="<?php echo $row['id_doa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
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
	 				Apakah anda yakin ingin menghapus Do'a <br>
	 				<p style="text-align: right;font-family: 'Amiri';font-size: 14pt;">
	 					? "<?php echo $row['doa']; ?>"
	 				</p> 
		 		</p>
		 	</div>
		 	<div class="modal-footer">
		 	  	<a href="<?php echo base_url('Admin/delete_doa/').$row['id_doa']; ?>" ><button type="button" class="btn btn-danger">Hapus</button></a>
		 	  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		 	</div>
		 	
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
											
						