<!DOCTYPE html>
<html>
<head>
    @extends('layout.head')
    <meta charset="utf-8">
    <title>Chose Time</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<table class="table">
    <thead>
    <tr>
        <th>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">City _!_ Province
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">Ha Noi</a></li>
                    <li><a href="#">Hai Duong</a></li>
                    <li><a href="#">Hung Yen</a></li>
                    <li><a href="#">Vinh Phuc</a></li>
                    <li><a href="#">Hoa Binh</a></li>
                    <li><a href="#">Phu Tho</a></li>
                    <li><a href="#">Bac Ninh</a></li>
                    <li><a href="#">Bac Giang</a></li>
                </ul>
            </div>
        </th>
        <th>


            <div class="container">
                <label>From Date</label>
                <input type="date", name = "" max= "" id="fromDate">

                <label>To Date</label>
                <input type="date", name = "" max= "" id="toDate">

            </div>

        </th>
        <th>
            <button type="button" class="btn">Truy Xuat</button>
        </th>
    </tr>
    </thead>
</table>

</body>
</html>
