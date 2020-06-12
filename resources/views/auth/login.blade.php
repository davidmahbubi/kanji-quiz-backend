@extends('templates.auth.main')

@section('title', 'Login')

@section('contents')
<p class="login-box-msg">Sign in to start your session</p>

<form action="" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
    </div>
</form>
@endsection
