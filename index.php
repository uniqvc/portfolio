<!DOCTYPE html>
<html lang="pt-br">
<?php include 'includes/head.php'; ?>

<body class="header-white">
	<div class="header container-padding" >
		<a data-scrollto href="#main" class="header-logo">
			<svg viewBox="0 0 369 369" enable-background="new 0 0 369 369">
				<path d="M214.3,20.7V3c0-1.7-1.3-3-3-3h-84.2c-1.7,0-3,1.3-3,3v16.9c0,1.7,1.3,3,3,3c9.5,0.2,17.6,1.5,24.7,3.5
				c1.6,0.4,2.9,2.2,2.9,3.9v239.9c0,35.7-18.1,64.7-52.5,64.7c-34.5,0-52.5-29-52.5-64.7V3c0-1.7-1.3-3-3-3H3C1.3,0,0,1.3,0,3v268.2
				c0.5,54,46.2,97.8,102.2,97.8c23.5,0,35.1-7.7,52.4-20.6V366c0,1.7,1.3,3,3,3h84.2c1.7,0,3-1.3,3-3v-16.9c0-1.7-1.3-3-3-3
				c-9.4-0.2-17.5-1.5-24.5-3.4c-1.6-0.4-2.9-2.2-2.9-3.9v-240c0-35.7,18.1-64.7,52.5-64.7c34.5,0,52.5,29,52.5,64.7V366
				c0,1.7,1.3,3,3,3H366c1.7,0,3-1.3,3-3c0-29.6,0-268.9,0-268.9C368,43.4,322.6,0,266.8,0C243.3,0,231.6,7.7,214.3,20.7z"/>
			</svg>
		</a>
		<div class="menu-hamburger" type="button" onclick="document.body.classList.toggle('menu-opened')">
			<div class="menu-hamburger-line"></div>
			<div class="menu-hamburger-line"></div>
		</div>
		<nav class="menu">
			<div class="menu-inner">
				<ul class="menu-links list-unstyled">
					<li class="menu-links-item"><a data-scrollto href="#uniq">A Uniq</a></li>
					<li class="menu-links-item"><a data-scrollto href="#nossosServicos">Nossos serviços</a></li>
					<li class="menu-links-item"><a data-scrollto href="#cases">Cases</a></li>
					<li class="menu-links-item"><a data-scrollto href="#contato">Contato</a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<main id="main" class="main main-home container-padding" data-header-white>
		<div class="main-home-container">
			<video class="main-video" src="dist/videos/home.mp4" autoplay="autoplay" loop></video>
			<div class="main-title">
				<h1 class="text-inverse text-serif">Be Uniq</h1>
				<p class="main-title-description text-sans-serif">Faça o que você ama</p>
			</div>
		</div>
	</main>

	<section id="uniq" class="section-default section-quem-somos container-padding">
		<div class="row">
			<div class="col-sm-8">
				<p class="quem-somos-text">Somos uma agência digital, especializada em trazer soluções criativas para os nossos clientes com o objetivo de atingir suas metas e objetivos superando suas expectativas. Podemos ajudar através de consultoria, visão estratégica, web design, desenvolvimento, marketing digital e aplicações web.</p>
				<p class="quem-somos-text">
					 Nosso compromisso com a excelência em tudo o que fazemos é um dos atributos para tornar cada projeto único. Nós adoraríamos ouvir sobre seus desafios e explicar as possibilidades. Podemos também tomar uma bela xícara de café então porque não nos ligar ou <a data-scrollto href="#contato" class="link-underlined">enviar uma mensagem?</a>
				</p>
			</div>
		</div>
	</section>

	<section class="section-default section-equipe container-padding">
		<h2 class="h2 text-uppercase">A Equipe</h2>
		<div class="row">
			<div class="col-sm-4 col-md-4 col-lg-3 equipe-item">
				<img src="dist/images/profile.jpg" alt="Rick Sahara">
				<h3 class="h3 text-serif">Ricki Sahara</h3>
				<p class="text-large">Aventureiro por natureza, valoriza a simplicidade, mas não o simplismo. Interesse por áreas relacionadas à Interação humano-computador e Filosofia.</p>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-3 equipe-item">
				<img src="dist/images/profile.jpg" alt="Rick Sahara">
				<h3 class="h3 text-serif">Ricki Sahara</h3>
				<p class="text-large">Aventureiro por natureza, valoriza a simplicidade, mas não o simplismo. Interesse por áreas relacionadas à Interação humano-computador e Filosofia.</p>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-3 equipe-item">
				<img src="dist/images/profile.jpg" alt="Rick Sahara">
				<h3 class="h3 text-serif">Ricki Sahara</h3>
				<p class="text-large">Aventureiro por natureza, valoriza a simplicidade, mas não o simplismo. Interesse por áreas relacionadas à Interação humano-computador e Filosofia.</p>
			</div>
		</div>
	</section>

	<section id="nossosServicos" class="section-default section-servicos container-padding">
		<h2 class="h2 text-uppercase">Serviços</h2>
		<div class="row">
			<div class="servicos-item col-sm-6 col-md-3">
				<h3 class="h3 text-serif">Website</h3>
				<ul class="list-unstyled text-large">
					<li>Desenvolvimento</li>
					<li>Design responsivo</li>
					<li>Desenv. Front-end</li>
					<li>Desenv. Back-end</li>
				</ul>
			</div>
			<div class="servicos-item col-sm-6 col-md-3">
				<h3 class="h3 text-serif">Marketing</h3>
				<ul class="list-unstyled text-large">
					<li>Marketing Digital</li>
					<li>Mídias sociais</li>
					<li>Inbound marketing</li>
					<li>Analytics</li>
				</ul>
			</div>
			<div class="servicos-item col-sm-6 col-md-3">
				<h3 class="h3 text-serif">Aplicativo</h3>
				<ul class="list-unstyled text-large">
					<li>Desenvolvimento</li>
					<li>Design de Interface</li>
					<li>Progressive Web Apps</li>
				</ul>
			</div>
			<div class="servicos-item col-sm-6 col-md-3">
				<h3 class="h3 text-serif">UX Design</h3>
				<ul class="list-unstyled text-large">
					<li>Pesquisa com usuários</li>
					<li>Wireframe e protótipo</li>
					<li>Fluxo de navegação</li>
					<li>Teste de usabilidade</li>
				</ul>
			</div>
		</div>

	</section>

	<section id="cases" class="section-default section-cases container-padding home-cases">
		<h2 class="h2 text-uppercase">Cases</h2>
		<ul class="list-unstyled">
			<li>
				<h4>
					<strong>.01<br>KEI</strong>
					Website
				</h4>
				<a href="http://www.keiarte.com.br/#/" target="_blank">
					<svg viewBox="0 0 136 136" enable-background="new 0 0 136 136">
						<polygon fill="#FFFFFF" points="68.5,136 67.5,136 67.5,68.5 0,68.5 0,67.5 67.5,67.5 67.5,0 68.5,0 68.5,67.5 136,67.5 136,68.5 68.5,68.5"/>
					</svg>
					<span></span>
					<img src="dist/images/case-espaco-kei.jpg" alt="Espaço Kei">
				</a>
			</li>
			<li>
				<h4>
					<strong>.02<br>Carol Monteiro</strong>
					Website
				</h4>
				<a href="http://carolmonteirofotografias.com.br/" target="_blank">
					<svg viewBox="0 0 136 136" enable-background="new 0 0 136 136" xml:space="preserve">
						<path stroke="#FFFFFF" stroke-miterlimit="10" d="M68,0v136 M136,68H0"/>
					</svg>
					<span></span>
					<img src="dist/images/case-carol-monteiro.jpg" alt="Carol Monteiro">
				</a>
			</li>
			<li>
				<h4>
					<strong>.03<br>Viel</strong>
					Website
				</h4>
				<a href="http://vielodontologia.com.br/" target="_blank">
					<svg viewBox="0 0 136 136" enable-background="new 0 0 136 136" xml:space="preserve">
						<path stroke="#FFFFFF" stroke-miterlimit="10" d="M68,0v136 M136,68H0"/>
					</svg>
					<span></span>
					<img src="dist/images/case-viel.jpg" alt="Viel Odontologia">
				</a>
			</li>
			<li>
				<h4>
					<strong>.04<br>FILMECON</strong>
					Hotsite
				</h4>
				<a href="http://filmecon.com.br/" target="_blank">
					<svg viewBox="0 0 136 136" enable-background="new 0 0 136 136" xml:space="preserve">
						<path stroke="#FFFFFF" stroke-miterlimit="10" d="M68,0v136 M136,68H0"/>
					</svg>
					<span></span>
					<img src="dist/images/case-filmecon.jpg" alt="Filmecon">
				</a>
			</li>
		</ul>
	</section>

	<footer id="contato" class="footer container-padding" data-header-white>
		<h2 class="h3 text-inverse text-serif">Contato</h2>
		<div class="row">
			<div class="footer-telefone col-sm-4">
				<h3 class="h2 text-inverse text-uppercase">Telefone</h3>
				<p class="footer-phone text-inverse"><a class="link-tel" href="tel:11991193047">11 99119-3047</a> - Ricki</p>
				<p class="footer-phone text-inverse"><a class="link-tel" href="tel:11994077776">11 994077776</a> - Erick</p>
				<p class="footer-phone text-inverse"><a class="link-tel" href="tel:11947635258">11 94763-5258</a> - Fernando</p>
			</div>
			<div class="footer-mensagem col-sm-6">
				<h3 class="h2 text-inverse text-uppercase">Deixe um mensagem</h3>
				<form id="formContato" name="formContato" class="form-contato" action="#" method="post">
					<div class="form-group"> 
						<label for="email" class="sr-only">E-mail</label> 
						<input type="email" class="form-control form-control input-lg form-control-inverse no-focus" id="email" placeholder="E-mail" required> 
					</div>
					<div class="form-group"> 
						<label for="msg" class="sr-only">Mensagem</label>
						<textarea name="" id="msg" cols="30" rows="10" class="form-control form-control-inverse input-lg no-focus" placeholder="Digite sua mensagem..." required></textarea>
					</div>
					<div class="form-group"> 
						<button class="btn btn-inverse btn-lg" type="submit">Enviar mensagem</button>
					</div>
				</form>
			</div>
		</div>
	</footer>

	<script src="dist/js/main.js"></script>
</body>
</html>
