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
    <h3 class="text-center">Edit Data Kamera</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 border border-1 rounded border-black mt-2 p-3 custom-bg">
                <form action="{{ route('kamera.update', $kamera->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" name="id" id="id" value="{{ $kamera->id }}">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" value="{{ $kamera->merk }}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="{{ $kamera->stok }}">
                    </div>
                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="{{ $kamera->harga_sewa }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
