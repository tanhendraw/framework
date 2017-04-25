<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "Admin Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/additional/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/additional/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/dist/css/skins/skin-green.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
    {{--<![endif]-->--}}
</head>
<body class="skin-green" style="background-color:#222D32;">
<div class="wrapper">
    {{--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });--}}
    {{--    </script>--}}

    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    @include('admin/header')

    @include('admin/sidebar')

    <div class="content-wrapper" style="overflow: auto;">
        <section class="content-header">
            <h1 style="text-transform:capitalize;">
                {{ $active }}
                <small>{{ $page_description or null }}</small>
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>--}}
                {{--<li class="active">Here</li>--}}
            {{--</ol>--}}
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>

    @include('admin/footer')

</div>

<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.0.min.js") }}"></script>
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/validator.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/fastclick/fastclick.js") }}" type="text/javascript"></script>
<script>
    $(window).on('load',function(){
        $('.content-wrapper').css('min-height','100vh');
    });
</script>
@yield('script')
</body>
</html>