<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/jqvmap/jqvmap.min.css') }}"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"> -->
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <!-- <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.css') }}"> -->
  @yield('style')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- jQuery -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/jquery/jquery.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  // $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/sparklines/sparkline.js') }}"></script> -->
<!-- JQVMap -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/jqvmap/jquery.vmap.min.js') }}"></script> -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/jquery-knob/jquery.knob.min.js') }}"></script> -->
<!-- daterangepicker -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/moment/moment.min.js') }}"></script> -->
<script src="{{ asset('AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> -->
<!-- Summernote -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/summernote/summernote-bs4.min.js') }}"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE-3.1.0/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE-3.1.0/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/dist/js/pages/dashboard.js') }}"></script> -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/toastr/toastr.min.js') }}"></script> -->
<!-- <script src="{{ asset('AdminLTE-3.1.0/plugins/sweetalert2/sweetalert2.min.js') }}"></script> -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutData        = {
      labels: [
          'Paid',
          'Pending',
          'Cancelled',
      ],
      datasets: [
        {
          data: [800,300,100],
          backgroundColor : ['#00a65a', '#f39c12', '#f56954'],
        }
      ]
    }
   
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
  })
</script>
@yield('script')
</body>
</html>
