{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 2019-02-03--}}
 {{--* Time: 17:07--}}
 {{--*/--}}
<div class="topbar-main">
    <div class="container-fluid">

        <!-- Logo container-->
        <div class="logo">
            <!-- Text Logo -->
            <!-- <a href="index.html" class="logo">
                <span class="logo-small"><i class="mdi mdi-radar"></i></span>
                <span class="logo-large"><i class="mdi mdi-radar"></i> Highdmin</span>
            </a> -->
            <!-- Image Logo -->
            <a href="index.html" class="logo">
                <img src="{{ asset(config('web_config.theme_name')) }}/assets/images/logo_sm.png" alt="" height="50" class="logo-small">
                <img src="{{ asset(config('web_config.theme_name')) }}/assets/images/logo.png" alt="" height="50" class="logo-large">
            </a>

        </div>
        <!-- End Logo container-->

        <div class="menu-extras topbar-custom">
            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                {{--<li class="menu-item">--}}
                    {{--<!-- Mobile menu toggle-->--}}
                    {{--<a class="navbar-toggle nav-link">--}}
                        {{--<div class="lines">--}}
                            {{--<span></span>--}}
                            {{--<span></span>--}}
                            {{--<span></span>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                    {{--<!-- End mobile menu toggle-->--}}
                {{--</li>--}}
                {{-- Languages --}}

                @include('web.main_header.languages')
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>