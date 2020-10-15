<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>	
	<div class="content">
		<div class="form-login">
			<form>
				<h4 class="text-center">Login</h4>
				<div class="form-group">
					<label for="exampleInputEmail1">Endereço de e-mail</label>
					<input type="email" class="form-control" id="example" aria-describedby="emailHelp" placeholder="">
					<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
						</div>
					</div>
					<div class="col-md-6 text-right">
						<button type="submit" class="btn btn-primary">Entrar</button>						
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-md-12 text-center"><a href="#" class="text-dark"><u>Faça seu cadastro.</u></a></div>
			</div>
		</div>
	</div>
</body>
</html>