<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Química Reativa</title>
		<link rel="icon" type="image/png" href="./icone.png">
		<link rel="stylesheet" type="text/css" href="perguntas_bases.css">
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
		<p><a href="#pergunta5">Pergunta 1</a> > <a href="#pergunta6">Pergunta 2</a> > <a href="#pergunta7">Pergunta 3</a> > <a href="#pergunta8">Pergunta 4</a> </p>
		</div>
		<div class="introducao">
			<h1>Exercícios sobre Bases</h1>
			<br/>
			<p class="texto_introducao">Separamos nessa página alguns exercícios sobre Bases. </p>
		</div>
		<div class="conteudo">
			<div class="texto_conteudo">
			<form id="pergunta5" action="#pergunta5" method="POST">
			<label id="pergunta">01) Qual das opções abaixo melhor define uma base? </label><br><br>
			<input type="radio" name="resposta5" id="resposta5" value="A" required>
			<label> Substância que libera íons H⁺ em solução aquosa.    </label><br>
			<input type="radio" name="resposta5" id="resposta5" value="B" required>
			<label> Substância que libera íons OH⁻ em solução aquosa.    </label><br>
			<input type="radio" name="resposta5" id="resposta5" value="C" required>
			<label> Substância que não reage com ácidos.    </label><br>
			<input type="radio" name="resposta5" id="resposta5" value="D" required>
			<label> Substância que tem sabor doce)    </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta5"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta5"] == "B") {
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
		
		<form id="pergunta6" action="#pergunta6" method="POST">
			<label id="pergunta">02) Qual das substâncias abaixo é um exemplo de base?  </label><br><br>
			<input type="radio" name="resposta6" id="resposta6" value="A" required>
			<label> NaCl     </label><br>
			<input type="radio" name="resposta6" id="resposta6" value="B" required>
			<label> H₂SO₄    </label><br>
			<input type="radio" name="resposta6" id="resposta6" value="C" required>
			<label>  NaOH    </label><br>
			<input type="radio" name="resposta6" id="resposta6" value="D" required>
			<label> H₂O      </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta6"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta6"] == "C") {
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
		
		<form id="pergunta7" action="#pergunta7" method="POST">
			<label id="pergunta">03) Qual das características abaixo é típica de uma base? </label><br><br>
			<input type="radio" name="resposta7" id="resposta7" value="A" required>
			<label> As bases têm sabor azedo.     </label><br>
			<input type="radio" name="resposta7" id="resposta7" value="B" required>
			<label> As bases mudam o tornassol vermelho para azul.  </label><br>
			<input type="radio" name="resposta7" id="resposta7" value="C" required>
			<label> As bases não conduzem eletricidade.    </label><br>
			<input type="radio" name="resposta7" id="resposta7" value="D" required>
			<label>  As bases são sempre líquidas.       </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta7"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta7"] == "B") {
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
		
		<form id="pergunta8" action="#pergunta8" method="POST">
			<label id="pergunta">04) Qual das bases abaixo é comumente utilizada em produtos de limpeza?  </label><br><br>
			<input type="radio" name="resposta8" id="resposta8" value="A" required>
			<label> Ácido acético.     </label><br>
			<input type="radio" name="resposta8" id="resposta8" value="B" required>
			<label> Hidróxido de sódio.  </label><br>
			<input type="radio" name="resposta8" id="resposta8" value="C" required>
			<label>  Ácido cítrico.    </label><br>
			<input type="radio" name="resposta8" id="resposta8" value="D" required>
			<label>  Ácido clorídrico       </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta8"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta8"] == "B") {
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