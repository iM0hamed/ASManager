{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 2019-02-03--}}
 {{--* Time: 17:07--}}
 {{--*/--}}
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>{{ isset($page_title) ? $page_title.' :: '.config('web_config.project_name').' Dashboard' : config('web_config.project_name').' Dashboard' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="{{ isset($page_description) ? $page_description : config('web_config.project_description') }}" name="description" />
<meta content="{{ isset($page_author) ? $page_author : config('web_config.project_author') }}" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset(config('web_config.theme_name')) }}/assets/images/favicon.ico">

@yield('before_styles')
@stack('before_styles')

<!-- Toastr css -->
<link href="{{ asset(config('web_config.theme_name')) }}/plugins/jquery-toastr/jquery.toast.min.css" rel="stylesheet" />

<!-- App css -->
<link href="{{ asset(config('web_config.theme_name')) }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset(config('web_config.theme_name')) }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="{{ asset(config('web_config.theme_name')) }}/assets/css/style.css" rel="stylesheet" type="text/css" />

<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/modernizr.min.js"></script>

@yield('after_styles')
@stack('after_styles')