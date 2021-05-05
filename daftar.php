<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">	
	<title>Signup</title>	
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<div class="wrapper">
		<div class="title">
			Daftar Akun</div>
		<form action="login.php" method="post">
			<div class="field">
				<input type="text" name="nama" required>		
				<label>Nama Lengkap</label>
			</div>
			<div class="field">
				<input type="email" name="email" required>
				<label>Email</label>
			</div>
			<div class="field">
				<input type="password" name="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required>
				<label>Password</label>
			</div>
			<div class="field">
				<input type="password" name="password2" required>
				<label>Ulangi Password</label>
			</div>
			<div class="content">
				<div class="checkbox">
					<input type="checkbox" id="remember-me" name="akses" value="anggota" required>
					<label for="remember-me">Anggota</label>
				</div>
			</div>
			<div class="field">
				<input type="submit" value="Daftar">
			</div>
			<div class="login-link">		
				Sudah punya akun? <a href="login.php">Login</a></div>
		</form>
	</div>
</body>

</html>		