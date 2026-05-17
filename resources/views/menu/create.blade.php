<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">Tambah Menu</h2>

        <form action="{{ route('menu.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Menu</label>
                <input type="text" name="nama_menu" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control">
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Opsional"> 
            </div>

            <div class="d-flex gap-2">

                <button type="submit"
                class="btn btn-primary">

                    Simpan

                </button>

                <a href="{{ route('menu.index') }}"
                class="btn btn-secondary">

                    Cancel

                </a>

            </div>
        </form>

    </div>

</div>

</body>
</html>