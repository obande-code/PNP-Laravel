@extends('layouts.dashboard')
@section('style')
<style>
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
</style>
@endsection
@section('mainContent')
<div class="d-flex ml-2">
    <button type="button" class="btn btn-success mr-5" style="width:15%">All</button>
    <button type="button" class="btn btn-outline-secondary mr-5" style="width:15%">Today</button>
    <input type="date" id="birthday" class="form-control mr-5 w-25" name="from">
    <input type="date" id="birthday" class="form-control mr-5 w-25" name="to">
</div>
<div class="d-flex ml-2">
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(1).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 23,209</h2>
            <h6> Tickets</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(2).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 5,386,500.00</h2>
            <h6> Revenue</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(3).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 1,492</h2>
            <h6> User Registration</h6>
        </div>
    </div>
    <div class="w-25 d-flex mr-1" style="background-color: #f2f2f2">
        <div>
            <img src="{{ asset('images/img_20210823(4).png') }}" class="img-fluid" alt="...">
        </div>
        <div class="d-flex flex-column justify-content-center">
            <h2 class="font-weight-bold"> 17</h2>
            <h6> Stations</h6>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="card card-info">
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
            <!-- PIE CHART -->
            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-body">
                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
            <!-- /.col (LEFT) -->
            <!-- /.col (RIGHT) -->
        </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<div class="d-flex ml-2 justify-content-between">
    <div class="container-fluid">
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">Top Violation</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div style="font-size: 15px">
                Commission of a crime in the course of apprehension
                <div class="d-flex">
                    <div style="width: 95%; height: 6px; background-color:green"></div>
                    <div style="width: 2%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
                Driving MV under the influence of alcohol, dangerous drugs
                <div class="d-flex">
                    <div style="width: 85%; height: 6px; background-color:green"></div>
                    <div style="width: 15%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
                Submission of fake documents in relation to application of a DL
                <div class="d-flex">
                    <div style="width: 75%; height: 6px; background-color:green"></div>
                    <div style="width: 25%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
                Failure to wear the prescribed seat belt device
                <div class="d-flex">
                    <div style="width: 65%; height: 6px; background-color:green"></div>
                    <div style="width: 35%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
                Failure to require his/her passenger to wear the prescribed seat belt...
                <div class="d-flex">
                    <div style="width: 60%; height: 6px; background-color:green"></div>
                    <div style="width: 40%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Driving w/o a valid driver's license/conductor's permit
                <div class="d-flex">
                    <div style="width: 50%; height: 6px; background-color:green"></div>
                    <div style="width: 50%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Failure to carry DL, OR/CR while driving
                <div class="d-flex">
                    <div style="width: 40%; height: 6px; background-color:green"></div>
                    <div style="width: 60%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Failure to carry DL, OR/CR while driving
                <div class="d-flex">
                    <div style="width: 35%; height: 6px; background-color:green"></div>
                    <div style="width: 65%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Driving MV used in the commission of crime
                <div class="d-flex">
                    <div style="width: 30%; height: 6px; background-color:green"></div>
                    <div style="width: 70%; height: 6px; background-color:white"></div>
                </div>
            </div>
          </div><!-- /.card-body -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">Top Officers</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 95%; height: 6px; background-color:green"></div>
                    <div style="width: 2%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 85%; height: 6px; background-color:green"></div>
                    <div style="width: 15%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 75%; height: 6px; background-color:green"></div>
                    <div style="width: 25%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 65%; height: 6px; background-color:green"></div>
                    <div style="width: 35%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 60%; height: 6px; background-color:green"></div>
                    <div style="width: 40%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 50%; height: 6px; background-color:green"></div>
                    <div style="width: 50%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 40%; height: 6px; background-color:green"></div>
                    <div style="width: 60%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 35%; height: 6px; background-color:green"></div>
                    <div style="width: 65%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            SPO2 Arjal Bryan Altes
                <div class="d-flex">
                    <div style="width: 30%; height: 6px; background-color:green"></div>
                    <div style="width: 70%; height: 6px; background-color:white"></div>
                </div>
            </div>
          </div><!-- /.card-body -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">Top Camp</h3>
          </div> <!-- /.card-body -->
          <div class="card-body">
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 95%; height: 6px; background-color:green"></div>
                    <div style="width: 2%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 85%; height: 6px; background-color:green"></div>
                    <div style="width: 15%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 75%; height: 6px; background-color:green"></div>
                    <div style="width: 25%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 65%; height: 6px; background-color:green"></div>
                    <div style="width: 35%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 60%; height: 6px; background-color:green"></div>
                    <div style="width: 40%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 50%; height: 6px; background-color:green"></div>
                    <div style="width: 50%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 40%; height: 6px; background-color:green"></div>
                    <div style="width: 60%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 35%; height: 6px; background-color:green"></div>
                    <div style="width: 65%; height: 6px; background-color:white"></div>
                </div>
            </div>
            <div style="font-size: 15px">
            Camp Crame
                <div class="d-flex">
                    <div style="width: 30%; height: 6px; background-color:green"></div>
                    <div style="width: 70%; height: 6px; background-color:white"></div>
                </div>
            </div>
          </div><!-- /.card-body -->
        </div>
    </div>
</div>
<script>
    document.getElementById('dashboard_icon').src = 'http://localhost:8000/images/icon_images/dashboard-yellow.png';
    document.getElementById('dashboard_text').style.color = '#ffc34d';
</script>
@endsection
@section('script')
@endsection
