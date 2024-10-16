@extends('template.layout')
@section('container')
<div class="wrapper ">
        <!-- MainBar -->
        <div class="sidebar" data-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <x-navs.main/>
            <div class="sidebar-background"></div>
        </div>
        <div class="main-panel">
            <!-- End MainBar -->
            <!-- Navbar -->
                <x-navs.top/>
            <!-- End Navbar -->
            <div class="content">
                <div class="content">
                    <div class="container-fluid">
                        <x-tables.llamas/>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
@endsection
@section('footer')
<!-- Plugin for the momentJs  -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
  <!-- Chartist JS -->
  <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/material-dashboard.js?v=2.2.2')}}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script>
        $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
            }

            }

            $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                event.stopPropagation();
                } else if (window.event) {
                window.event.cancelBubble = true;
                }
            }
            });

            $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
            }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
            }
            });

            $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
                });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
                });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
            });

            $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
                }

                if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
                }

                background_image = true;
            } else {
                if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
                }

                if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
                }

                background_image = false;
            }
            });

            $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;

                if ($(".sidebar").length != 0) {
                var ps = new PerfectScrollbar('.sidebar');
                }
                if ($(".sidebar-wrapper").length != 0) {
                var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                }
                if ($(".main-panel").length != 0) {
                var ps2 = new PerfectScrollbar('.main-panel');
                }
                if ($(".main").length != 0) {
                var ps3 = new PerfectScrollbar('main');
                }

            } else {

                if ($(".sidebar").length != 0) {
                var ps = new PerfectScrollbar('.sidebar');
                ps.destroy();
                }
                if ($(".sidebar-wrapper").length != 0) {
                var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                ps1.destroy();
                }
                if ($(".main-panel").length != 0) {
                var ps2 = new PerfectScrollbar('.main-panel');
                ps2.destroy();
                }
                if ($(".main").length != 0) {
                var ps3 = new PerfectScrollbar('main');
                ps3.destroy();
                }


                setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
                }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
                clearInterval(simulateWindowResize);
            }, 1000);

            });
        });
        });
    </script>
    <script>
        $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
        md.initVectorMap();
        });
    </script>
        <script src="{{asset('assets/js/datatables/jquery.datatables.js')}}"></script>
    <script src="{{asset('assets/js/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/datatables/jszip.min.js')}}"></script>
    <script type="module" src="{{asset('assets/js/scripts/functions.js')}}" type="text/javascript"></script>
    <script type="module" src="{{asset('assets/js/scripts/llama.js')}}" type="text/javascript"></script>
@endsection