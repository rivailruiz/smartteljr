


</div>



<!--Rodape-->

<div id="footer" style="background-image:url('<?=base_url('assets/img/rodape.jpg');?>');">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="container">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<h4><strong>Siga Smart<span style="color:#DD5724;">Tel</span></strong></h4>
						<ul class="list-inline" style="display: inline-flex;">
							<li><div class="fb-like" data-href="https://www.facebook.com/smartteljr/" data-width="50" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></li>
							<li><a href="https://www.instagram.com/smartteljr/" target="_blank"><img src="<?=base_url('assets/img/instagram.png')?>"></a></li>
							<li><a href="https://www.linkedin.com/in/smarttel-jr-consultoria-e-projetos-em-telecom-756587133/" target="_blank"><img src="<?=base_url('assets/img/linkedin.png')?>"></a></li>
						</ul>						
					</div>

					<div class="col-xs-12 col-lg-5">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-2 col-lg-6">
								<h4><strong>Quem Somos</strong></h4>												
								<p>Sobre</p>
								<p>História</p>
								<p>Missão,Visão e Valores</p>						
							</div>

							<div class="col-xs-12 col-sm-6 col-md-2 col-lg-6">
								<h4><strong>Serviços</strong></h4>
								<?php foreach($servicos as $servico):?>
		                   		<p><?=$servico['nome']?></p> 
		                  		<?php endforeach ?>
							</div>
						</div>						
					</div>
					
					
					

					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
						<h4><strong>Artigos</strong></h4>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
						<h4><strong>Membros</strong></h4>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-2 col-lg-4">
						<h4><strong>Contato</strong></h4>
						<hr>
						<address>
								Rua Passo da Pátria, 156 Bloco D – Sala 360A<br>
								São Domingos, 24210-253 Niterói, Brazil<br/>
						</address>
						<p>
							<button class="btn btn-default">Fale Conosco</button>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="subrodape">
				<div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 margem">
					<p>2017 © Copyright. Todos os direitos reservados.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 margem">
					<p>SmartTel Jr – Consultoria de Projetos em Telecom</p>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
