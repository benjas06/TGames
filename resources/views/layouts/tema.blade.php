<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TGames</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{asset('skins/default.css')}}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('ico/123.png')}}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
    @include ('layouts.menu')
    @yield('content')
	<footer>
			<div class="container">
				<div class="row">
					<div class="span3">
						<div class="widget">
							<h5 class="widgetheading">Buscar paginas</h5>
							<ul class="link-list">
								<li><a href="#">Sobre nosostros</a></li>
								<li><a href="#">Nuestros servicios</a></li>
								<li><a href="#">Conoce nuestro equipo</a></li>
							</ul>
						</div>
					</div>
					{{-- <div class="span3">
						<div class="widget">
							<h5 class="widgetheading">Important stuff</h5>
							<ul class="link-list">
								<li><a href="#">Press release</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Career center</a></li>
								<li><a href="#">Flattern forum</a></li>
							</ul>
						</div>
					</div> --}}
					{{-- <div class="span3">
						<div class="widget">
							<h5 class="widgetheading">Flickr photostream</h5>
							<div class="flickr_badge">
								<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
							</div>
							<div class="clear">
							</div>
						</div>
					</div> --}}
					<div class="span3">
						<div class="widget">
							<h5 class="widgetheading">Contactate con nosotros</h5>
							<address>
								<strong>TGames</strong><br>
								 Vinuesa 112 esquina nuestra señora de las mercedes, Hacienda santa fe<br>
								 Tlajomulco de zuñiga, Jalisco
					 		</address>
							<p>
								<i class="icon-phone"></i> (33) 1597-1287 - 3334598499 <br>
								<i class="icon-envelope-alt"></i> benjaminne15@hotmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="span6">
							<div class="copyright">
								<p>
									<span>&copy; TGames - Todos los derechos reservados.</span>
								</p>
								<div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
                </div>
							</div>
						</div>
						<div class="span6">
							<ul class="social-network">
								<li><a href="https://www.facebook.com/" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
								<li><a href="https://twitter.com/?lang=es" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
								<li><a href="https://mx.linkedin.com/" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
								<li><a href="https://www.pinterest.com.mx/" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
								{{-- <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jcarousel/jquery.jcarousel.min.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('js/portfolio/jquery.quicksand.js')}}"></script>
<script src="{{asset('js/portfolio/setting.js')}}"></script>
<script src="{{asset('js/tweet/jquery.tweet.js')}}"></script>
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
<script src="{{asset('js/jquery.slitslider.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>

	<!-- Template Custom JavaScript File -->
	<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
