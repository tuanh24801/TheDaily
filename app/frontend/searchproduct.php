<?php
    session_start();
   
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        include '../../database/config.php';
        include './partition/headerdefault.php';
    }
    if(isset($_POST['valuesearch'])){
      $valuesearch = $_POST['valuesearch'];
      $where = "WHERE tensanpham LIKE '%${valuesearch}%'";
    }else{
      $where = '';
    }
    
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-2">
            chọn giá: 
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <!-- <option selected>Chọn sản phẩm trong khoảng giá</option> -->
                <option value="1">Tất cả</option>
                <option value="1">0 - 100.000 vnđ</option>
                <option value="2">100.000 - 300.000 vnđ</option>
                <option value="3">300.000 - 500.000 vnđ</option>
            </select>
        </div>
    </div>
    <section class="new-arrival mt-5">
        
        <!-- product container -->
        <div class="product-container">
          <?php
            
            $getproducts = "SELECT * FROM sanpham ${where}";
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
              echo 'không có sản phẩm nào';
            }


            // -------------
            
            
          ?>
          <!-- <div class="product-box">
            <div class="product-img">
              <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"> </i>
              </a>
              <img src="../../images/p-1.png" alt="">
            </div>
            <div class="product-details">
              <a href="#" class="p-name">Drawtring T-shirt</a>
              <span class="p-price">$22.00</span>
            </div>
          </div> -->

        </div>

    </section>
   


</div>


<?php
    include './partition/onlycript.php';
?>