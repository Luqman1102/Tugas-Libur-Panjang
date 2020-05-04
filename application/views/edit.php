<div class="content-wrapper">
	<section class="content">
		<?php foreach($data_siswa as $ssw) : ?>
			<form method="post" action="<?= base_url().'data_siswa/update'; ?>" >
			<div class="form-group">
        		<label>NIS</label>
        		<input type="hidden" name="id" class="form-control" value="<?= $ssw->id?>">
        		<input type="text" name="nis" class="form-control" value="<?= $ssw->nis?>">
        	</div>
        	<div class="form-group">
        		<label>NAMA SISWA</label>
        		<input type="text" name="nama_siswa" class="form-control" value="<?= $ssw->nama_siswa?>">
        	</div>
        	<div class="form-group">
        		<label>JENIS KELAMIN</label>
        		<input type="text" name="jenis_kelamin" class="form-control" value="<?= $ssw->jenis_kelamin?>">
        	</div>
        	<div class="form-group">
        		<label>JURUSAN</label>
        		<input type="text" name="jurusan" class="form-control" value="<?= $ssw->jurusan?>">
        	</div>
        	<div class="form-group">
        		<label>SEKOLAH</label>
        		<input type="text" name="sekolah" class="form-control" value="<?= $ssw->sekolah?>">
        	</div>
        	<div class="form-group">
        		<label>ALAMAT</label>
        		<input type="text" name="alamat" class="form-control" value="<?= $ssw->alamat?>">
        	</div>
        	<button type="submit" class="btn btn-primary">SIMPAN</button>
			</form>
		<?php endforeach; ?>
	</section>
</div>