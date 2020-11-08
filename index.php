<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soundify - слушайте звуки и улучшите концентрацию и фокусировку на задачах. Звуки и музыка для работы, учёбы, отдыха. Онлайн библиотека звуков.</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>
   	<link rel="icon" href="/img/logo.ico" type="image/x-icon">
  	<link rel="stylesheet" href="/css/Style.css">
</head>
<body>
	<script>
		$( () => {
	
	//On Scroll Functionality
	$(window).scroll( () => {
		var windowTop = $(window).scrollTop();
		windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
		windowTop > 100 ? $('ul').css('top','100px') : $('ul').css('top','135px');
	});
	
	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		},500);
	});
	
	//Smooth Scrolling Using Navigation Menu
	$('a[href*="#"]').on('click', function(e){
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		},500);
		e.preventDefault();
	});
	
	//Toggle Menu
	$('#menu-toggle').on('click', () => {
		$('#menu-toggle').toggleClass('closeMenu');
		$('ul').toggleClass('showMenu');
		
		$('li').on('click', () => {
			$('ul').removeClass('showMenu');
			$('#menu-toggle').removeClass('closeMenu');
		});
	});
	
});
	</script>
	<header>
  <nav>
    <div id="brand">
      <div id="logo"><img src="/img/logo.png" alt="Image description." />
</div>
      <div id="word-mark">Soundify</div>
    </div>
    <div id="menu">
      <div id="menu-toggle">
        <div id="menu-icon">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
      <ul>
        <li><a href="#about_section">Главное</a></li>
        <li><a href="#sounds">Попробовать</a></li>
        <li><a href="#about_sub">Наши преимущества</a></li>
        <li><a href="#registration">Регистрация</a></li>
      </ul>
    </div>
  </nav>
  <div id="hero-section">
    <h1 class="title">Soundify</h1>
     <h2 class="normal">Работа. Учёба. Отдых</h2>
    <div class="container">
  <a href="#about_section" class="btn">
  <svg width="277" height="62">
    <defs>
        <linearGradient id="grad1">
            <stop offset="0%" stop-color="#0362ff"/>
            <stop offset="100%" stop-color="#0e3e8d" />
        </linearGradient>
    </defs>
     <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
  </svg>
  <!--<span>Voir mes réalisations</span>-->
    <span>Подробнее</span>
</a>
  </div>
</header>
<section id="about_section" class="about_section">
  <h2 class="title">Soundify - бесплатный сервис, не имеющий аналогов.</h2>
  <h3 style="font-size: 25px;" >Слушайте и сочетайте различные звуки, постройте своё звуковое окружение<br> для продуктивной работы или отдыха.</h3>
  <h3  class="normal">У каждого человека в современном мире бывает желание оторваться от бешенного темпа жизни и просто расслабиться. <br>Используясь наш сервис мы рады предложить вам большую коллекцию качественных звуков,<br> которые помогут вам отвлечься от окружающего шума и суеты, повысить концентрацию или просто отдохнуть.</h3>
   <h3  class="normal">Слушайте где, когда и сколько угодно, у нас нет никаких ограничений.</h3>
  <p style="margin-top: 70px;">Опробовать можно ниже</p>
  <a href="#sounds"><div class="arrow-down">
    <span></span>
    <span></span>
    <span></span>
</div></a>
<div class="arrow-8"></div>
</section>
<section id="sounds" class="sounds">
  <div class="items">
  	<div style="background-image: url(/img/forest.jpg);" class="item forest">
  		<p class="info">Лес</p>
  		<div class="shadow"></div>
    <video src="/img/videos/forest.mp4"  preload="auto" loop="true" muted="muted"></video>
  	</div>
  	<div style="background-image: url(/img/campfire.jpg);" class="item campfire">
  			<p class="info">Костёр</p>
  		<div class="shadow"></div>
            <video src="/img/videos/campfire.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div class="item birds">
  		<p class="info">Птицы</p>
  		<div class="shadow"></div>
              <video src="/img/videos/birds.mp4"  preload="auto" autoplay="true" loop="true" muted="muted">
    </video>
  	</div>
  	<div style="background-image: url(/img/beach.svg);" class="item beach">
  		<p class="info">Пляж</p>
  		<div class="shadow"></div>
       <video src="/img/videos/beach.mp4"  preload="auto" autoplay="true" loop="true" muted="muted">
    </video>
  	</div>
  	<div  style="background-image: url(/img/rain.jpg);" class="item rain">
  		<p class="info">Дождь</p>
  		<div class="shadow"></div>
        <video src="/img/videos/rain.mp4"  preload="auto" autoplay="true" loop="true" muted="muted">
  	</div>
  	<div  style="background-image: url(/img/wind.jpg);"class="item wind">
  		<p class="info">Ветер</p>
  		<div class="shadow"></div>
       <video src="/img/videos/wind.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div style="background-image: url(/img/forest.jpg);" class="item train">
  		<p class="info">Поезд</p>
  		<div class="shadow"></div>
      <video src="/img/videos/train.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div class="item crickets">
  			<p class="info">Сверчки</p>
  		<div class="shadow"></div>
       <video src="/img/videos/sky.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div class="item thunder">
  		<p class="info">Гроза</p>
  		<div class="shadow"></div>
        <video src="/img/videos/thunder.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div class="item river">
  		<p class="info">Река</p>
  		<div class="shadow"></div>
       <video src="/img/videos/river.mp4"  preload="auto" autoplay="true" loop="true" muted="muted"></video>
  	</div>
  	<div  style="background-image: url(/img/rain.jpg);" class="item rain">
  		<p class="info">Дождь</p>
  		<div class="shadow"></div>
  	</div>
  	<div  style="background-image: url(/img/wind.jpg);"class="item wind">
  		<p class="info">Ветер</p>
  		<div class="shadow"></div>
  	</div>
  </div>
     <h3  class="normal">Это, лишь малая часть звуков.<br>Более подробно про возможности после регистрации, а так же про возможности платной подписки ниже</h3>
