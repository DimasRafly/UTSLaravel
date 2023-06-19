<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Welcome Page</title>
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Welcome!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- CONTAINER -->

    <div class="container">
        <h1 class="mt-5">Welcome, Lads!</h1>

        <center>
        <div class="card mt-4">
            <div class="card-body">
                <center><h2 class="card-title">My Profile</h2></center>
                <!-- <img src="{{ asset('assets/img/profile.jpg')}}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" width="400" height="400"> -->
                <center><img src="{{ asset('assets/img/profile.jpg')}}" alt="Foto Profil" class="img-fluid rounded-circle mb-3" width="250" height="250"></center>
                <br> <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Nama</div>
                            <div class="col">Dimas Rafly</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">NIM</div>
                            <div class="col">1204200213</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Nama Project</div>
                            <div class="col">Midterm Exam</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col">Dream Job</div>
                            <div class="col">CTO</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </center>

        <center><a href="/barangs" class="btn btn-primary mt-4">List Barang</a></center>
        <br><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
