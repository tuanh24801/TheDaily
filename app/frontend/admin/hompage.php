<?php
    include '../../../database/config.php';
    if(isset($_POST['keysearch'])){
        $keysearch = $_POST['keysearch'];
        $where = "WHERE hoten LIKE '%${keysearch}%'";
    }else{
        $where = ' ';
    }
    $result_per_page = 7;
    $number_record = "SELECT * FROM taikhoan";
    $result_1 = mysqli_query($conn, $number_record);
    $number_of_result = mysqli_num_rows($result_1);
    $number_of_pages = ceil($number_of_result/$result_per_page);
    if(!isset($_GET['page'])){
        $page = 1;
    }else{
        if($_GET['page'] > $number_of_pages){
            $page = 1;
        }else{
            $page = $_GET['page'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>WebDoCu</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"/>

</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>ADMIN</span> </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Quản lí tài khoản</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Quản lí tài khoản
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" class= "searchaccount" placeholder="Tìm kiếm tại đây..." />

            </div>
            <div class="user-wrapper">
                <img src="../../../images/fav-icon.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Thanh Dao</h4>
                    <small>Supper idol</small>
                </div>
            </div>
        </header>
        <main>
            <?php
                if(isset($_POST['id_acccount'])){
                    echo $_POST['id_acccount'];
                }
                if(isset($_POST['keysearch'])){
                    echo $keysearch = $_POST['keysearch'];
                    echo $where = "WHERE hoten LIKE '%${keysearch}%'";
                }else{
                    echo $where = ' asd';
                }
            ?>
            <h2 class="hienthisearch">ac</h2>
            <div class="recent-grid">
                <div class="project">
                    <div class="card">
                        <div class="card-header">
                            <h3>Danh sách tài khoản người dùng</h3>
                            <?php echo $where; ?>
                            <!-- <button>See all <span class="las la-arrow-right"></span></button> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>Email</td>
                                            <td>Họ Tên</td>
                                            <td>Tùy Chỉnh</td>
                                            <td>Xóa tài khoản</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           <?php
                                           $this_page_first_result = ($page-1)*$result_per_page;
                                            $sql = "SELECT * FROM taikhoan ${where} LIMIT ".$this_page_first_result.",". $result_per_page;
                                            $result = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id_taikhoan'];?></td>
                                                    <td><?php echo $row['email'];?></td>
                                                    <td><?php echo $row['hoten'];?></td>
                                                    <td>         
                                                        <a href="?id=<?php echo $row['id_taikhoan'];?>" class = "edittableuser" id="editaccount"> <i class="fas fa-edit"></i></a>
                                                    </td>
                                                    <input type="hidden" value="<?php echo $row['id_taikhoan'] ?>" id="xoa_id">
                                                    <td>
                                                        <a href="#" class = "edittableuser delete deleteaccount" id="deleteaccount"> <i class="fal fa-trash-alt"></a>
                                                    </td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                           ?>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- <button type="button" class="edittableuser delete deleteaccount" id="deleteaccount"><i class="fal fa-trash-alt"></i></button> -->
                        </div>
                    </div>
                    <div class="numberpage">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li>Trang: </li>
                                <?php 
                                    if($page >1){
                                        ?>
                                            <li class="page-item"><a class="page-link" href="?page= <?php echo $page-1 ?>"><?php echo '<<' ?></a></li>
                                        <?php
                                    }
                                ?>
                                <li class="page-item"><a class="page-link" href="?page= <?php echo $page ?>"><?php echo $page ?></a></li>
                                <?php
                                    if($page < $result_per_page-1){
                                        ?>
                                            <li class="page-item"><a class="page-link" href="?page= <?php echo $page+1 ?>"><?php echo '>>' ?></a></li>
                                        <?php
                                    }
                                ?>
                                
                                
                                <?php
                                // ////////
                                    if(false){
                                        if($number_of_pages >3){
                                            for ($i=1; $i <=3; $i++) { 
    
                                                ?>
                                                <li class="page-item"><a class="page-link" href="?page= <?php echo $i ?>"><?php echo $i ?></a></li>
                                                <?php
                                                
                                            }
                                            ?>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="?page= <?php echo $i ?>">Xem tất cả</a></li>
                                        <?php
                                        }else{
                                            for ($i=1; $i <= $number_of_pages; $i++) { 
    
                                                ?>
                                                <li class="page-item"><a class="page-link" href="?page= <?php echo $i ?>"><?php echo $i ?></a></li>
                                                <?php
                                                
                                            }
                                            ?>
                                            <li class="page-item"><a class="page-link" href="?page= <?php echo $i ?>">Xem tất cả</a></li>
                                            <?php
                                        }
                                    }
                                    
                                    
                                ?>
                                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src = "../../scripts/app.js"></script>
    
</body>

</html>