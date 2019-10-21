

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <title>Accelerometer data</title>

    <style type="text/css">
        body{
            font-family: Arial;
            margin: 80px 100px 10px 100px;
            padding: 0;
            color: white;
            text-align: center;
            background: #555652;
        }
        .container {
            color: #E8E9EB;
            background: #222;
            border: #555652 1px solid;
            padding: 10px;
        }
    </style>

</head>

<body>
<div class="container">
    <h1>Weather forecast in PhuTho</h1>
    <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>

    <script>
        var ctx = document.getElementById("chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,
                    30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50],
                datasets:
                @@foreach($phuthos as $phutho)
                    [{
                        label: 'Temperature',
                        data: [{{ $phutho->Temperature}}],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(255,99,132)',
                        borderWidth: 3
                    },
                        {
                            label: 'Humid',
                            data: [{{ $phutho->Humid}}],
                            backgroundColor: 'transparent',
                            borderColor:'rgba(0,255,255)',
                            borderWidth: 3
                        },
                        {
                            label: 'Wind',
                            data: [{{$phutho->Wind}}],
                            backgroundColor: 'transparent',
                            borderColor:'rgba(100,200,100)',
                            borderWidth: 3
                        }]
                @@endforeach
            },
            options: {
                scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                tooltips:{mode: 'index'},
                legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
            }
        });
    </script>



</div>

</body>
</html>
