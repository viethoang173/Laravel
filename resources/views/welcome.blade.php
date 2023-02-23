<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/user/stlye.css')}}">
    <link rel="stylesheet" href="{{asset('sneat/assets/vendor/css/core.css')}}">

</head>
<body>
    <div class="container-lg">
        <nav>
            <ul class="nav-menu list-unstyle justify-content-end d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Cửa hàng</a>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link" href="">Danh mục sản phẩm</div>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <div class="nav-link" href="">Về chúng tôi</div>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                        <a class="dropdown-item" href="">Danh mục sản phẩm</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="" href="">Đăng ký</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="" href="">Đăng nhập</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script>
        $(document).ready( function () {
            $('.dropdown').on('click', function (e) {
                
            })
        })
    </script>
</body>
</html>