</section>
<section class="about_sub" id="about_sub">
  <h1 class="title">Наши преимущества</h1>
  <div class="items">
    <div class="item">
      <img class="jump"  src="/img/collection.png" alt="Наушники">
      <p>Большая коллекция звуков</p>
      <p class="description">В нашей коллекции находится более 30+ раличных звуков. Вы всегда сможете найти звук себе по вкусу.</p>
    </div>
    <div class="item">
      <img class="jump"  src="/img/headphones.png" alt="Наушники">
      <p>Лучшее качество звука</p>
      <p class="description">Мы предоставляем только звуки с наилучшим качеством звучания на рынке. Тем самым позволяя вам максимально погрузится в процесс.</p>
    </div>
    <div class="item">
      <img class="jump"  src="/img/fence.png" alt="Наушники">
      <p>Никаких ограничений</p>
      <p class="description">Используйте наш сервис сколько угодно и когда угодно. Мы не устанавливаем никаих ограничений по времени и частоте прослушивания.</p>
    </div>
    <div class="item">
      <img class="jump"  src="/img/free.png" alt="Наушники">
      <p>Бесплатное использование</p>
      <p class="description">Мы позволяем использовать большую часть возможностей сервиса сразу же после простой регистрации.</p>
    </div>
    <div class="item">
      <img class="jump" src="/img/coffee.png" alt="Наушники">
      <p>Цена подписки</p>
      <p class="description">При желании вы можете приобрести платную подписку. Благодаря которой вы откроете доступ к 20 новым звукам. Цена подписки всего 1$, что равно одной чашке кофе.</p>
    </div>
  </div>
</section>
<section class="registration" id="registration">
  <div id="heading"></div>
</section>
<script>
  $('video').get(0).pause();
  $('video').get(1).pause();
   $('video').get(2).pause();
    $('video').get(3).pause();
        $('video').get(4).pause();
          $('video').get(5).pause();
          $('video').get(6).pause();
           $('video').get(7).pause();
            $('video').get(8).pause();
            $('video').get(9).pause();
   var birds = new Audio('/sounds/birds.mp3'); 
   var beach = new Audio('/sounds/beach.mp3');
   var campfire = new Audio('/sounds/campfire.mp3'); 
    var rain = new Audio('/sounds/rain.mp3'); 
     var forest = new Audio('/sounds/forest.mp3'); 
        var wind = new Audio('/sounds/wind.mp3'); 
         var train = new Audio('/sounds/train.mp3');
           var crickets = new Audio('/sounds/crickets2.mp3');
            var thunder = new Audio('/sounds/thunder.mp3');
                   var river = new Audio('/sounds/river.mp3');
   birds.autoplay = true;
	$('.item').on('click',function () {
    var class_name=$(this).attr('class').split(' ')[1];
		if($(this).hasClass('active')) {
       if($(this).children('video').length) {
            $(this).children('video').get(0).pause();
          }
            (eval(class_name)).pause();
						$(this).switchClass( "active", "not_active", 1000, "easeInOutQuad" );
		}
		else {
            if($(this).children('video').length) {
                          $(this).children('video').get(0).play();  
            }
            var audio=eval(class_name);
            audio.currentTime = 0;
            audio.play();
						$(this).switchClass( "", "active", 1000, "easeInOutQuad" );
		}
	});
</script>
</body>
</html>