<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Smarttel Jr. Consultoria em Projetos de Telecomunicações</title>
  <link rel="shortcut icon" href="<?=base_url('assets/img/iconeGrande1.ico')?>" >
  <link rel="apple-touch-icon" href="<?=base_url('assets/img/iconeGrande1.ico')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">


  <!-- animate -->
  <link rel="stylesheet" href="<?=base_url('assets/css/animate.min.css')?>">

  <!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link href="<?=base_url('assets/css/mycss.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/css_home.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/css_sobre.css')?>" rel="stylesheet">
  

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

  <script src="<?=base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>  
  <script src="<?=base_url('assets/js/js_home.js')?>"></script>
  
  <script src="<?=base_url('assets/js/jquery.cycle2.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery.cycle2.carousel.min.js')?>"></script>




  <script src="<?=base_url('assets/js/wow.min.js')?>"></script>
  <script>
  new WOW().init();
  </script>
  

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
  <header>
  <!-- start navigation -->
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>
          <a class="navbar-brand mylogo" href="#"><img class="img-responsive" src="<?=base_url('assets/img/logo.png')?>" alt="Smarttel Consultoria em projetos de telecomunicações"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right"> <!--Menu Bar Adicionar coisas aqui-->
            <li class="active"><?= anchor('home/index','HOME')?></li>
            <li><?= anchor('sobre/main','QUEM SOMOS')?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVIÇOS <span class="caret"></span></a>
              <ul class="dropdown-menu"> 
                <?php foreach($servicos as $servico):?>
                  <li><a href="#"><?=$servico['nome']?></a></li>  
                <?php endforeach ?>                  
              </ul>
            </li>
            <li><a href="#apoio">ARTIGOS</a></li>
            <li><a href="#parceiros">MEMBROS</a></li>
            <li><a href="#contact">CONTATO</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end navigation -->
  </header>





