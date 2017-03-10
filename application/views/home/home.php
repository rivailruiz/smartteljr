<?php


?>


<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides 1900x1080 images -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?=base_url('assets/img/slider/slider1.jpg');?>');"></div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('https://images.alphacoders.com/116/116973.jpg');"></div>
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://more-sky.com/data/out/9/IMG_359465.png');"></div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>



    <div id="service">
        <div class="container">            
            <h2 class="text-center subtitulo"><span class="inicioPalavra">Servi</span><span class="borda">ço</span><span class="inicioPalavra">s</span></h2>
            <p class="text-center subsubtitulo">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<div class="row vertical-center-row">
                    <?php foreach ($servicos as $servico) : 
                    $foto = base64_encode($servico['foto']);
                    $img_template = '<img id=imagem src="data:image/jpg;base64,'. $foto . '" alt="Primeira Foto" width="100" height="100"/>';                           
                    $img_CelTemplate = '<img id=imagem src="data:image/jpg;base64,'. $foto . '" alt="Primeira Foto" width="50" height="50"/>';                           

                    ?>
                        <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4 hidden-xs">
                            <div>                                
                                <div class="card wow fadeIn" data-wow-delay="<?=($servico['duration']);?>s">                                  
                                  <?= $img_template;?>                                  
                                  <hr>

                                  <div id="conteudo">
                                    <h4><b><?= html_escape($servico['nome'])?></b></h4> 
                                    <p><?= character_limiter(html_escape($servico['descricao']), 100)?></p> 
                                  </div>
                                </div>                            
                            </div>
                        </div>  

                        <div class="col-xs-6 hidden-md hidden-lg hidden-sm">
                            

                        <div id='table' class="wow fadeIn" data-wow-delay="0.4s">   
                            <table class="table">                                                              
                                <tr style="vertical-align: middle;">                                        
                                    <td><?= $img_CelTemplate;?></td>
                                    <td><?= html_escape($servico['nome'])?></td>                                                                                                               
                                </tr>                                
                            </table> 
                            <span><?= character_limiter(html_escape($servico['descricao']), 30)?></span>
                        </div>
    
                            
                        </div>                   
                    <?php endforeach ?>
                    
                </div> 
            </div>           
        </div>
    </div>


    <!-- start divider -->
    <div id="divider" style="background-image:url('<?=base_url('assets/img/partners.jpg');?>');">
        <div class="container text-center">                                      
            <h2 class="text-center wow bounce"><span class="inicioPalavra">Parcei</span><span class="borda">ro</span><span class="inicioPalavra">s</span></h2>                        
            <h3 class="wow fadeIn" data-wow-delay="0.6s"><mark>1º</mark> Empresa Júnior deste ramo no Rio de Janeiro</h3>
            <p class="wow fadeInUp" data-wow-delay="0.7s">A SmartTel Jr. nasceu da vontade de conectar cada vez mais pessoas, tornar a vida melhor através da tecnologia e associar o conhecimento técnico acadêmico ao mercado de trabalho.</p>                                  
            <button class="btn btn-default">Fale Conosco</button>
        </div>
    </div>
    <!-- end divider -->



    <!-- start parceiros -->
    <div id="portfolio" class="container-fluid text-center">        
        <div class="container-fluid">    
           <ul class="cycle-slideshow" data-cycle-fx="carousel" data-cycle-slides="li" data-cycle-timeout="2000" data-cycle-carousel-fluid="true">
            <?php foreach ($parceiros as $parceiro) : 
            $foto = base64_encode($parceiro['foto']);
            $img_template = '<img id=imagem src="data:image/jpg;base64,'. $foto . '" alt="Primeira Foto" width="300" height="255" class="image"/>';                           
            $img_CelTemplate = '<img id=imagem src="data:image/jpg;base64,'. $foto . '" alt="Primeira Foto" width="50" height="50" class="image"/>';                           

            ?>           
            
            <li>
                <div class="algo">
                    <?= $img_template;?>
                    <div class="overlay">
                        <div class="text text-center">                    
                            <a href="<?= html_escape($parceiro['site'])?>" target="_blank"><img src="<?=base_url('assets/img/site.png')?>"></a>
                            <a href="<?= html_escape($parceiro['facebook'])?>" target="_blank"><img src="<?=base_url('assets/img/facebook.png')?>"></a>
                            <h4><?= html_escape($parceiro['nome'])?></h4>
                            <span><?= html_escape($parceiro['descricao'])?></span>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach ?>
            </ul>
        </div>
    </div>


   



<script type="text/javascript">    
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })     
/*
    $('.card').click(function(event) {        
        $('.card').toggleClass('animated shake');
    });*/
</script>


