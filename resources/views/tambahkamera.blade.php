<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamera</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-bg {
            background-color: #d3f7d7; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Tambah Data Kamera</h3>
        <div class="row justify-content-center">
            <div class="col-md-6 border rounded mt-4 p-4 custom-bg"> 
                <form action="{{ route('kamera.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="nerk">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
