<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Detail Siswa</div>
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
                <form action="#" method="post" disabled>
                    <div class="mb-2">
                        <label for="">NIS</label>
                        <input type="text" class="form-control" name="nis" value="<?= $r['nis'] ?>" placeholder="Nomor Induk Siswa" disabled>
                    </div>
                    <div class="mb-2">
                        Nama
                        <input type="text" class="form-control" name="name" value="<?= $r['name'] ?>" placeholder="Nama Siswa" disabled>
                    </div>
                    <div class="mb-2">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="gender" value="Laki-laki" <?= $r['gender'] == 'Laki-laki' ? 'checked' : '' ?> disabled> Laki-laki &nbsp;
                        <input type="radio" name="gender" value="Perempuan" <?= $r['gender'] == 'Perempuan' ? 'checked' : '' ?> disabled> Perempuan
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="dob" value="<?= $r['dob'] ?>" placeholder="Tanggal Lahir" disabled>
                    </div>
                    <div class="mb-2">
                        <?php
                        if (isset($r['photo']) && $r['photo'] != '') { ?>
                            <img src="images/students/<?= $r['photo'] ?>" class="img-fluid" alt="<?= $r['name'] ?>" width="400px">
                        <?php } else { ?>
                            <img src="images/webpro.png" class="img-fluid" alt="Logo WebPro">
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>