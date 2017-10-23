
<!DOCTYPE html>
<html>
<head>
	@yield('css')
	<title>LERUfic Atans</title>
	<link rel="stylesheet" type="text/css" href=" {{URL::asset('css/semantic.min.css')}}">
	<style type="text/css">
		#particles-js {
		  position:fixed;
		  top:0;
		  right:0;
		  bottom:0;
		  left:0;
		  z-index: 1;
		}
		.logo {
		  position: relative;
		}

		body {
			background-color:#f1f1f1;
			background-image:url({{URL::asset('noise.png')}});
			background-repeat:repeat;
			background-position:top left;
			background-attachment:fixed;
			}
	</style>

</head>
<body>
	<div id="particles-js"></div>
	<div class="ui container" >
	    <div class="logo" style="text-align: center; padding-top:1.5%; ">
	      <img src="{{URL::asset('logo.png')}}">
	    </div>
	</div>
	<script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
  	<script src="{{URL::asset('js/semantic.min.js')}}" type="text/javascript"></script>
  	<script src="{{URL::asset('js/particles.min.js')}}" type="text/javascript"></script>
  	<script type="text/javascript">
		  particlesJS("particles-js", {
		  "particles": {
		    "number": {
		      "value": 75,
		      "density": {
		        "enable": false,
		        "value_area": 800
		      }
		    },
		    "color": {
		      "value": "#8e0000"
		    },
		    "shape": {
		      "type": "circle",
		      "stroke": {
		        "width": 0,
		        "color": "#000000"
		      },
		      "polygon": {
		        "nb_sides": 3
		      },
		      "image": {
		        "src": "img/github.svg",
		        "width": 100,
		        "height": 100
		      }
		    },
		    "opacity": {
		      "value": 0.5,
		      "random": false,
		      "anim": {
		        "enable": false,
		        "speed": 1,
		        "opacity_min": 0.1,
		        "sync": true
		      }
		    },
		    "size": {
		      "value": 3,
		      "random": false,
		      "anim": {
		        "enable": false,
		        "speed": 40,
		        "size_min": 0.1,
		        "sync": false
		      }
		    },
		    "line_linked": {
		      "enable": true,
		      "distance": 150,
		      "color": "#2f2d2d",
		      "opacity": 0.4,
		      "width": 1
		    },
		    "move": {
		      "enable": true,
		      "speed": 6,
		      "direction": "none",
		      "random": false,
		      "straight": false,
		      "out_mode": "out",
		      "bounce": false,
		      "attract": {
		        "enable": false,
		        "rotateX": 600,
		        "rotateY": 1200
		      }
		    }
		  },
		  "interactivity": {
		    "detect_on": "canvas",
		    "events": {
		      "onhover": {
		        "enable": true,
		        "mode": "grab"
		      },
		      "onclick": {
		        "enable": true,
		        "mode": "repulse"
		      },
		      "resize": true
		    },
		    "modes": {
		      "grab": {
		        "distance": 400,
		        "line_linked": {
		          "opacity": 1
		        }
		      },
		      "bubble": {
		        "distance": 400,
		        "size": 40,
		        "duration": 2,
		        "opacity": 8,
		        "speed": 3
		      },
		      "repulse": {
		        "distance": 200,
		        "duration": 0.4
		      },
		      "push": {
		        "particles_nb": 4
		      },
		      "remove": {
		        "particles_nb": 2
		      }
		    }
		  },
		  "retina_detect": true
		});
  	</script>
</body>
</html>