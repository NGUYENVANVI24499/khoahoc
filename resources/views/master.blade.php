<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>
	

NCKH
</title>
<base href="{{asset('')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="source/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="source/css/style.css" rel='stylesheet' type='text/css' />
<link href="source/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="source/css/font.css" type="text/css"/>
<link href="source/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="source/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="source/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="source/js/jquery2.0.3.min.js"></script>
<script src="source/js/raphael-min.js"></script>
<script src="source/js/morris.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->

@if(Auth::check())
    <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="">
                <span class="username">{{Auth::user()->name}}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('đăng xuất') }}
                            </x-dropdown-link>
                        </form>
                </li>
            </ul>
        </li>
        

@else



@endif


        
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Lịch công tác</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('tuancongtac')}}">Tuần công tác</a></li>
						<li><a href="{{URL::to('loaicongtac')}}">Loại công tác </a></li>
                        <li><a href="{{URL::to('danhsachgv')}}">danh sách giảng viên </a></li>
                        <li><a href="{{URL::to('diemdanh')}}">điểm danh</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Tổng kết</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('tongket')}}">Tổng kết</a></li>
						<li><a href="{{URL::to('lichcongtac')}}">Lịch công tác</a></li>
                        <li><a href="grids.html">điểm danh</a></li>
                    </ul>
                </li>
               
            </ul>   
           </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		
		@yield('admin_content')
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>Nghiên cứu khoa học | Design by <a href="http://w3layouts.com">nhóm 14</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="source/js/bootstrap.js"></script>
<script src="source/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="source/js/scripts.js"></script>
<script src="source/js/jquery.slimscroll.js"></script>
<script src="source/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="source/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

<!-- calendar -->
	<script type="text/javascript" src="source/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
