<div class="container-fluid">
	<div id="ui-view" style="opacity: 1;">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<strong>Muqaddimah</strong>
							<small>Data</small>
							<button class="btn btn-primary" type="submit" style="position: absolute; right: 12px;">Tambah Do'a</button>		
						</div>
						<div class="card-body">
							<div class="row">
								<table class="table table-stripped table-bordered" id="datatable" style="max-width: 100%;">
									<thead>
								        <tr>
								          <th>No</th>
								          <th>Do'a</th>
								          <th>Dibaca</th>
								          <th>Aksi</th>
								        </tr>
							      </thead>
							      <tbody>
						      		<?php
						      		foreach ($data as $doa) 
					      			{ ?>
						      			<tr>
						      				<td><?php echo $doa['nomor']; ?></td>
						      				<td></td>
						      			</tr>
					      	 <?php 	}
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