
        <div class="isi">

            <form method="post" action="<?= base_url('web_narkoba/registrasi'); ?>">
			<table>
				<tr>
					<td>Username</td>
					<td><input value="<?=set_value('username') ?>" type="text" name="username"><?= form_error('username','<small style="color: red; padding-left: 3;">','</small>') ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input value="<?=set_value('email') ?>" type="email" name="email"><?= form_error('email','<small style="color: red; padding-left: 3;">','</small>') ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"><?= form_error('password','<small style="color: red; padding-left: 3;">','</small>') ?></td>
				</tr>
				<tr>
					<td>Password2</td>
					<td><input type="password" name="password2"></td>
				</tr>
				<tr>
					<td><button type="submit" name="register" value="register">REGISTER</button></td>
				</tr>
			</table>
		</form>        

        </div>
        