@extends('main')

@section('graph')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line', 'scatter']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawScatterChart();
        }

        function drawScatterChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('number', 'Time Delta');
            data.addColumn('number', 'RSSI');

            data.addRows([
                @foreach($beacons as $beacon)
                [{{ $beacon->time_delta }}, {{ $beacon->RSSI }}],
                @endforeach
            ]);

            var options = {
                /*width: 800,
                height: 500,*/
                chart: {
                    title: 'Beacons\' data',
                    subtitle: 'based on Time Delta'
                },
                axes: {
                    x: {
                        0: {side: 'top'}
                    }
                }
            };

            var chart = new google.charts.Scatter(document.getElementById('scatter'));

            chart.draw(data, google.charts.Scatter.convertOptions(options));
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
                <h1>Scatter</h1>
                @if(isset($start) && isset($end))
                    <p>Start At : {{ $start }} | End At : {{ $end }}</p>
                @endif

                <div id="scatter" class="chart"></div>
            </div>
        </div>
        <div id="table" class="tab-pane fade">
            <div class="well">
                <h1>Beacon Data in Table form </h1>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Time Delta</th>
                        <th>RSSI</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($beacons as $beacon)
                    <tr>
                        <td>{{ $beacon->time_delta }}</td>
                        <td>{{ $beacon->RSSI }}</td>
                        <td>{{ $beacon->created_at }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop