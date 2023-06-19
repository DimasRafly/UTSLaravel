<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Input Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('barangs.index') }}">List Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- CONTAINER -->
    <div class="container">
    <form action="{{ route('barangs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Barang :</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Barang" required autofocus>
        </div>
        <br>
        <div class="form-group">
            <label for="price">Harga Barang :</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Barang" pattern="[0-9]+" title="Harap masukkan angka cuy" required>
        </div>
        <br>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Barang :</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi Barang" required>
        </div>
        <br>
        <div class="form-group">
            <label for="satuan">Satuan Barang :</label>
            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Masukkan Satuan Barang" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script
</body>
</html>