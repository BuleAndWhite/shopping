<!DOCTYPE html>
<html>
<head>
<title>ChinaZ</title>
<link rel="stylesheet" href="{{asset('/static/home/css/style.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="_token" content="{{ csrf_token() }}"/> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="App Loction Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('/static/home/js/jQuery-1.11.0.js')}}"></script>
<!--webfonts-->

<!--//webfonts-->
</head>
<body>
	<h1>App Location Form</h1>
		<div class="app-location">
			<h2>Welcome to Locaticus</h2>
			<div class="line"><span></span></div>
			<div class="location"><img src="{{asset('/static/home/images/location.png')}}" class="img-responsive" alt="" /></div>
			<form  action="login"  method="post" id="login-form">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="text" name="username"  value="phone" >
				<input type="password" name="password"  value="password" >
				<div class="submit"><input type="submit"  value="Sign in" ></div>
				<div class="clear"></div>
				<div class="new">
					<h3><a href="#">Forgot password ?</a></h3>
					<h4><a href="#">New here ? Sign Up</a></h4>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>
<script type="text/javascript">
      $(function(){
     //        $form = $('#login-form');
	    //      $form.submit(function () {
	    //         var usename=$('[name="username"]').val()
	    //         var pwd=$('[name="password"]').val()
	    //         $.ajax({
					// type: 'POST',
					// url: '/login/login',
					// data: {name:usename,password:pwd},
					// dataType: 'json',
					// headers: {
					// 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					// },
					// success: function(data){
					// console.log(data.status);
					// }
					// });

	    //         return false
	    //       })
        })
</script>