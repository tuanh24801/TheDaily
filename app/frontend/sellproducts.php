<?php
    session_start();
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        header('location: ./homepage.php');
    }
?>

<div class="container">
    <h5 class = "text-center mt-3 mb-3">Trang bán hàng</h5>
    <div class="row">
        <p class = "notification text-center">
            <?php
                
                if(isset($_GET['notification'])){
                   echo $_GET['notification'];
                }
            ?>
        </p>
        <div class="col-1"></div>
        <div class="col-10">
            <form action="../process/dangban.php" method = "post" enctype="multipart/form-data">
               
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <div class="col">
                        <input type="text"  class="form-control" name="name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col">
                        <input type="text" class="form-control" name="details" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Số lượng</label>
                    <div class="col">
                        <input type="number"  min = "1" step = "1" class="form-control" name="amount" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Giá bán</label>
                    <div class="col">
                        <input type="number" min = "0" step = "1" class="form-control" name="price" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col">
                    <input type="text" class="form-control" name="address" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">số điện thoại</label>
                    <div class="col">
                    <input type="text" class="form-control" name="phone" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                    <div class="col-4">
                        <input type="file" class="form-control" name = "imageupload" id="image" placeholder = "Chọn file" required>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col">
                        <input type = "submit" class = "btn btn-outline-primary" value = "Đăng bán"></input>
                    </div>
                </div>

            </form>
        </div>
    </div>
    
</div>
<?php
    include './partition/onlycript.php';
?>