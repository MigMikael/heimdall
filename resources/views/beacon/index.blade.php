@extends('main')

@section('graph')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Time');
            {{--@foreach($mac_list as $mac)--}}
            data.addColumn('number', 'cd:18:e2:48:d6:53');
            {{--@endforeach--}}

            data.addRows([
                @foreach($beacons as $beacon)
                ['{{ $beacon->time_delta }}', {{ $beacon->RSSI }} ],
                @endforeach
            ]);

            /*data.addRows([
                [1,  -37.8, 80.8, 41.8],
                [2,  30.9, 69.5, 32.4],
                [3,  25.4,   57, 25.7],
                [4,  11.7, 18.8, 10.5],
                [5,  11.9, 17.6, 10.4],
                [6,   8.8, 13.6,  7.7],
                [7,   7.6, 12.3,  9.6],
                [8,  12.3, 29.2, 10.6],
                [9,  16.9, 42.9, 14.8],
                [10, 12.8, 30.9, 11.6],
                [11,  5.3,  7.9,  4.7],
                [12,  6.6,  8.4,  5.2],
                [13,  4.8,  6.3,  3.6],
                [14,  4.2,  6.2,  3.4]
            ]);*/

            var options = {
                chart: {
                    title: 'Data from beacon in graph form',
                    subtitle: 'relation between time and RSSI in each Beacon'
                },
                /*width: 900,
                 height: 500,*/
                axes: {
                    x: {
                        0: {side: 'top'}
                    }
                }
            };

            var chart = new google.charts.Line(document.getElementById('line_top_x'));

            chart.draw(data, google.charts.Line.convertOptions(options));
        }
    </script>
@stop

@section('content')
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#graph">Graph</a></li>
        <li><a data-toggle="tab" href="#table">Table</a></li>
    </ul>

    <div class="tab-content">
        <div id="graph" class="tab-pane fade in active">
            <div class="well">
                <h1>Beacon</h1>
                <div id="line_top_x" class="chart"></div>
            </div>
        </div>
        <div id="table" class="tab-pane fade">
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div>

@stop