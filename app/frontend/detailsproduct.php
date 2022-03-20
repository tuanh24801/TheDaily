<?php
    session_start();
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        include '../../database/config.php';
        include './partition/headerdefault.php';
    }
    if(isset($_GET['id'])){
        $id_sanpham = $_GET['id'];
    }
?>
        <?php
            $getproducts = "SELECT * FROM sanpham WHERE id_sanpham = '$id_sanpham'";
            $result = mysqli_query($conn,$getproducts);
            $row = mysqli_fetch_assoc($result)
                ?>
    <div class="container">
        <div class="row mb-3 mt-4">
            <div class="col-3">
                <a href="homepage.php" class= "btn btn-outline-secondary">Quay lại</a>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class=" mb-5 p-4 align-item-center" style="width: 100%;">
                    <div class="row">
                        <!-- <div class="col-1"></div> -->
                        <div class="col-md-6">
                            <img src="../uploads/<?php echo $row['anhsanpham']?>" alt="" style="width: 100%;" class="mb-5">
                            <a class="btn btn-outline-danger">Liên Hệ người bán</a>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-md-4">
                            <div class="card-body">
                                <h4 class="card-title mb-3 "><?php echo $row['tensanpham']?></h4>
                                <h5 class="card-title mb-3">Giá: <?php echo $row['giaban']?> vnđ</h5>
                                <h5 class="card-title mb-3">Số lượng: <?php echo $row['soluong']?></h5>
                                <p class="card-text mb-3">Tình Trạng: <?php echo $row['tinhtrang']?></p>
                                <p class="card-text mb-3">Thời gian đã sử dụng: <?php echo $row['thoigiansudung']?></p>
                                <p class="card-text mb-5">Mô tả: <?php echo $row['mota']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">

        </div>
    </div>

<?php
    include './partition/footer.php';
  ?>