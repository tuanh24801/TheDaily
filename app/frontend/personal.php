<?php
    session_start();
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';

    }else{
        header('location: ./homepage.php');
    }
?>
    <div class="container">
     <div class="row mt-5">
        <h5 class="text-center">Sản phẩm đăng bán</h5>
        <div class="col-1"></div>
         <div class="col-5">
            <a href="./sellproducts.php" class = "btn btn-outline-success">Thêm sản phẩm</a>
         </div>
        </div>
    <section class="new-arrival mt-5">
         <div class="product-container">
        <?php
            
            $id_taikhoan = $_SESSION['user_login'];
            $getproducts = "SELECT * FROM sanpham WHERE id_taikhoan = '$id_taikhoan'";
            $result = mysqli_query($conn,$getproducts);
            if(mysqli_num_rows($result) > 0){
               while($row = mysqli_fetch_assoc($result)){
                   ?>
                    <!-- product box 1 -->
                    <div class="product-box">
                        <div class="product-img">
                        <img src="../uploads/<?php echo $row['anhsanpham']?>" alt="">
                        </div>
                        <div class="product-details">
                        <a href="#" class="p-name"><?php echo $row['tensanpham']?></a>
                        <span class="p-price"><?php echo $row['giaban']?> vnđ</span>
                        </div>
                            <div class="row">
                            <div class="col-6">
                                <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                            </div>
                            <div class="col-6">
                                <a href="" class="btn btn-success"><i class="fal fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end product box 1 -->
                   <?php
               }
            }else{
                echo '<h2>Bạn chưa có sản phẩm nào</h2>';
            }
        ?>
        </div>
        <div class="row mt-5 mb-5">
    </section>
    </div>
    </div>

    <?php
        include './partition/onlycript.php';
    ?>