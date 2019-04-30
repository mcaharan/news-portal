<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('news-portal.SITENAME') }}</title>

     <link href="{{ asset('public/asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('public/asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
     <link href="{{ asset('public/asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
     <link href="{{ asset('public/asset/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
     <link href="{{ asset('public/asset/build/css/custom.min.css') }}" rel="stylesheet">
     <link href="{{ asset('public/asset/fileupload/uploadfile.css') }}" rel="stylesheet">

    <link href="{{ asset('public/asset/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/vendors/dist/pnotify.nonblock.css') }}" rel="stylesheet">

</head>
<body>

<body class="nav-md">
    <div class="container body">
            @yield('portal-content')
    </div>

 <script src="{{ asset('public/asset/vendors/jquery/dist/jquery.min.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/fastclick/lib/fastclick.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/nprogress/nprogress.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/google-code-prettify/src/prettify.js') }}"></script>
 <script src="{{ asset('public/asset/build/js/custom.min.js') }}"></script>

 <script src="{{ asset('public/asset/vendors/pnotify/dist/pnotify.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
 <script src="{{ asset('public/asset/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>

 {{-- validation --}}
 <script src="{{ asset('public/asset/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
 <script src="{{ asset('public/asset/tinymce/js/tinymce/tinymce.min.js') }}"></script>
 <script src="{{ asset('public/asset/fileupload/jquery.uploadfile.min.js') }}"></script>
@yield('portal-script')

@yield('portal-script2')


<script type="text/javascript">
$(document).ready(function()
{
    $('.ui-pnotify').remove(); 
});
</script>
</body>
</html>