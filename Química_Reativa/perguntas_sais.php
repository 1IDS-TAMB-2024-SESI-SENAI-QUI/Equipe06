<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Química Reativa</title>
		<link rel="icon" type="image/png" href="./icone.png">
		<link rel="stylesheet" type="text/css" href="perguntas_sais.css">
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
		<p><a href="#pergunta9">Pergunta 1</a> > <a href="#pergunta10">Pergunta 2</a> > <a href="#pergunta11">Pergunta 3</a> > <a href="#pergunta13">Pergunta 4</a></p>
		</div>
		<div class="introducao">
			<h1>Exercícios sobre Sais</h1>
			<br/>
			<p class="texto_introducao">Separamos nessa página alguns exercícios sobre Sais.</p>
		</div>
		<div class="conteudo">
		<br/>
		<br/>
		<form id="pergunta9" action="#pergunta9" method="POST">
			<label id="pergunta">01) Qual das opções abaixo melhor define um sal?   </label><br><br>
			<input type="radio" name="resposta9" id="resposta9" value="A" required>
			<label> Substância que resulta da reação entre um ácido e uma base.      </label><br>
			<input type="radio" name="resposta9" id="resposta9" value="B" required>
			<label> Substância que libera íons H⁺ em solução aquosa.   </label><br>
			<input type="radio" name="resposta9" id="resposta9" value="C" required>
			<label>  Substância que é sempre líquida.    </label><br>
			<input type="radio" name="resposta9" id="resposta9" value="D" required>
			<label> Substância que tem sabor doce     </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta9"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta9"] == "A") {
						echo "<h3>Resposta correta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta10" action="#pergunta10" method="POST">
			<label id="pergunta">02) Qual das substâncias abaixo é um exemplo de sal?   </label><br><br>
			<input type="radio" name="resposta10" id="resposta10" value="A" required>
			<label>  HCl       </label><br>
			<input type="radio" name="resposta10" id="resposta10" value="B" required>
			<label> NaCl   </label><br>
			<input type="radio" name="resposta10" id="resposta10" value="C" required>
			<label> NaOH    </label><br>
			<input type="radio" name="resposta10" id="resposta10" value="D" required>
			<label> H₂O    </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta10"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta10"] == "B") {
						echo "<h3>Resposta correta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta11" action="#pergunta11" method="POST">
			<label id="pergunta">03) Qual dos seguintes pares de reagentes pode ser utilizado para formar um sal?    </label><br><br>
			<input type="radio" name="resposta11" id="resposta11" value="A" required>
			<label>  Ácido clorídrico e água       </label><br>
			<input type="radio" name="resposta11" id="resposta11" value="B" required>
			<label> Ácido acético e etanol    </label><br>
			<input type="radio" name="resposta11" id="resposta11" value="C" required>
			<label> Ácido sulfúrico e hidróxido de sódio    </label><br>
			<input type="radio" name="resposta11" id="resposta11" value="D" required>
			<label>	Água e glicose      </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta11"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta11"] == "C") {
						echo "<h3>Resposta correta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/fd/03/60/fd036081423f0c75355c994dba695793.jpg' width='5%'>";
					}
				}
			?>
			</div>
		</form>
		
		<form id="pergunta13" action="#pergunta13" method="POST">
			<label id="pergunta">04) Qual dos sais abaixo é comumente utilizado como tempero na comida? </label><br><br>
			<input type="radio" name="resposta13" id="resposta13" value="A" required>
			<label> NaCl (cloreto de sódio)        </label><br>
			<input type="radio" name="resposta13" id="resposta13" value="B" required>
			<label>CaCO₃ (carbonato de cálcio)    </label><br>
			<input type="radio" name="resposta13" id="resposta13" value="C" required>
			<label>  MgSO₄ (sulfato de magnésio)     </label><br>
			<input type="radio" name="resposta13" id="resposta13" value="D" required>
			<label>	KCl (cloreto de potássio)       </label><br><br>
			<input type="submit" name="btn" id="btn" value="Jogar!">
		
			<div class="respostas">
			<?php
				if(isset($_POST["resposta13"])){
					echo "<br><br><br>";
					
					if ($_POST["resposta13"] == "A") {
						echo "<h3>Resposta correta!</h3>";
						echo "<img src='https://i.pinimg.com/564x/da/18/8c/da188ccb78f1017e9645542bb5e52d6b.jpg' width='5%'>";
					}
					else {
						echo "<h3>Resposta incorreta!</h3>";
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