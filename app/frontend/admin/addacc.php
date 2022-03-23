<?php
    include './partition/header.php';
?>
    <div class="container p-4">
        <a href="index.php" class="backhompageadmin">Trở lại</a>
        <h3 class="title text-center">Thêm tài khoản</h3>
        <div class="row mt-5">
            <div class="formaddacc">
                    <label for="fname">Họ tên  </label>
                    <input type="text" class="nameinput"  placeholder="Họ tên">
                    <p for="" class = "namenotiferror notiferror"></p>
                    

                    <label for="lname">Email</label>
                    <input type="email" class="emailinput"  placeholder="Email">
                    <p for="" class = "emailnotiferror notiferror"></p>

                    <label for="lname">Mật khẩu</label>
                    <input type="password" class="passinput" placeholder="Mật khẩu">
                    <p for="" class = "passnotiferror notiferror"></p>

                    <div class="text-center">
                        <button class="btnsubmit text-center" >Tạo tài khoản</button>
                        <p for="" class = "submitnotiferror notiferror"></p>
                    </div>
            </div>
        </div>
        
    </div>
    <?php
    include './partition/footer.php';
?>  