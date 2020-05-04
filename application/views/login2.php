<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>
	<form method="post" action="<?= base_url('web_narkoba/login'); ?>">

		<table>
			<tr>
				<?= $this->session->flashdata('message'); ?>
			</tr>
			<tr>
				<td>Username</td>
				<td><input value="<?=set_value('username') ?>" type="text" name="username"><?= form_error('username','<small style="color: red; padding-left: 3;">','</small>') ?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"><?= form_error('password','<small style="color: red; padding-left: 3;">','</small>') ?></td>
			</tr>
			<tr>
				<td><button type="submit" name="register" value="register">REGISTER</button></td>
			</tr>
		</table>
		
	</form>
</body>
</html>