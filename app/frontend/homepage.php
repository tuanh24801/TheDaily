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
          <div class="slider-text-container">
              <div class="f-slider-text">
                <span>Ưu đã tháng 3</span>
                <strong>30% Hoàn tiền<br> miễn phí giao hàng</strong>
                <a href="#" class="f-slider-btn ">Thedaily ngay</a>
              </div>
          </div>
      </div>
    <section class="new-arrival mt-5">
        <div class="arrival-heading">
          <strong class="spmoidang">Sản phẩm bán chạy</strong>
        </div>
        <div class="product-container">
          <?php
            $getproducts = "SELECT * FROM sanpham ORDER BY id_sanpham DESC LIMIT 5";
            $result = mysqli_query($conn,$getproducts);
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                ?>
                  <div class="product-box">
                    <div class="product-img">
                      <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                      </a>
                      <a href="#">
                      <img src="../uploads/<?php echo $row['anhsanpham']?>" alt="">
                      </a>
                    </div>
                    <div class="product-details">
                      <a href="#" class="p-name"><?php echo $row['tensanpham']?></a>
                      <span class="p-price"><?php echo $row['giaban'] ?> vnđ</span>
                    </div>
                  </div>
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
            <a href="searchproduct.php" class="btn viewmore mt-5 mb-5">xem thêm</a>
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