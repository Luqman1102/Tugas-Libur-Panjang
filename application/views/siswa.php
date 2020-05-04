<div class="content-wrapper">

	<section class="content-header">
      <h1>
        Data Siswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Siswa</button>
    	<table class="table">
		
		<tr>
			<th>NO.</th>
			<th>NIS</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>JURUSAN</th>
			<th>SEKOLAH</th>
			<th>ALAMAT</th>
      <th colspan="2">Sunting</th>
		</tr>

		<?php 
			$i =1;
			foreach ($data_siswa as $row ):
				?>
				<tr>
					<td><?=$i ?></td>
 					<td><?= $row->nis ?></td>
 					<td><?= $row->nama_siswa?></td>
 					<td><?= $row->jenis_kelamin ?></td>
 					<td><?= $row->jurusan ?></td>
 					<td><?= $row->sekolah ?></td>
 					<td><?= $row->alamat ?></td>
          <td><?= anchor('data_siswa/edit/'.$row->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
          <td onclick="return confirm('Anda Yakin?')"><?= anchor('data_siswa/hapus/'.$row->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
				</tr>
				<?php
				$i++;
			endforeach;
				?>
	</table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> FORM INPUT DATA SISWA</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url().'data_siswa/tambah'; ?>">

        	<div class="form-group">
        		<label>NIS</label>
        		<input type="text" name="nis" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>NAMA SISWA</label>
        		<input type="text" name="nama_siswa" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>JENIS KELAMIN</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">2</label>
            </div>
        	</div>
        	<div class="form-group">
        		<label>JURUSAN</label>
        		<select name="jurusan" class="form-control">
              <option value="">~ Pilih Jurusan ~</option>
              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
               <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
              <option value="Animasi">Animasi</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Akuntasi">Akuntasi</option>
              <option value="Broadcasting">Broadcasting</option>
            </select>
        	</div>
        	<div class="form-group">
        		<label>SEKOLAH</label>
        		<input type="text" name="sekolah" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>ALAMAT</label>
        		<input type="text" name="alamat" class="form-control">
        	</div>

        	<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
</div>

</div>