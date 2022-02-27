<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Base Css Files -->
      <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />

      <!-- Font Icons -->
      <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

      <!-- animate css -->
      <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet" />

      <!-- Waves-effect -->
      <link href="{{ asset('admin/css/waves-effect.css') }}" rel="stylesheet">

      <!-- sweet alerts -->
      <link href="{{ asset('admin/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

      <!-- DataTables -->
      <link href="{{ asset('admin/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

      <!-- Custom Files -->
      <link href="{{ asset('admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link href="{{asset('admin/assets/notifications/notification.css')}}" rel="stylesheet" />


    <!-- Plugins css-->
    <link href="{{asset('admin/assets/tagsinput/jquery.tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/toggles/toggles.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/timepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/colorpicker/colorpicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/jquery-multi-select/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/select2/select2.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('admin/sweetalert2/sweetalert2.min.css')}}">


    <script src="{{ asset('admin/js/modernizr.min.js') }}"></script>


    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

           @include('layouts.header')


           @include('layouts.sidebar')



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->

                   @yield('content')


               @include('layouts.footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->




        </div>
        <!-- END wrapper -->




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('admin/js/waves.js') }}"></script>
        <script src="{{ asset('admin/js/wow.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('admin/assets/chat/moment-2.2.1.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-detectmobile/detect.js') }}"></script>
        <script src="{{ asset('admin/assets/fastclick/fastclick.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>


        <!-- sweet alerts -->
        <script src="{{ asset('admin/assets/sweet-alert/sweet-alert.min.js') }}"></script>
        <script src="{{ asset('admin/assets/sweet-alert/sweet-alert.init.js') }}"></script>

        <!-- flot Chart -->
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.selection.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('admin/assets/flot-chart/jquery.flot.crosshair.js') }}"></script>

        <!-- Counter-up -->
        <script src="{{ asset('admin/assets/counterup/waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/assets/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

        <!-- Dashboard -->
        <script src="{{ asset('admin/js/jquery.dashboard.js') }}"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('admin/js/jquery.app.js') }}"></script>
        <!-- Chat -->
        <script src="{{ asset('admin/js/jquery.chat.js') }}"></script>

        <!-- Todo -->
        <script src="{{ asset('admin/js/jquery.todo.js') }}"></script>


        {{-- Notification --}}
        <script src="{{asset('admin/assets/notifications/notify.min.js')}}"></script>
        <script src="{{asset('admin/assets/notifications/notify-metro.js')}}"></script>
        <script src="{{asset('admin/assets/notifications/notifications.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>


        <!-- SweetAlert2 -->
        <script src="{{asset('admin/sweetalert2/sweetalert2.min.js')}}"></script>


        <!-- CUSTOM JS for date picker and color -->
        <script src="{{asset('admin/assets/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <script src="{{asset('admin/assets/toggles/toggles.min.js')}}"></script>
        <script src="{{asset('admin/assets/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/timepicker/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/colorpicker/bootstrap-colorpicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/jquery-multi-select/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/jquery-multi-select/jquery.quicksearch.js')}}"></script>
        <script src="{{asset('admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('admin/assets/spinner/spinner.min.js')}}"></script>
        <script src="{{asset('admin/assets/select2/select2.min.js')}}" type="text/javascript"></script>

        {{-- Datatable --}}
        <script src="{{ asset('admin/assets/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/datatables/dataTables.bootstrap.js') }}"></script>
        <!--form validation-->
        <script type="text/javascript" src="{{ asset('admin/assets/jquery.validate/jquery.validate.min.js') }}"></script>

        <!--form validation init-->
        <script src="{{ asset('admin/assets/jquery.validate/form-validation-init.js') }}"></script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;


                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;

                case 'danger':
                    toastr.danger("{{ Session::get('message') }}");
                    break;
            }
            @endif

        </script>


        <script>
            jQuery(document).ready(function() {

                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();


                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                //spinner start
                $('#spinner1').spinner();
                $('#spinner2').spinner({disabled: true});
                $('#spinner3').spinner({value:0, min: 0, max: 10});
                $('#spinner4').spinner({value:0, step: 5, min: 0, max: 200});
                //spinner end

                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });
            });
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click','.delete', function(){
              var btn = this;


              console.log(btn);
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                if (result.value) {
                  var url = $(this).data('route');
                  var id  = $(this).data('id');

                  $.get(url, {id:id}, function(result){
                    Swal.fire(
                      'Deleted!',
                      'Record has been deleted.',
                      'success'
                      );
                    $(btn).closest('tr').fadeOut(1500);
                  });
                }

              })
            });
        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    </body>
</html>
