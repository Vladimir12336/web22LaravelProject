<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ItBLOG</title>
</head>
<body class="bg-dark">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark">
        <h5 class="my-0 mr-md-auto font-weight-normal">ItBLOG</h5>
        <nav>
            <a class='btn btn-outline-light me-2' href='/'>Главная</a>
            <a class='btn btn-outline-light me-2' href='/about'>О нас</a>
        </nav>
        <a class='btn btn-warning mx-2' href='/form'>Отзывы</a>
    </div>
    @yield('main_content');
</body>
</html>