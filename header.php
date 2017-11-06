<!DOCTYPE html>
<html>
<head>
	<title>Agilor IBMS App</title>
	<!-- jquery && jquery ui -->
	<script src="jQuery/jquery-3.2.1.js"></script>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap-3.3.7/dist/js/bootstrap.js"></script>

	<!-- bootstrap-select -->
	<link rel="stylesheet" type="text/css" href="bootstrap-select-1.12.4/dist/css/bootstrap-select.css">
	<script src="bootstrap-select-1.12.4/dist/js/bootstrap-select.js"></script>
	<script src="bootstrap-select-1.12.4/dist/js/i18n/defaults-zh_CN.js"></script>

	<!-- bootstrap-slider -->
	<link href="bootstrap-slider-master/dist/css/bootstrap-slider.css" rel="stylesheet" >
	<script src="bootstrap-slider-master/dist/bootstrap-slider.js"></script>

	<!-- bootstrap-switch -->
	<link href="bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
	<script src="bootstrap-switch-master/dist/js/bootstrap-switch.js"></script>

	<style type="text/css">
		body {
			background-color: #BABABA;
		}

		.gongweibtnOn{
			width: 64px;
			height: 20px;
			padding: 0 0 0 0;
			background-color: #DEB887;
		}
		.gongweibtnOff{
			width: 64px;
			height: 20px;
			padding: 0 0 0 0;
			background-color: #808080;
		}

		.ligOn {
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/LIG-ON.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: white;
			font-size: 12px;
			padding-top: 34px;
		}
		.ligOff {
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/LIG-OFF.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: #D2B48C;
			font-size: 12px;
			padding-top: 34px;
		}
		.curOn{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/CUR-ON.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: white;
			font-size: 12px;
			padding-top: 34px;
		}
		.curOff{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/CUR-OFF.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: #D2B48C;
			font-size: 12px;
			padding-top: 34px;
		}
		.fcuOn{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/FCU-ON.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: white;
			font-size: 11px;
			padding-top: 34px;
		}
		.fcuOff{
			width: 50px;
			height: 50px;
			padding: 0 0 0 0;
			background-image: url('image/FCU-OFF.png');
			border:0px;
			background-size: 100% 100%;
			background-color: rgba(255, 255, 255, 0);

			color: #D2B48C;
			font-size: 11px;
			padding-top: 34px;
		}

		#mySlider {
			width: 80%;
		}
		#mySlider .slider-selection {
			background: #81bfde;
		}
		#mySlider .slider-track-high {
			background: #BABABA;
		}

		.lighting-container-7 {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
			margin-left: 50px;
			margin-top: 50px;
		}
		.curtain-container-7 {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.f7-environment-container {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.f7-fcu-container {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}

		.lighting-container-8 {
			background-image: url('image/8.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
			margin-left: 50px;
		}
		.curtain-container-8 {
			background-image: url('image/8.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.f8-environment-container {
			background-image: url('image/8.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.f8-fcu-container {
			background-image: url('image/8.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
		}
		.bootstrap-switch-container{ white-space:nowrap; }
	</style>

	<script type="text/javascript">
		function detectZoom (){
			var ratio = 0,
			screen = window.screen,
			ua = navigator.userAgent.toLowerCase();
			if (window.devicePixelRatio !== undefined) {
				ratio = window.devicePixelRatio;
			}
			else if (~ua.indexOf('msie')) {
				if (screen.deviceXDPI && screen.logicalXDPI) {
					ratio = screen.deviceXDPI / screen.logicalXDPI;
				}
			}
			else if (window.outerWidth !== undefined && window.innerWidth !== undefined) {
				ratio = window.outerWidth / window.innerWidth;
			}
			if (ratio){
				ratio = Math.round(ratio * 100);
			}
			return ratio;
		};

		window.onresize = function () {
			if(detectZoom() != 100){
				alert("检测到缩放：\n您好，对页面进行缩放浏览，会造成部分控件的布局异常！缩放后请刷新页面。");
			}
		}
	</script>
</head>
<body>

<div>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<strong>
				<a class="navbar-brand" href="http://www.biad.com.cn/" target="_blank"> B I A D </a>
			</strong>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="f7Lig"><a href="f7lighting.php">F7-灯光</a></li>
				<li class="f8Lig"><a href="f8lighting.php">F8-灯光</a></li>
				<li class="f7Cur"><a href="f7curtain.php">F7-窗帘</a></li>
				<li class="f8Cur"><a href="f8curtain.php">F8-窗帘</a></li>
				<li class="f7Env"><a href="f7environment.php">F7-环境</a></li>
				<li class="f8Env"><a href="f8environment.php">F8-环境</a></li>
				<li class="f7Fcu"><a href="f7fcu.php">F7-空调</a></li>
				<li class="f8Fcu"><a href="#f8fcu.php">F8-空调</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">其他 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="systemConf.php">系统配置</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="输入内容">
				</div>
				<button type="submit" class="btn btn-default">搜索</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">退出</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">YwY <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Your Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Account Assistant</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
</div>

<div id="myAlertTop" class="container alert alert-danger alert-dismissible hidden" role="alert">
	<button type="button" class="close" onclick="$('#myAlertTop').addClass('hidden');" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>错误!</strong> 设置值异常，请<a href=""> 联系维护人员 </a>.
</div>
