<?php
    session_start();
    if(isset($_POST['valuesearch'])){
      $valuesearch = $_POST['valuesearch'];
      $where = "WHERE tensanpham LIKE '%${valuesearch}%'";
      
    }else{
      $where = '';
		  $valuesearch = '';
    }
    
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        include '../../database/config.php';
        include './partition/headerdefault.php';
    }
    
    
?>
<div class="container-fluid">
    <section class="new-arrival mt-5">
        <div class="product-container">
          <?php
            
            $getproducts = "SELECT * FROM sanpham ${where} ORDER BY id_sanpham DESC";
            $result = mysqli_query($conn,$getproducts);
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                ?>
                  <div class="product-box">
                    <div class="product-img">
                      <a href="detailsproduct.php?id1=<?php echo $row['id_sanpham']?>" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                      </a>
                      <a href="detailsproduct.php?id1=<?php echo $row['id_sanpham']?>">
                      <img src="../uploads/<?php echo $row['anhsanpham']?>" alt="">
                      </a>
                    </div>
                    <div class="product-details">
                      <a href="detailsproduct.php?id1=<?php echo $row['id_sanpham']?>" class="p-name"><?php echo $row['tensanpham']?></a>
                      <span class="p-price"><?php echo $row['giaban'] ?> vnđ</span>
                    </div>
                  </div>
                <?php
              }
            }else{
              echo 'không có sản phẩm nào';
            }
          ?>
        </div>
    </section>
</div>
<?php
    include './partition/onlycript.php';
?>