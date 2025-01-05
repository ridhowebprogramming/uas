<?php 
include "header.php";
include "koneksi.php";


$id = $_GET['id'];
$query =mysqli_query($koneksi,"select * from admin where id = '$id'");
$data =mysqli_fetch_array($query);

?>
 
 
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Data Admin</h6>
    </div>
    <div class="card-body">
    <form class="user" method = "POST" action = "proses_edit.php">
        <input type = "hidden" name = 'id' value = "<?php echo $data['id'];?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."name = "username" value="<?php echo $data['username'];?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name = "password" value="<?php echo $data['password'];?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type ="submit" class="btn btn-success btn-user btn-block">
                                            CHANGE ACCOUNT
                                        </button>
                                    </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<?php include "footer.php";?>