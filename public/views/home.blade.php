@extends('layout')

@section('title', 'Anasayfa')

@section('content')
    <div class="container">
        <form method="post" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label">Email address</label>
                <input type="text" value="@getData('username')" class="@hasError('username') form-control" id="username" placeholder="Kullanıcı adı" name="username">
                @getError('username')
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="@hasError('password') form-control" id="password" placeholder="Parola" name="password">
                @getError('password')
            </div>
            <div class="mb-3">
                <label for="password_again" class="form-label">Password</label>
                <input type="password" class="@hasError('password_again') form-control" id="password_again" placeholder="Parola (Tekrar)" name="password_again">
                @getError('password_again')
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

