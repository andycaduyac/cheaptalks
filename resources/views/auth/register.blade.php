@extends('base')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-md-4" id="regForm">
            <form action="{{'/register'}}" method="POST">
                {{ csrf_field() }}
                <h2 class="d-flex justify-content-center m-2">Register</h2>
                <hr>

                <div class="form-floating mb-3 mt-4 mx-2">
                    <input type="text" for="name" class="form-control" name="name" placeholder="Name" required>
                    <label for="name" class="text-secondary ms-2"><i class="bi bi-person"></i> Full Name</label>

                </div>
                <div class="form-check form-check-inline mb-3 mx-2">
                    <input class="form-check-input" type="radio" name="gender" id="male">
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                </div>
                <div class="form-check form-check-inline mb-3 mx-2">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                </div>
                <div class="form-floating mb-3 mx-2">
                    <input type="email" for="email" class="form-control" name="email" placeholder="Email" required>
                    <label for="email" class="text-secondary ms-2"><i class="bi bi-envelope"></i> Email address</label>
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>

                <div class="form-floating mb-3 mx-2">
                    <input type="password" for="password" class="form-control" name="password" placeholder="Password" required>
                    <label for="password" class="text-secondary ms-2"><i class="bi bi-key"></i> Password</label>
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>

                <div class="form-floating mb-3 mx-2">
                    <input type="password" for="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    <label for="confirm_password" class="text-secondary ms-2"><i class="bi bi-key"></i> Confirm Password</label>
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>


                <button class="btn btn-primary d-flex mx-auto px-5 mb-4 mt-4" id=" regBtn" type="submit">REGISTER</button>
                <a href="/" class="d-flex">Already have an account?</a>
            </form>
        </div>
    </div>
</div>

@endsection
