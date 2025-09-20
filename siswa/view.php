<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT students.id AS ids, students.* FROM students";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$row["nis"].'</td>
                                    <td>'.$row["name"].'</td>
                                    <td>'.$row["gender"].'</td>                                   
                                    <td>'.$row["dob"].'</td>
                                    <td>
                                        <a href="?m=siswa&s=edit&id='.$row["ids"].'" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="?m=siswa&s=delete&id='.$row["ids"].'" class ="btn btn-sm btn-danger" onclick="return confirm(\'Yakin kelas akan dihapus?,Hapus 1 kelas akan menghapus semua data siswa di kelas tersebut\')">Delete</a>
                                    </td>
                                    </tr>';
                            }
                        }
                        ?>
                    </tbody>
            </div>
        </div>
    </div>
</div>