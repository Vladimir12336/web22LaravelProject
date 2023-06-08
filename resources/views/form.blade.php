@extends('layout')

@section('main_content')
    <div class='w-50'>
    <h1 class='text-white'>Форма обратной связи</h1>
        <form method='post' action='form/check' class='column align-items-center'>
            @csrf
            <input class='mb-2' type='email' name='email' id='email' placeholder='You E-mail'/>
            <input type='text' name='heading' id='heading' placeholder='You heading'/>
            <textarea class='mb-2' name='message' id='message' placeholder='Ваще сообщение'></textarea>
            <div>
                <button class='btn btn-primary' type='submit'>Отправить</button>
            </div>
        </form>

        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            </div>
        @endif
    </div>
@endsection