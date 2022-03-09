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

    // sell products
    $('#sell').click(function(){
        $name = $('#name').val();
        $details = $('#details').val();
        $amount = $('#amount').val();
        $price = $('#price').val();
        $address = $('#address').val();
        $phone = $('#phone').val();
        $image = $('#image').val();
        $.post(
            '../process/dangban.php',
            {
                name : $name,
                details : $details,
                amount : $amount,
                price : $price,
                address : $address,
                phone : $phone,
                image : $image
            },function(respons){
                $('.notification').html('Thông báo: ' + respons);
            }
        )
    })


})