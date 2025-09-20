<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=siswa&s=save" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <input type="text" class="form-control" name="nis" maxlength="9" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="name" placeholder="Nama siswa" required>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="gender" value="Laki-laki" checked> Laki-laki &nbsp;
                        <input type="radio" name="gender" value="Perempuan">Perempuan 
                    <div class="mb-2">
                        <input type="date" class="form-control" name="dob" placeholder="Tanggal Lahir">
                    </div>

                    <div class="mb-2">
                        <input type="reset" class="btn btn-warning">
                        <input type="submit" value="Simpan" class="btn btn-primary" name="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>