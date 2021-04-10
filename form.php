<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Form Isian Indeks Massa Tubuh (BMI)</h2>
        </div>
        <div class="col-3"></div>
        <div class="col-6">
            <form action="index.php?page=output" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="mb-2">
                    <label class="form-label">Berat Badan</label>
                    <input type="text" name="berat_badan" class="form-control" placeholder="Berat Badan">
                </div>
                <div class="mb-2">
                    <label class="form-label">Tinggi Badan</label>
                    <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan">
                </div>
                <div class="mb-2">
                    <label class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" placeholder="Umur">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>