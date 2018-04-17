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
								<table class="table table-striped table-bordered datatable">
									<thead>
										
										<th>Do'a</th>
										<th style="width: 5%;">Dibaca</th>
										<th style="width: 12%;">Audio</th>
									</thead>
									<tbody>
										<?php 
										foreach ($data as $row) 
										{
										?>
											<tr>

												
												<td style="text-align: right;font-family: 'Amiri';font-size: 17pt;"><?php echo $row['doa']; ?></td>
												<td style="text-align: center; vertical-align: middle;"><?php echo $row['kali']; ?> X</td>
												<td style="text-align: center; vertical-align: middle;">
												<audio controls>
												<source src="<?php echo base_url('file_audio/').$row['file_audio']; ?>" type="audio/mpeg">
												</audio>
												</td>
												</tr>
												

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