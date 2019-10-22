<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Car</title>
</head>
<body>
<div class="container-fuild">

    <div class="row">
        <div class="col-md-6">
            <form action=""method="get" enctype="multipart/form-data">
                @csrf

                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Name:</label>
                        <input type="text" name="make" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Age:</label>
                        <input type="text" name="model" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="">Class:</label>
                        <input type="date" name="produced_on" class="form-control" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
</body>
</html>
