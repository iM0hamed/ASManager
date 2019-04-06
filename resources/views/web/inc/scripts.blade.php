{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 2019-02-03--}}
 {{--* Time: 17:07--}}
 {{--*/--}}
@yield('before_scripts')
@stack('before_scripts')

<!-- jQuery  -->
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/jquery.min.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/waves.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/jquery.slimscroll.js"></script>

<!-- Flot chart -->
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.min.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.time.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.crosshair.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/curvedLines.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/flot-chart/jquery.flot.axislabels.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{ asset(config('web_config.theme_name')) }}/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="{{ asset(config('web_config.theme_name')) }}/plugins/jquery-knob/jquery.knob.js"></script>

<!-- Dashboard Init -->
<script src="{{ asset(config('web_config.theme_name')) }}/assets/pages/jquery.dashboard.init.js"></script>

<!-- App js -->
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/jquery.core.js"></script>
<script src="{{ asset(config('web_config.theme_name')) }}/assets/js/jquery.app.js"></script>


<script type="text/javascript">
    // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@include('web.inc.alerts')

@yield('after_scripts')
@stack('after_scripts')