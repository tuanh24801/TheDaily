<?php
    session_start();
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        include '../../database/config.php';
        include './partition/headerdefault.php';
    }
?>
  <div class="container-fluid">
<!-- end header -->
      <div class="full-slider-box f-slide-1">
          <!-- slider text container -->
          <div class="slider-text-container">
              <div class="f-slider-text">
                <span>Ưu đã tháng 3</span>
                <strong>30% Hoàn tiền<br> miễn phí giao hàng</strong>
                <a href="#" class="f-slider-btn ">Thedaily ngay</a>
              </div>
          </div>
      </div>

      <?php
        //include './partition/categories.php';
      ?>

    <!-- New Arrival-->
    <section class="new-arrival mt-5">
        <!-- heading -->
        <div class="arrival-heading">
          <strong>Sản phẩm mới đăng</strong>
          <!-- <p>Những sản phẩm bán chạy nhất</p> -->
        </div>
        <!-- product container -->
        <div class="product-container">
          <?php
            $getproducts = "SELECT * FROM sanpham LIMIT 5";
            $result = mysqli_query($conn,$getproducts);
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                ?>
                <!-- product box 1 -->
                  <div class="product-box">
                    <!-- img -->
                    <div class="product-img">
                      <!-- add cart -->
                      <a href="productdetails.php?id=<?php echo $row['id_sanpham']?>" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                      </a>
                      <a href="productdetails.php?id=<?php echo $row['id_sanpham']?>">
                      <img src="../uploads/<?php echo $row['anhsanpham']?>" alt="">
                      </a>
                    </div>
                    <!-- details -->
                    <div class="product-details">
                      <a href="productdetails.php?id=<?php echo $row['id_sanpham']?>" class="p-name"><?php echo $row['tensanpham']?></a>
                      <span class="p-price"><?php echo $row['giaban'] ?> vnđ</span>
                    </div>
                  </div>
                  <!-- end product box 1 -->
                <?php
              }
            }else{
              ?>
              <h5 class="text-center mt-5 mb-5">Không có sản phẩm nào</h5>
              <?php
            }
          ?>
          
        </div>
    </section>
    <div class="row text-center mt-5">
        <div class="col">
            <a href="searchproduct.php" class="btn btn-outline-success mt-5 mb-5">xem thêm</a>
        </div>
    </div>

    

    <!-- Services -->
    <section class="services">
      <!-- services box 1 -->
      <div class="services-box">
        <i class="fas fa-shipping-fast"></i>
        <span>Giao Hàng Miễn phí</span>
        <p>Miễn phí giao hàng toàn bộ đơn hàng</p>
      </div>
      <!-- services box 2-->
      <div class="services-box">
        <i class="fas fa-headphones-alt"></i>
        <span>Hỗ trợ 24/7</span>
        <p>Hỗ trợ, tư vấn mọi khung giờ</p>
      </div>
      <!-- services box 3 -->
      <div class="services-box">
        <i class="fas fa-shipping-fast"></i>
        <span>Giao hàng nhanh chóng</span>
        <p>Cơ sở toàn quóc</p>
      </div>
    </section> 
    <!-- END Services -->
          </div>
  <?php
    include './partition/footer.php';
  ?>