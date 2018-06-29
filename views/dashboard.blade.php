@extends('main')
@section('content')
        <!-- top tiles -->
<div class="row tile_count" onclick="document.location = 'streams.php?running=1'"  style="cursor:pointer">
        <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count" onclick="document.location = 'streams.php'"  style="cursor:pointer">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"> Activos</span>
            <div class="count_top green">    {{ $online }} </div>
			<span class="count_top"> Inactivos</span>
			<div class="count_top red">{{ $offline }}</div>
        </div>
    </div>


	
	<div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-user"></i> Usuarios Activos</span>
            <div class="count_top green">0</div>
        </div>
    </div>
    <div class="animated flipInY col-md-4 col-sm-4 col-xs-4 tile_stats_count" onclick="document.location = 'streams.php?running=2'"  style="cursor:pointer">
        <div class="left"></div>
        <div class="right">
            <span class="count_top"><i class="fa fa-clock-o"></i> Conexiones Abiertas</span>
            <div class="count_top green">0</div>
        </div>
    </div>


</div>
<!-- /top tiles -->



<div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel tile fixed_height_100">
            <div class="x_title">
                <h2>SYSTEMA</h2>
            </div>
            <div class="x_content">
                <h4>App Usage across versions</h4>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>ESPACIO</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $space['pr'] }}" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">

                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>{{ $space['count'] }} / {{ $space['total'] }}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>CPU</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $cpu['pr'] }}" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">

                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>{{ $cpu['count'] }} / 100</span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>MEMORIA</span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $mem['pr'] }}" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>{{ $mem['count'] }} / {{ $mem['total'] }}</span>
                    </div>
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>
@endsection

