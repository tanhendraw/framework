
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>{{ $page_title or "Admin Dashboard" }}</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.2 -->
	<link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
	<!-- Font Awesome Icons -->
	<link href="{{ asset("/bower_components/admin-lte/dist/additional/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="{{ asset("/bower_components/admin-lte/dist/additional/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("/bower_components/admin-lte/plugins/iCheck/square/green.css")}}" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	<link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-green.css")}}" rel="stylesheet" type="text/css" />
	<link href="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />

	<![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<!-- /.login-logo -->
	<div class="login-box-body">
		<div class="login-logo">
			<a href="#">Welcome</a>
		</div>
		<div class="">
			{{--@if (count($errors) > 0)--}}
				{{--<div class="alert alert-danger">--}}
					{{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
					{{--<ul>--}}
						{{--@foreach ($errors->all() as $error)--}}
							{{--<li>{{ $error }}</li>--}}
						{{--@endforeach--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--@endif--}}
		</div>
		<form action="{{ url('/auth/login') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group has-feedback">
				<input type="email" name="email" required class="form-control" placeholder="Email" value="{{ old('email') }}">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" required class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<button type="submit" class="btn btn-success btn-block">Sign In</button>
				</div>
				<div class="col-xs-12 text-center">
					<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
				</div>
			</div>
		</form>

	</div>
</div>

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.0.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset("/bower_components/admin-lte/plugins/iCheck/icheck.min.js") }}"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
			increaseArea: '20%' // optional
		});
	});
</script>
</body>
</html>