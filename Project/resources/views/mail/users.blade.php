<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="margin: 0px auto; ">
<div style="background-color: aquamarine;" >
    <div style="text-align: center;">
        <h1>Mail gửi từ laravel</h1>
        <h2>Thông tin tài khoản của bạn</h2>
    </div>
<div style="margin: 50px;">
    <div style="margin-top: 5%;">
        <span> Tên người dùng:{{$mailData['name']}}</span>
    </div>
    <div style="margin-top: 5%;">
        <span> Email:{{$mailData['email']}}</span>
    
    </div>
    <div style="margin-top: 5%; ">
        <span> Mật khẩu:{{$mailData['password']}}</span>
    </div>
</div>

</div>
    
</body>
</html>