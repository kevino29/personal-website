@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="h1 xl-font-size text-center theme-fg py-3">My Contacts</div>
        </div>
    </div>
</div>

<div class="container">
    <hr class="glyph">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col align-middle text-center">
            <div class="h3">Call Me:</div>
            <a href="tel:9023292967" class="theme-fg">902-329-2967</a>

            <div class="h3 mt-4">Email Me:</div>
            <a href="mailto:info@kevinorenday.com" class="theme-fg">info@kevinorenday.com</a>
        </div>

        <div class="col align-middle text-center mt-3">
            <div class="h3">Check out my socials:</div>

            <ul class="d-flex justify-content-center list-unstyled overflow-auto">
                <li class="col-sm-2">
                    <a class="theme-fg lg-font-size"
                       href="https://github.com/kevino29" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="col-sm-2">
                    <a class="theme-fg lg-font-size"
                       href="https://www.linkedin.com/in/kevin-orenday-386064195" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li class="col-sm-2">
                    <a class="theme-fg lg-font-size"
                       href="https://www.instagram.com/kevino_29" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="col-sm-2">
                    <a class="theme-fg lg-font-size"
                       href="https://www.facebook.com/kevin29707" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="col-sm-2">
                    <a class="theme-fg lg-font-size"
                       href="https://twitter.com/KevinBPX_" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header theme-bg">
                    <div class="h3 text-center text-white">Shoot me a message</div>
                </div>

                <div class="card-body">
                    <form action="/" method="POST">
                        @csrf
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input name="name" class="form-control" placeholder="Name"
                                   type="text" value="{{ old('name') }}">
                        </div>
                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address"
                                   type="email" value="{{ old('email') }}">
                        </div>
                        @error('email') <p class="text-danger">{{ $message }}</p> @enderror
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-comment"></i></span>
                            </div>
                            <textarea class="form-control" name="message" rows="5"
                                      placeholder="Write your message here...">{{ old('message') }}</textarea>
                        </div>
                        @error('message') <p class="text-danger">{{ $message }}</p> @enderror
                        <div class="form-group">
                            <input type="submit" class="btn btn-theme form-control" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
