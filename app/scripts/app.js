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
                if(respons.length > 1500){
                    $('#note-if-signup').html('đăng kí thành công');
                }else{
                    $('#note-if-signup').html(respons);

                }
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
                    location.replace('../frontend/homepage.php');
                }else{
                    $('#note-if-login').html(respons);
                }
                    
            }
        );
    })

    


})