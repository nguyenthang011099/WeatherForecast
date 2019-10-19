<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<h1>
    show page
</h1>
<table>
    <tr>
        <th>
            ID
        </th>
        <th>
            Temperature
        </th>
    </tr>
    @foreach($haiduongs as $haiduong)
        <tr>
            <td>
                {{$haiduong->Humid}}
            </td>
            <td>
                {{$haiduong->Temperature}}
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
