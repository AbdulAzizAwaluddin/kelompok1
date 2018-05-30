<button type="button" class="btn btn-primary" id="btn-submit" 
data-toggle="modal" 
data-target="#insertModal">Tambah</button>

<div class="modal fade" id="insertModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Input Data</h3>
			</div>
			<div class="modal-body">
				<form method="post">
					<p>NPM :</p>
					<input type="text" name="npm">
					<p>Nama :</p>
					<input type="text" name="nama">
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit">
				</form>
				<button type="button" class="btn btn-primary" id="btn-primary" 
data-toggle="modal" 
data-target="#editModal" 
data-npm='<?=$value['npm']?>'
data-npm='<?=$value['npm']?>'
>Edit</button>

<div class="modal fade" id="editModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Input Data</h3>
			</div>
			<div class="modal-body">
				<form method="post">
					<p>NPM :</p>
					<input type="text" name="npm">
					<p>Nama :</p>
					<input type="text" name="nama">
				</div>
				<div class="modal-footer">
					<input type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>
</div>