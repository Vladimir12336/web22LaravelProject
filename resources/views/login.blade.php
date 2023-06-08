@extends('layout')

@section('main_content')
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark">
    <h1 class="my-0 mr-md-auto font-weight-normal">Вход<h1>
    </div>
    <form method='post' action='login' class='w-100 d-flex flex-column align-items-center'>
        @csrf
        <div class='mb-2'>
            <div class='text-white my-0 mr-md-auto font-weight-normal'>Email</div>
            <input name='email' type='email' id='email'/>
        </div>
        <div class='mb-2'>
            <div class='text-white my-0 mr-md-auto font-weight-normal'>Логин</div>
            <input name='name' type='name' id='name'/>
        </div>
        <div class='mb-2'>
            <div class='text-white my-0 mr-md-auto font-weight-normal'>Пароль</div>
            <input name='password' type='password' id='password'/>
        </div>
        <div class='mb-2 d-flex flex-row'>
            <div class='text-white my-0 mr-md-auto font-weight-normal pr-2'>Запомнить меня:</div> 
            <input type='checkbox' name='save'>
        </div>
        <button type='submit' class='btn btn-outline-light me-2'>Отправить</button>
    </form>
</body>
</html>
@endsection