<div class="container-fluid">
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
										<th style="width: 5%;">No</th>
										<th>Do'a</th>
										<th style="width: 5%;">Dibaca</th>
										<th style="width: 7%;">Menu</th>
									</thead>
									<tbody>
										<?php 
										foreach ($data as $row) 
										{
										?>
											<tr>
												<td><?php echo $row['nomor']; ?></td>
												<td style="text-align: right;font-family: 'Amiri';font-size: 14pt;"><?php echo $row['doa']; ?></td>
												<td style="text-align: center; vertical-align: middle;"><?php echo $row['kali']; ?> X</td>
												<td style="text-align: center; vertical-align: middle;">
												   <a  href="<?php echo base_url('Kontributor/edit_doa/').$row['id_doa']; ?>" class="btn btn-outline-warning fa fa-pencil"></a>
												</td>
											</tr>
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