
<style>
    label {
        font-weight: bold;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $r = mysqli_fetch_assoc($result);
            ?>
            <div class="card-body">
                <form action="?m=siswa&s=update" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="">Nomor Induk Siswa</label>
                        <input type="text" class="form-control" name="nis" value="<?= $r['nis'] ?>" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-2">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control" name="name" value="<?= $r['name'] ?>" placeholder="Nama Siswa" required>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="gender" value="Laki-laki" <?= $r['gender'] == 'Laki-laki' ? 'checked' : '' ?>> Laki-laki &nbsp;
                        <input type="radio" name="gender" value="Perempuan" <?= $r['gender'] == 'Perempuan' ? 'checked' : '' ?>> Perempuan
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="dob" value="<?= $r['dob'] ?>" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-4">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="submit" value="Update" class="btn btn-primary" name="update">
                        <input type="reset" class="btn btn-warning" style="float: right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>