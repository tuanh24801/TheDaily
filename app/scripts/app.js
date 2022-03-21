$(document).ready(function(){
    // Sign up
    $('#btnsignup').click(function(){
        $username = $('#username').val();

        $email = $('#email').val();
        $password = $('#password').val();
        $.post(
            '../process/dangki.php',
            {
                username : $username,
                email : $email,
                password : $password
                
            },function(respons){
                    $('#note-if-signup').html(respons);
            }
        );
    });

    // Sign in
    $('#btnsignin').click(function(){
        $email = $('#emaillogin').val();
        $password = $('#passlogin').val();
        $.post(
            '../process/dangnhap.php',
            {
                email : $email,
                password : $password
                
            },function(respons){
                if(respons == 'Đăng nhập thành công'){
                    location.reload();
                    // location.replace('../frontend/homepage.php');
                }else{
                    $('#note-if-login').html(respons);
                }
                    
            }
        );
    });

    // admin delete account
    $('.deleteaccount').click(function(){
        var id_acccount = $(this).closest("tr").find("#xoa_id").val();
        swal({
            title: "Xóa tài khoản này?",
            text: "Tài khoản đã xóa không thể khôi phục được!!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.post(
                  '../../process/xoataikhoan.php', 
                {
                    id_acccount: id_acccount,
                    delete_btn_set: 1
                },function(data){
                    swal("Đã xóa tài khoản",{
                        icon:"success",
                    }).then((result) =>{
                        location.reload();
                    })
                });
            }
           
          });
    });
    // admin search name account
    $('.keysearch').keyup(function(){
        var keysearch = $('.keysearch').val();
        $.post(
            '../../process/timtaikhoan.php',
            {
                keysearch: keysearch
            },function(data){
                $('.card-body').html(data);
                // $('.numberpage').html('');
            }
        );
    });
    function isEmailValid(email) {
        const emailRegexp = new RegExp(
            /^[a-z0-9](\.?[a-z0-9]){5,}@gmail\.com$/
        )
        return emailRegexp.test(email)
      }

    var passEmail = 'false';
    var passName = 'false';
    var passPassWord = 'false';
    // check inputadmin 
    // check name
    $('.nameinput').keyup(function(){
        var nameinput = $('.nameinput').val();
        if(nameinput == "" || nameinput == " "){
            $('.namenotiferror').html('(*) không được bỏ trống họ tên');
            $('.nameinput').addClass('errorinput');
            passName = 'false';
        }else{
            $('.nameinput').removeClass('errorinput');
            $('.namenotiferror').html(' ');
            passName = 'true';

        }
    });
    // check mail
    $('.emailinput').keyup(function(){
        var emailinput = $('.emailinput').val();
        if(emailinput == "" || emailinput == " "){
            $('.emailnotiferror').html('(*) không được bỏ trống email');
            $('.emailinput').addClass('errorinput');
            passEmail = 'false';
        }else{
            if(!isEmailValid(emailinput)){
                $('.emailnotiferror').html('Định dạng email không hợp lê');
                $('.emailinput').addClass('errorinput');
                passEmail = 'false';
            }else{
                $.post(
                    '../../process/checkmail.php',
                    {
                        emailinput:emailinput
                    },
                    function(data){
                       if(data == 'trùng'){
                            $('.emailnotiferror').html('Email đã được đăng kí vui lòng sử dụng email khác');
                            $('.emailinput').addClass('errorinput');
                            passEmail = 'false';
                       }else{
                            $('.emailnotiferror').html(' ');
                            $('.emailinput').removeClass('errorinput');
                            passEmail = 'true';
                       }
                    }
                )
                
            }
           
        }
    });
    // check pass
    $('.passinput').keyup(function(){
        var passinput = $('.passinput').val();
        if(passinput == "" || passinput == " " || passinput.length <= 8){
            $('.passnotiferror').html('(*) mật khẩu phải lớn hơn 8 kí tự');
            $('.passinput').addClass('errorinput');
            passPassWord = 'false';
        }else{
            $('.passinput').removeClass('errorinput');
            $('.passnotiferror').html(' ');
            passPassWord = 'true';
        }
    });

    $('.btnsubmit').click(function(){
        var passinput = $('.passinput').val();
        var emailinput = $('.emailinput').val();
        var nameinput = $('.nameinput').val();
        if(passPassWord == 'true' && passEmail == 'true' && passName == 'true'){
            $('.submitnotiferror').html(' ');
            $.post(
                '../../process/themtaikhoan.php',
                {passinput: passinput, emailinput: emailinput, nameinput: nameinput},
                function(data){
                    swal('Thêm tài khoản thành công',{
                        icon:"success",
                    });
                    
                }
            );
        }else{
            $('.submitnotiferror').html('(*) vui lòng điền đủ các trường');
        }
    })

    

    


})