<?php
/* Database connection settings */
$dbServername="carexp.net";
$dbUsername="nguyenminhthang";
$dbPassword="I1yYEfSC4HGTN9Vn";
$dbName="dev_meteorology3";
$mysqli = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName) or die($mysqli->error);

$address='HaNoi';

$data1 = '';
$data2 = '';
$data3 = '';


//if(isset($_POST['search'])){
//    $value= $_POST['valuetoSearch'];
//    $query="SELECT * FROM .$value ORDER  BY  DESC LIMIT 40";
//    // $search_result = filterTable($query);
//}
//else{
//    $query="SELECT *FROM 'HaiDuong' ORDER BY DECS LIMIT 30";
//    //  $search_result=filterTable($query);
//}


//function filterTable($query){
//    $mysqli = new mysqli("carexp.net","nguyenminhthang","I1yYEfSC4HGTN9Vn","dev_meteorology3") or die($mysqli->error);
//    $filter_Result=mysqli_query($mysqli,$query);
//    return $filter_Result;
//}
//

//query to get data from the table
if(isset($_POST['search']))
{
    $value=$_POST['valuetoSearch'];
    $query = "SELECT * FROM `$address`  ORDER BY ID DESC LIMIT 40";
}
else{
    $query="SELECT *FROM 'HungYen' ORDER BY ID DESC LIMIT 30";
}

$result = mysqli_query($mysqli, $query);

//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

    $data1 = $data1 . '"'. $row['Temperature'].'",';
    $data2 = $data2 . '"'. $row['Humid'] .'",';
    $data3 = $data3 . '"'. $row['Wind'] .'",';
}

$data1 = trim($data1,",");
$data2 = trim($data2,",");
$data3 = trim($data3,",");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <title>Accelerometer data</title>
    @extends('layout.head')
    <meta charset="utf-8">
    <title>Chose Time</title>
    <link rel="stylesheet" href="css/style.css">

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


    {{--    <table class="table">--}}
    {{--        <thead>--}}
    {{--        <tr>--}}
    {{--            <th>--}}
    {{--                <div class="dropdown">--}}
    {{--                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">City _!_ Province--}}
    {{--                        <span class="caret"></span></button>--}}
    {{--                    <ul class="dropdown-menu">--}}
    {{--                        <li><a href="#">Ha Noi</a></li>--}}
    {{--                        <li><a href="#">Hai Duong</a></li>--}}
    {{--                        <li><a href="#">Hung Yen</a></li>--}}
    {{--                        <li><a href="#">Vinh Phuc</a></li>--}}
    {{--                        <li><a href="#">Hoa Binh</a></li>--}}
    {{--                        <li><a href="#">Phu Tho</a></li>--}}
    {{--                        <li><a href="#">Bac Ninh</a></li>--}}
    {{--                        <li><a href="#">Bac Giang</a></li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </th>--}}
    {{--            <th>--}}


    {{--                <div class="container">--}}
    {{--                    <label>From Date</label>--}}
    {{--                    <input type="date", name = "" max= "" id="fromDate">--}}

    {{--                    <label>To Date</label>--}}
    {{--                    <input type="date", name = "" max= "" id="toDate">--}}

    {{--                </div>--}}

    {{--            </th>--}}

    {{--        </tr>--}}
    {{--        </thead>--}}
    {{--    </table>--}}




    <form action ="demo.blade.php" method="post">
        <input type="text" name="valuetoSearch" placeholder="City"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>

    </form>


    <h1>Weather forecast in {{$address}}</h1>
    <canvas id="chart" style="width: 100%; height: 65vh; background: #222; border: 1px solid #555652; margin-top: 10px;"></canvas>


    <script>
        var ctx = document.getElementById("chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,
                    30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50],
                datasets:
                    [{
                        label: 'Temperature',
                        data: [<?php echo $data1; ?>],
                        backgroundColor: 'transparent',
                        borderColor:'rgba(255,99,132)',
                        borderWidth: 3
                    },
                        {
                            label: 'Humid',
                            data: [<?php echo $data2; ?>],
                            backgroundColor: 'transparent',
                            borderColor:'rgba(0,255,255)',
                            borderWidth: 3
                        },
                        {
                            label: 'Wind',
                            data: [<?php echo $data3; ?>],
                            backgroundColor: 'transparent',
                            borderColor:'rgba(100,200,100)',
                            borderWidth: 3
                        }]
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

