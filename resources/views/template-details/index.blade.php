<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Detailed Single Post</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    @include('template-details.partials._style')


</head>

<body>
    

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<a href="index.html"><div id="logo"><img src="{{asset('img/logo-burst.svg')}}" alt="logo burstfly" height="38" width="90"></div></a>
        <div id="main_tip_search">
			<form>
				<input type="text" name="search" id="tip_search_input" list="search" autocomplete=off required>
			</form>
		</div>
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object">

            <div id="wrapper-bouton-icon">
            	<div id="bouton-ai"><img src="{{asset('img/icon-ai.svg')}}" alt="illustrator" title="Illustrator" height="28" width="28"></div>
            	<div id="bouton-psd"><img src="{{asset('img/icon-psd.svg')}}" alt="photoshop" title="Photoshop" height="28" width="28"></div>
            	<div id="bouton-theme"><img src="{{asset('img/icon-themes.svg')}}" alt="theme" title="Theme" height="28" width="28"></div>
            	<div id="bouton-font"><img src="{{asset('img/icon-font.svg')}}" alt="font" title="Font" height="28" width="28"></div>
            	<div id="bouton-photo"><img src="{{asset('img/icon-photo.svg')}}" alt="photo" title="Photo" height="28" width="28"></div>
            	<div id="bouton-premium"><img src="{{asset('img/icon-premium.svg')}}" alt="premium" title="Premium" height="28" width="28"></div>
			</div>
    	</div>
    </div>

<!-- FILTER -->

	<div id="main-container-menu" class="object">
    	<div class="container-menu">

            <div id="main-cross">
            	<div id="cross-menu"></div>
            </div>

            <div id="main-small-logo">
            	<div class="small-logo"></div>
            </div>

            <div id="main-premium-ressource">
                <div class="premium-ressource"><a href="#">Premium Resources</a></div>
            </div>

            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>

            <div id="main-psd">
                <div class="psd"><a href="#">PSD Goodies</a></div>
            </div>

            <div id="main-ai">
                <div class="ai"><a href="#">Illustrator freebies</a></div>
            </div>

            <div id="main-font">
                <div class="font"><a href="#">Free fonts</a></div>
            </div>

            <div id="main-photo">
                <div class="photo"><a href="#">Free stock photos</a></div>
            </div>

        </div>
    </div>


@yield('content')



<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-animate-css-rotate-scale.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/fastclick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flip.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-colors-min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.animate-shadow-min.js')}}"></script>

	<script>



$(document).ready(function() {
		$.localScroll();
		$(".cache").delay(1000).fadeOut(500);

		$("#wrapper-header").delay(1500).animate({opacity:'1',width:'100%'},500);
		$("#wrapper-navbar").delay(2000).animate({opacity:'1',height:'60px'},500);

		$("#main-container-image").delay(2500).animate({opacity:'1'},500);

	});

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
	timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);

  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);
});

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);
});

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});


/* BOUTON PREV */

$(document).on('touchstart mouseover', '#logo', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#logo").stop().animate({scale:'1.1',opacity:'0.5'},300);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#logo', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {

			   $("#logo").stop().animate({scale:'1',opacity:'1'},300);

            event.handled = true;
        } else {
            return false;
        }
});



/*FORMULAIRE NEWSLETTER*/

$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
	});
});

</script>


</body>


</html>