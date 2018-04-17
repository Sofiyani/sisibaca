<div class="container-fluid">
 	<div id="ui-view" style="opacity: 1;">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<strong>Nama Do'a</strong>
							<small>Data</small>
							<button class="btn btn-outline-secondary" style="position: absolute; right: 12px;" onclick="window.history.go(-1); return false;">Kembali</button>	
						</div>
						<div class="card-body">
							<div class="row">
								<table class="table table-striped table-bordered datatable">
									<thead>
										<th style="width: 1%;">No</th>
										<th>Nama Do'a</th>
										<th style="width: 8%;">Jumlah</th>
										<th style="width: 3%;">Menu</th>
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
													<a  href="<?php echo base_url('Kontributor/doa/').$row['id_item']; ?>" class="btn btn-outline-info fa fa-search"></a>
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
