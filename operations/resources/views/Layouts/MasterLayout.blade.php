<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




        <title>@yield('pageTitle') - E-Business | Eximia Realty</title>
        <!-- vendor css -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/chartist/chartist.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/select2/css/select2.min.css')}}" rel="stylesheet">
        <!-- Bracket CSS -->
        <link rel="stylesheet" href="{{ asset('css/bracket.css')}}">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">



    </head>

    <body>

        <!-- ########## START: LEFT PANEL ########## -->
        @include('Layouts.LeftPanel')
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        @include('Layouts.HeaderPanel')

        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## START: RIGHT PANEL ########## -->
        @include('Layouts.RightPanel')
        <!-- ########## END: RIGHT PANEL ########## --->

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
            @yield('content')

            @include('Layouts.footer')
        </div>
        <!-- ########## END: MAIN PANEL ########## -->

        <script src="{{ asset('lib/jquery/jquery.js')}}"></script>

        @yield('page-script')


        <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
        <script src="{{ asset('lib/moment/moment.js') }}"></script>
        <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
        <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
        <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>
        <script src="{{ asset('lib/chartist/chartist.js') }}"></script>
        <script src="{{ asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('lib/d3/d3.js') }}"></script>
        <script src="{{ asset('lib/rickshaw/rickshaw.min.js') }}"></script>


        <script src="{{ asset('js/bracket.js') }}"></script>
        <script src="{{ asset('js/ResizeSensor.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>

        <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
        <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>

        <script>
            $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
        </script>


    </body>

</html>
