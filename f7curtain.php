<?php session_start(); ?>
<?php include_once("common/common.php"); ?>

<?php
$post_username = "";
if(isset($_SESSION["inputUsername"])){
    $post_username = $_SESSION["inputUsername"];
} else if(isset($_COOKIE["inputUsername"]) and isset($_COOKIE["inputPassword"])) {
    $post_username = $_COOKIE["inputUsername"];
    $auto_login_result = RemoteUserLoginAuthentication($_COOKIE["inputUsername"], $_COOKIE["inputPassword"]);
    if($auto_login_result == LOGIN_SUCCESS) {
        // Set Session
        $_SESSION["inputUsername"] = $post_username;
    } else {
        // Cookie outtime
        header("location:index.php?req_url=".$_SERVER['REQUEST_URI']);
    }
} else {
    // Login Again
    header("location:index.php?req_url=".$_SERVER['REQUEST_URI']);
}
?>

<?php include('header.php');?>
<script type="text/javascript">
	$('.f7Cur').addClass('active');
</script>

<head>
    <title>Curtain</title>
    <style>
		body {
			background-color: #BABABA;
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
		.curtain-container-7 {
			background-image: url('image/7.png');
			background-size: 100%;
			width: 1220px;
			height: 620px;
			position: relative;
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
    </style>
</head>

<center>
<div style="width: 90%; height: 100%; overflow:auto;">
	<div class="curtain-container-7">

		<!-- 窗帘 -->
		<button class="curOff" style="position: absolute; left: 5px; top: 80px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_4')">东-4</button>
		<button class="curOff" style="position: absolute; left: 5px; top: 160px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_5')">东-5</button>
		<button class="curOff" style="position: absolute; left: 5px; top: 245px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_6')">东-6</button>
		<button class="curOff" style="position: absolute; left: 5px; top: 332px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_7')">东-7</button>
		<button class="curOff" style="position: absolute; left: 5px; top: 420px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_8')">东-8</button>
		<button class="curOff" style="position: absolute; left: 5px; top: 500px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_9')">东-9</button>

		<button class="curOff" style="position: absolute; left: 45px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_10')">东-10</button>
		<button class="curOff" style="position: absolute; left: 135px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_11')">东-11</button>
		<button class="curOff" style="position: absolute; left: 225px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_12')">东-12</button>

		<button class="curOff" style="position: absolute; left: 330px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_SUOZHANGSHI_1')">所长室1</button>
		<button class="curOff" style="position: absolute; left: 435px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_HUIYISHI_1')">会议室1</button>

		<button class="curOff" style="position: absolute; left: 540px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XIUXIANSHI_2')">休闲室2</button>
		<button class="curOff" style="position: absolute; left: 640px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XIUXIANSHI_1')">休闲室1</button>

		<button class="curOff" style="position: absolute; left: 735px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_HUIYISHI_2')">会议室2</button>
		<button class="curOff" style="position: absolute; left: 835px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_SUOZHANGSHI_2')">所长室2</button>
		<button class="curOff" style="position: absolute; left: 940px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_12')">西-12</button>
		<button class="curOff" style="position: absolute; left: 1020px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_11')">西-11</button>
		<button class="curOff" style="position: absolute; left: 1100px; top: 560px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_10')">西-10</button>

		<button class="curOff" style="position: absolute; left: 1165px; top: 80px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_4')">西-4</button>
		<button class="curOff" style="position: absolute; left: 1165px; top: 160px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_5')">西-5</button>
		<button class="curOff" style="position: absolute; left: 1165px; top: 245px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_6')">西-6</button>
		<button class="curOff" style="position: absolute; left: 1165px; top: 332px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_7')">西-7</button>
		<button class="curOff" style="position: absolute; left: 1165px; top: 420px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_8')">西-8</button>
		<button class="curOff" style="position: absolute; left: 1165px; top: 500px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_9')">西-9</button>

		<button class="curOff" style="position: absolute; left: 45px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_3')">东-3</button>
		<button class="curOff" style="position: absolute; left: 135px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_2')">东-2</button>
		<button class="curOff" style="position: absolute; left: 225px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_DONG_1')">东-1</button>

		<button class="curOff" style="position: absolute; left: 336px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_KUAIJISHI')">会计室</button>
		<button class="curOff" style="position: absolute; left: 438px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_YUANZHANGSHI_1')">院长室1</button>

		<button class="curOff" style="position: absolute; left: 532px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_YUANZHANGSHI_2')">院长室2</button>
		<button class="curOff" style="position: absolute; left: 636px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_YUANZHANGSHI_3')">院长室3</button>

		<button class="curOff" style="position: absolute; left: 732px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_YUANZHANGSHI_4')">院长室4</button>
		<button class="curOff" style="position: absolute; left: 832px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_BANGONGSHI')">办公室</button>
		<button class="curOff" style="position: absolute; left: 940px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_1')">西-1</button>
		<button class="curOff" style="position: absolute; left: 1020px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_2')">西-2</button>
		<button class="curOff" style="position: absolute; left: 1100px; top: 10px;" data-toggle="modal" data-target="#curtainControlView" onclick="$('#curtainControlViewLabelId').html('CUR_F7_XI_3')">西-3</button>

	</div>
</div>
</center>

<?php include('view/curtain.php');?>

<?php include('footer.php');?>
