<div class="container-fluid">
 	<div id="ui-view" style="opacity: 1;">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<strong>Log</strong>
							<small>Detail Log</small>
							<button class="btn btn-outline-secondary" style="position: absolute; right: 12px;" onclick="window.history.go(-1); return false;">Kembali</button>	
						</div>
						<div class="card-body">
							<div class="row">
								<strong style="margin-left: 46%;">Data Sebelum</strong>
								<table class="table table-striped table-bordered">
									<thead>
										<th style="width: 30%; ">Do'a</th>
										<th style="width: 23%;">Arti</th>
										<th>Cara Baca</th>
										<th style="width: 20%;">Sumber</th>
									</thead>
									<tbody>
										<tr>
											<td style="direction: rtl; text-align: right;font-family: 'Amiri';font-size: 14pt"><?php echo $data['doa_sebelum'] ?></td>
											<td><?php echo $data['arti_sebelum']; ?></td>
											<td><?php echo $data['indo_sebelum']; ?></td>
											<td><?php echo $data['sumber_sebelum']; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<strong style="margin-left: 46%;">Data Sesudah</strong>
								<table class="table table-striped table-bordered">
									<thead>
										<th style="width: 30%;">Do'a</th>
										<th style="width: 23%;">Arti</th>
										<th>Cara Baca</th>
										<th style="width: 20%;">Sumber</th>
									</thead>
									<tbody>
										<tr>
											<td style="direction: rtl; text-align: right;font-family: 'Amiri';font-size: 14pt"><?php echo $data['doa_sesudah']; ?></td>
											<td><?php echo $data['arti_sesudah']; ?></td>
											<td><?php echo $data['indo_sesudah']; ?></td>
											<td><?php echo $data['sumber_sesudah']; ?></td>
										</tr>
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