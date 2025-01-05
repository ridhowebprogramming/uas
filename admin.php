<?php 
include "header.php";
include "koneksi.php";
?>
 
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <td>No</td><td>Username</td><td>Password</td><td>Aksi</td>
            </thead>
            <tbody>
                <?php
                $no = 0;
                $sql = "select * from admin";
                $query = mysqli_query ($koneksi,$sql);
                while($data =mysqli_fetch_array($query)){
                    echo "<tr><td>".$no."</td>
                         <td>".$data['username']."</td>
                         <td>".$data['password']."</td>
                         <td><a href='edit.php?id=".$data['id']."'>EDIT</a> <a href='hapus.php?id=".$data['id']."'>HAPUS</a></td></tr>";
                         $no++;
                }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?php include "footer.php";?>