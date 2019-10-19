<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
</head>
<body>
<h1>
    Create new project
</h1>
<form method ="POST" action="/view">
    {{csrf_field()}}
    <div>
        <input type="text" name="Temperature" placeholder="temperature">
    </div>
    <div>
        <input type="text" name="Description" placeholder="description">
    </div>
    <div>
        <input type="text" name="Wind" placeholder="wind">
    </div>

    <div>
        <input type="text" name="Humid" placeholder="humid">
    </div>

    <div>
        <button type="submit">Create</button>
    </div>

</form>
</body>
</html>
