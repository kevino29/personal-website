@extends('layouts.app')

@section('content')
<div class="img-intro align-items-center">
    <div class="col">
        <img src="/assets/images/avatar.jpg" alt="Avatar Photo" class="avatar mx-auto">
    </div>
    <div class="col">
        <div class="h1 text-center py-3 theme-fg xxl-font-size">
            <span class="bg-white p-3 rounded border border-dark">KEVIN ORENDAY</span></div>
        <div class="text-center py-3 text-white font-italic sm-font-size">
            <span class="theme-highlight p-2 rounded">Second-Year IT Programming Student</span>
        </div>
    </div>
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">ABOUT ME</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            <p class="text-justify">Hi, my name is Kevin Orenday. I am a software developer based in Dartmouth, Nova Scotia, Canada. I was born in Lucena City, Quezon, Philippines but I moved to Canada when I was 13 years old. My main hobbies are collecting vinyl records, playing chess, listening to music and developing programs/websites on my spare time.</p>
        </div>

        <div class="col paragraph">
            <p class="text-justify">I studied my first programming language, Java, for two school years in high school and I participated in the first annual 2019 Code Quest competition hosted by Lockheed Martin, and our school won 3rd and 4th places. Also, I studied Python and C afterwards, during my first year in College. I have extensive knowledge in said languages.</p>
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
{{--    <hr class="glyph">--}}
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">MY EDUCATION</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <figure class="figure">
                <img src="/assets/images/dhs_building.jpg" alt="Dartmouth High School Building"
                     class="figure-img img-fluid rounded">
                <figcaption class="figure-caption">Dartmouth High School Building</figcaption>
            </figure>
        </div>
        <div class="col-md-8 paragraph">
            <p class="text-justify">I studied high school at Dartmouth High School in Dartmouth, NS. During that time, I studied various subjects and among them are Academic English, Algebra, Calculus, University-level Physics, and Computer Programming. I also learned how to play the guitar and participated in a competition during high school.</p>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 paragraph">
            <p class="text-justify">For my post-secondary education, I went to Nova Scotia Community College IT Campus and took the IT Programming program. The program includes the subjects of Windows & Linux Installation, Networking & Security, Website Development, Database Administration, Object-Oriented Programming, User Interface Design & Development, System Analysis & Design, Android Development, Data Structures, Windows & Client-Side Programming, Project Management, and Professional Practices.</p>
        </div>
        <div class="col-md-4">
            <figure class="figure">
                <img src="/assets/images/nscc_it_campus.jpg" alt="NSCC IT Campus"
                     class="figure-img img-fluid rounded">
                <figcaption class="figure-caption text-right">Nova Scotia Community College IT Campus</figcaption>
            </figure>
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
{{--    <hr class="glyph">--}}
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">SEND ME A MESSAGE</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
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
@endsection
