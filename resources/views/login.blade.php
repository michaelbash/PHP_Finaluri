@extends('layout.layout')
@section('content')

    <div class="d-flex flex-column p-2 justify-content-center align-items-center mt-lg-3">
        <h1 class="mb-4">შესვლა</h1>
        <form class="d-flex flex-column justify-content-center align-items-center" method="post" action="{{route('post_login')}}">
            @csrf
            <div class="form-outline mb-4">
                <input name="name" type="text" id="name" class="form-control" placeholder="სახელი" />
            </div>

            <div class="form-outline mb-4">
                <input name="password" type="password" id="password" class="form-control" placeholder="პაროლი" />
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">შესვლა</button>

            <div class="text-center">
                <p>არ გაქვთ ანგარიში? <a href="{{route('register')}}">რეგისტრაცია</a></p>
            </div>
        </form>
    </div>

@endsection
