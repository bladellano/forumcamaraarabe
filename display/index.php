
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="micromodal.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<!-- Modal -->
	<?php require('modal/area-exposicao.php'); ?>
	<?php require('modal/auditorio.php'); ?>
	<?php require('modal/patrocinadores.php'); ?>
	<?php require('modal/programacao.php'); ?>

	<!-- MOBILE -->
	<div class="wrap-control-image d-md-none d-lg-none" >
		<img class="img-fluid" src="WIYM_CA_FORUM_HALL_REV.05_1080x1920_BR.jpg" alt="IMAGE">
		<div class="content-on-top-image">
			<div class="wrap-grid">

				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#patrocinadores"><!-- PAT -->&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#patrocinadores"><!-- PAT -->&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#patrocinadores"><!-- PAT -->&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>

				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>

				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#area-de-exposicao"><!-- EXPO -->&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#area-de-exposicao"><!-- EXPO -->&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#auditorio"><!-- AUD -->&nbsp;</div>
				<div class="cell-mobile btn-cell" data-toggle="modal" data-target="#auditorio"><!-- AUD -->&nbsp;</div>

				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>

				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile btn-exposicao" data-toggle="modal" data-target="#programacao"><!-- PROG -->&nbsp;</div>
				<div class="cell-mobile btn-exposicao" data-toggle="modal" data-target="#programacao"><!-- PROG -->&nbsp;</div>
				<div class="cell-mobile btn-exposicao" data-toggle="modal" data-target="#programacao"><!-- PROG -->&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>

				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>
				<div class="cell-mobile">&nbsp;</div>

			</div>
		</div>
	</div>

	<!-- DESKTOP -->
	<div class="wrap-control-image d-none d-sm-block" >
		<img class="img-fluid" src="WIYM_CA_FORUM_HALL_REV.05_1920x1080_BR.jpg" alt="IMAGE">

		<div class="content-on-top-image">
			<div class="wrap-grid">
				<div class="cell btn-cell" data-toggle="modal" data-target="#area-de-exposicao"><!-- AREA DE EXPOSIÇÃO -->&nbsp;</div>
				<div class="cell btn-cell" data-toggle="modal" data-target="#area-de-exposicao"><!-- AREA DE EXPOSIÇÃO -->&nbsp;</div>
				<div class="cell">&nbsp;</div>
				<div class="cell btn-cell" data-toggle="modal" data-target="#auditorio"><!-- AUDITÓRIO -->&nbsp;</div>
				<div class="cell btn-cell" data-toggle="modal" data-target="#auditorio"><!-- AUDITÓRIO -->&nbsp;</div>

				<div class="cell">&nbsp;</div>
				<div class="cell btn-cell" data-toggle="modal" data-target="#patrocinadores"><!-- PATROCINADORES -->&nbsp;</div>
				<div class="cell">&nbsp;</div>
				<div class="cell btn-cell" data-toggle="modal" data-target="#programacao"><!-- PROGRAMAÇÃO -->&nbsp;</div>
				<div class="cell">&nbsp;</div>

				<div class="cell">&nbsp;</div>
				<div class="cell">&nbsp;</div>
				<div class="cell">&nbsp;</div>
				<div class="cell">&nbsp;</div>
				<div class="cell">&nbsp;</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="script.js"></script>

	</body>
	</html>

