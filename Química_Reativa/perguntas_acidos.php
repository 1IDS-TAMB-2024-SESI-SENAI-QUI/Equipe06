<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Química Reativa</title>
		<link rel="icon" type="image/png" href="./icone.png">
		<link rel="stylesheet" type="text/css" href="perguntas_acidos.css">
	</head>
	<body>
	<header id="parte_cima">
	<div id="nome">
		<img src="./nome.png">
	</div>
	<div id="icone">
		<img src="./icone.png" id="icone">
	</div>
	<div id="titulo">
		<p>Funcões Inorgânicas</p>
	</div>
	</header>
	<nav id="nav_baixo">
		<ul>
			<li><a href="./quimica_reativa.html">Ácidos</a></li>
			<li><a href="./quimica_bases.html">Bases</a></li>
			<li><a href="./quimica_sais.html">Sais</a></li>
			<!--<li>
				<a href="">Exercícios ▼<a/>
				<ul class="dropdown">
					<li>Ácidos</li>
					<li>Sais</li>
					<li>Bases</li>
				</ul>
			</li>-->
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Exercícios ▼</a>
				<div class="dropdown-content">
					<a href="http://localhost/Qu%C3%ADmica_Reativa/perguntas_acidos.php">Ácidos</a>
					<a href="http://localhost/Qu%C3%ADmica_Reativa/perguntas_sais.php">Sais</a>
					<a href="http://localhost/Química_Reativa/perguntas_bases.php">Bases</a>
				</div>
			</li>
		</ul>
	</nav>
	<main>
		<div class="links_pagina">
		<p><a href="#pergunta1">Pergunta 1 </a> > <a href="#pergunta2">Pergunta 2</a> > <a href="#pergunta3">Pergunta 3</a> > <a href="#pergunta4">Pergunta 4</a></p>
		</div>
		<div class="introducao">
			<h1>Exercícios sobre Ácidos</h1>
			<br/>
			<p class="texto_introducao">Separamos nessa página alguns exercícios sobre Ácidos. </p>
		</div>
		<div class="conteudo">
		<br/>
		<br/>
			<form id="pergunta1" action="#pergunta1" method="POST">
			<label id="pergunta">01) Qual das opções abaixo melhor define um ácido?</label><br><br>
			<input type="radio" name="resposta1" id="resposta1" value="A" required>
			<label>Substância que libera íons H<sup>+</sup> em solução aquosa</label><br>
			<input type="radio" name="resposta1" id="resposta1" value="B" required>
			<label>Substância que libera íons OH<sup>-</sup> em solução aquosa</label><br>
			<input type="radio" name="resposta1" id="resposta1" value="C" required>
			<label>Substância que não reage com metais</label><br>
			<input type="radio" name="resposta1" id="resposta1" value="D" required>
			<label>Substância que possui sabor doce</label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
			<div class="respostas">
			<?php
				if(isset($_POST["resposta1"])){
					echo "<br><br><br>";
					if ($_POST["resposta1"] == "A") {
						echo "<h3>Resposta correta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta2" action="#pergunta2" method="POST">
			<label id="pergunta">02) Qual das substâncias abaixo é um exemplo de ácido?</label><br><br>
			<input type="radio" name="resposta2" id="resposta2" value="A" required>
			<label>HCl  </label><br>
			<input type="radio" name="resposta2" id="resposta2" value="B" required>
			<label> NaOH </label><br>
			<input type="radio" name="resposta2" id="resposta2" value="C" required>
			<label> H₂O  </label><br>
			<input type="radio" name="resposta2" id="resposta2" value="D" required>
			<label>O₂  </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta2"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta2"] == "A") {
						echo "<h3>Resposta correta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta3" action="#pergunta3" method="POST">
			<label id="pergunta">03) Os ácidos possuem algumas características típicas. Qual das opções abaixo representa corretamente uma dessas características?</label><br><br>
			<input type="radio" name="resposta3" id="resposta3" value="A" required>
			<label>Os ácidos têm sabor amargo.  </label><br>
			<input type="radio" name="resposta3" id="resposta3" value="B" required>
			<label> Os ácidos são substâncias que mudam o tornassol azul para vermelho.  </label><br>
			<input type="radio" name="resposta3" id="resposta3" value="C" required>
			<label> Os ácidos não conduzem eletricidade.   </label><br>
			<input type="radio" name="resposta3" id="resposta3" value="D" required>
			<label>Os ácidos aumentam o pH da solução.   </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta3"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta3"] == "B") {
						echo "<h3>Resposta correta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta4" action="#pergunta4" method="POST">
			<label id="pergunta">04) Qual ácido é comumente utilizado em sucos cítricos e alimentos? </label><br><br>
			<input type="radio" name="resposta4" id="resposta4" value="A" required>
			<label> Ácido sulfúrico (H₂SO₄)   </label><br>
			<input type="radio" name="resposta4" id="resposta4" value="B" required>
			<label> Ácido nítrico (HNO₃)   </label><br>
			<input type="radio" name="resposta4" id="resposta4" value="C" required>
			<label> Ácido cítrico   </label><br>
			<input type="radio" name="resposta4" id="resposta4" value="D" required>
			<label> O Ácido fosfórico (H₃PO₄)    </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta4"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta4"] == "C") {
						echo "<h3>Resposta correta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<br/>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
			
		</form>
		<br/>
		<br/>
		</div>
		<br/>
		<br/>
	</main>
	<footer>
		<br/>
		<div id="conteudo_principal">
			<div id="sobreoprojeto">
				<h2>Sobre o projeto</h2>
				<br/>
				<p>Criamos o site Química Reativa como um projeto demonstrativo sobre Desenvolvimento de Sistemas do 2° Ensino Médio. Esse trabalho foi feito inteiramente para apresentação aos devidos professores na Integração SESI / SENAI, mais especificamente referente à área de Química.</p>
			</div>
			<div id="contatos">
				<h2>Contatos</h2>
				<br/>
				<ul>
					<li>Alexandre Eduardo da Silva Velucci</li>
					<br/>
					<li>Amanda Vieira Costa</li>
					<br/>					
					<li>Ana Lívia Silva</li>
					<br/>	
					<li>Gabriel Georgetti Faria</li>
					<br/>
				</ul>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<div id="footer_baixo">
			<p>Esse site possui somente intuito educativo.</p>
		</div>
		<br/>
	</footer>
	</body>
</html>