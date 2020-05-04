<div class="isi">
    <form method="post" action="<?= base_url('web_narkoba/registrasi'); ?>">
    <div class="form-group">
	    <label for="username">Username</label>
	    <input autocomplete="off" autofocus="username" value="<?=set_value('username') ?>" type="text" class="form-control" id="username" name="username" placeholder="Username">
	    <?= form_error('username','<small style="color: red; padding-left: 3;">','</small>') ?>
	</div>
    <div class="form-group">
	    <label for="email">Email</label>
	    <input autocomplete="off" value="<?=set_value('email') ?>" type="email" class="form-control" id="email" name="email"  placeholder="Email">
	    <?= form_error('email','<small style="color: red; padding-left: 3;">','</small>') ?>
	</div>

	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="password">Password</label>
	      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
	      <?= form_error('password','<small style="color: red; padding-left: 3;">','</small>') ?>
	  </div>

	  <div class="form-group col-md-6">
	      <label for="password2">Konfirmasi Password</label>
	      <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
	      <?= form_error('password2','<small style="color: red; padding-left: 3;">','</small>') ?>
	    </div>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Buat Akun</button>
	</form>
</div>

