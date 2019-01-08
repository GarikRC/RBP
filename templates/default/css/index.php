<?php require('rbp.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="copyright" content="Создание сайтов - DigitalNark Labs, www.boo-ga.ga, 2018">
  <meta name="author" content="DigitalNark Labs, http://www.boo-ga.ga/, создание сайтов">
  <meta name="yandex-verification" content="522be944f6f3c7f0" />

  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="robots" content="index, follow">
  <title><?php echo $ttitle; ?> | <?php echo $sitename; ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta itemprop="url" content="http://www.rushoztorg.ru/">
  <meta itemprop="name" content="Русхозторг - Дорожно-cтроительная техника, продажа, обслуживание, лизинг, трэйд-ин | Русхозторг">
  <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Bungee|Cuprum|Graduate|Kelly+Slab|Patua+One|Pompiere|Squada+One|Staatliches|Stint+Ultra+Condensed|Unica+One|ZCOOL+QingKe+HuangYou" rel="stylesheet">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- fotorama.css & fotorama.js. -->
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
  <!-- custom rba css -->
  <link  href="css/rbp.css" rel="stylesheet">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/mobmenu.css">
  <link rel="stylesheet" href="css/stylez.css">
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(46877343, "init", { id:46877343, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46877343" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  <!-- GOOGLE --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-110537188-1"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);}	gtag('js', new Date());	gtag('config', 'UA-110537188-1');  </script><!--[if lt IE 9]>  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>  <![endif]-->  <!-- /GOOGLE -->
</head>
<body>
<header class="fixed-header">
  <div class="head-control header-top">
    <div class="head-wrap">
      <div class="head-contact">
        <div class="head-contact-list">
		
		
		
		
          <div class="head-contact-item"><i class="fa fa-phone"></i> Тел: +7 (925) 386-63-07</div>
          <div class="head-contact-item"><i class="fa fa-envelope"></i> Email: mail@rushoztorg.ru</div>
        </div>
      </div>

      <div class="head-social">
        <div class="head-social-list">
          <div class="head-social-item facebook">
            <a href="#"><i class="fa fa-facebook"></i></a>
          </div>
          <div class="head-social-item twitter">
            <a href="#"><i class="fa fa-twitter"></i></a>
          </div>
          <div class="head-social-item google-plus">
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <div class="head-social-item youtube">
            <a href="#"><i class="fa fa-youtube-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
	<h1 class="logo">РУСХОЗ<span>ТОРГ</span></h1>
  
  <nav class="site-nav">
      <ul>
        <li><a href=""><i class="fa fa-home site-nav--icon"></i>Home</a></li> 
        <li><a href=""><i class="fa fa-info site-nav--icon"></i>About</a></li>
        <li><a href=""><i class="fa fa-pencil site-nav--icon"></i>Blog</a></li>
        <li><a href=""><i class="fa fa-usd site-nav--icon"></i>Pricing</a></li>
        <li><a href=""><i class="fa fa-envelope site-nav--icon"></i>Contact</a></li>
      </ul> 
  </nav>
  
  <div class="menu-toggle">
    <div class="hamburger"></div>
  </div>
  
    </div>
  
</header>
<div class="main-content">
<div class="container" style="margin-top:50px;">
	<div class="row">
			   <h1><?php echo $ptitle; ?></h1>
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 item-photo">
                      <div class="fotorama" data-nav="thumbs" data-autoplay="true">
						<?php 
							foreach($imgz as $imgurl){
							echo '<img src="'.$imgurl.'" title="'.$ptitle.'" alt="'.$ptitle.'" />';
						  }
						?>
					  </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12" style="border:0px solid gray">
				
				
					
				
				
                    <h6 class="title-price" style="margin-top:0px; text-align:right;"><small>ЦЕНА</small></h6>
                    <h3 style="margin-top:5px; backgroung-color:#fc0; color:#333; text-align:right;"><?php echo $pprice ?> руб.</h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="" ><small>Основные характеристики</small></h6>                    
                        <?php echo '<small>'.$base_data->outertext.'</small>';						// выводим на экран основные хар-ки	 ?>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <a class="button hollow" href="#product-tab-spec">Все характеристики</a>
                    </div>   
                                 
                    <div class="section" style="padding-bottom:20px;">
                        <?php echo $orderbutton; ?>
						<?php echo $askbutton; ?>
                        <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Добавить в закладки</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
	  <h2>Характеристики <?php echo $ptitle; ?></h2>
	  <p><h5 style="color:#333;">Производитель <a href="#"><?php echo $pbrand; ?></a></h5></p>

	  <ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Спецификация</a></li>
		<li><a data-toggle="tab" href="#menu1">Вопросы</a></li>
		<li><a data-toggle="tab" href="#menu2">Еще...</a></li>
	  </ul>

	  <div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		  <h3>Спецификация</h3>
		  <p>Полные харарактиристикики</p>
		  <div class="padding-top-2 tabs-panel is-active" id="product-tab-spec" data-tab-content="" style="" role="tabpanel" aria-labelledby="product-tab-spec-label" aria-hidden="false">
		  		<?php echo $full_data->outertext;	// выводим на экран полные хар-ки ?>
		  </div>
		</div>
		<div id="menu1" class="tab-pane fade">
		  <h3>Вопросы</h3>
		  <p>Часто задаваемые вопросы покупателей</p>
		</div>
		<div id="menu2" class="tab-pane fade">
		  <h3>Еще...</h3>
		  <p>Что-то еще</p>
		</div>

	  </div>
                </div>		
            </div>

<div class="row">
<h2>Возможности</h2>

	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
		<div class="our-services-wrapper mb-60">
<div class="services-inner">
	<div class="our-services-img">
	<img src="img/icon/Agricultural-activities.png" width="68px" alt="">
	</div>
	<div class="our-services-text">
		<h4>Лизинг</h4>
		<p>Купить <?php echo $pprice ?> в лизинг</p>
	</div>
</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
		<div class="our-services-wrapper mb-60">
<div class="services-inner">
	<div class="our-services-img">
	<img src="img/icon/Agricultural-activities.png" width="68px" alt="">
	</div>
	<div class="our-services-text">
		<h4>Сервис</h4>
		<p>Сервисное обслуживание</p>
	</div>
</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
		<div class="our-services-wrapper mb-60">
<div class="services-inner">
	<div class="our-services-img">
	<img src="img/icon/Agricultural-activities.png" width="68px" alt="">
	</div>
	<div class="our-services-text">
		<h4>Гарантия</h4>
		<p>Гарантийное обслуживание</p>
	</div>
</div>
		</div>
	</div>

</div>

</div>
</div>


<!-- Modal -->
  <div class="modal fade" id="orderModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Заказать</h4>
        </div>
        <div class="modal-body">
          <p><? echo $pproduct ?></p>
          <p>Цена: <? echo $pprice ?> руб.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 
<!-- Modal -->
  <div class="modal fade" id="askModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Задать вопрос</h4>
        </div>
        <div class="modal-body">
          <p>Вопрос по: <? echo $pproduct ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal --> 
  <div class="modal fade" id="priceModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Уточнить цену</h4>
        </div>
        <div class="modal-body">
          <p><? echo $pproduct ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- Modal -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>

  

    <script  src="js/mobmenu.js"></script>
</body>
</html>