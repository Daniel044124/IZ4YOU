<?php
	include('../php/rank.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/perfil.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../Img/Logo1.jpg">
</head>
<body class="cor-pg">
				<nav class="navbar navbar-expand-lg navbar-light cor-nav">
				  <a class="navbar-brand" href="index.php">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="Perfil.php">Perfil<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="Rank.php">Ranking</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Duvidas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="lanc_duvida.php">Lançar Duvida</a>
				          <a class="dropdown-item" href="duv_lancadas.php">Duvidas Lancadas</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="Cadastro.php">Cadastro</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="login.php">Entre</a></button>
				    </form>
				  </div>
				</nav>
<div>
		<form class="" method="post">
			<div class="form-row">
					<div class="col">
					<label for="cursos"></label>
						<select id="cursos" name="curso"> 
                         <?php 
                        	$meucurso = $busc["CursoID"];
                            while($linha = mysqli_fetch_assoc($ins)){
                            	$c_p = $linha["CursoID"];
                            	if($meucurso == $c_p){
                        ?>
                            <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>
                            <div>
                            	<p class="name-help">Por favor informe seu Curso.</p>
                        	</div>
                        	<?php
                        	}else{
                        	?>  
                        	 <option class="name">
                                <?php echo utf8_encode($linha["Nome"]) ?>
                            </option>                   
                        	<?php 
                                }
                            }
                         ?>
                     </select>
			<input type="submit" class="submit" value="Ver Rank">
			</div>
			</div>
		</form>
		<table class="table">
		<?php
			include('../php/busc_rank.php');
			$bus = mysqli_fetch_assoc($ins_m);
			?>
               <div class="row">
                <table class="table table-bordered table-striped table-hover">
                <thead class="bg-dark btn-secundary">
                <th><?php echo utf8_encode($bus["n"]) ?></th>
                <th><?php echo utf8_encode($bus["p"]) ?></th>
                </thead>
                </table>
                </div>   
    </table>
	</div>
</body>
</html>