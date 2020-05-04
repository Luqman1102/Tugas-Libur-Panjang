
        <div class="isi">

            <form method="post" action="<?= base_url('web_narkoba/login'); ?>">
        <?= $this->session->flashdata('message'); ?>
    <div class="form-group">
	    <label for="username">Username</label>
	    <input autocomplete="off" autofocus="username" value="<?=set_value('username') ?>" type="text" class="form-control" id="username" name="username" placeholder="Username">
	    <?= form_error('username','<small style="color: red; padding-left: 3;">','</small>') ?>
	</div>
    <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
	    <?= form_error('password','<small style="color: red; padding-left: 3;">','</small>') ?>
	</div>
	  
	  <button type="submit" class="btn btn-primary">LOGIN</button>
	</form>   

        </div>
        