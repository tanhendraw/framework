<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$setting['websiteTitle'] or ''}}</title>
	<meta name="description" content="{!! $setting['mainMetaDesc'] !!}" />
	<meta name="keywords" content="{!! $setting['mainMetaKeywords'] !!}" />

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link href="{{ asset('foundation/css/app.css') }}" rel="stylesheet">
	<link href='{{ asset('default/fonts/roboto.css') }}' rel='stylesheet' type='text/css'>
	<link href='{{ asset('default/fonts/lato.css') }}' rel='stylesheet' type='text/css'>
	<link href='{{ asset('foundation-icon/foundation-icons.css') }}' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
	@yield('style')
</head>
<body>
{{-- NAV --}}

@yield('content')
<div class="text-center tws"><a href="http://tanwebsitestudio.com" target="_blank">Tan Website Studio</a></div>

{{--<script src="{{ asset('/slick/slick/slick.min.js') }}"></script>--}}
<script src="{{ asset('foundation/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('foundation/bower_components/foundation-sites/dist/js/foundation.min.js') }}"></script>
<script src="{{ asset('foundation/js/app.js') }}"></script>
@yield('script')
{{-- // <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> --}}


</body>
</html>
