@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="h1 xl-font-size text-center theme-fg py-3">My Resume</div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <hr class="glyph">
</div>

<div class="container-sm p-5 my-4 border border-dark">
    {{--  Header  --}}
    <div class="row justify-content-center">
        <div class="h1 font-weight-bolder">KEVIN ORENDAY</div>
    </div>

    {{--  Header Description  --}}
    <div class="row">
        <div class="col w-100 text-center font-weight-bold">
            <div>Entry-Level Developer</div>
            <div>902-329-2967</div>
            <div>kevinorenday.com • kevino_29 • linkedin.com/in/kevin-orenday-386064195/</div>
            <div class="m-0 font-weight-normal">Self-motivated, organized programmer that specializes on the logical part of the programs. Knowledgeable around developing applications and building websites, adaptable to different work setting, and cooperative in a team.</div>
        </div>
    </div>

    {{--  Education Section  --}}
    <div class="row justify-content-start mt-4">
        <div class="h2 font-weight-bolder">EDUCATION</div>
    </div>

    <div class="row justify-content-start pl-4">
        <div class="col w-100">
            <div class="font-weight-bold">SEPTEMBER 2019 - PRESENT</div>
            <div class="font-weight-bold">IT PROGRAMMING DIPLOMA, NOVA SCOTIA COMMUNITY COLLEGE</div>
            <div>Studied courses that focuses on installing Windows, TCP/IP model, building websites, generating databases, and developing applications in Python, Java, C, C++, and C#.</div>
        </div>
    </div>

    <div class="row justify-content-start pl-4 mt-3">
        <div class="col w-100">
            <div class="font-weight-bold">SEPTEMBER 2016 - JUNE 2019</div>
            <div class="font-weight-bold">HIGH SCHOOL DIPLOMA, DARTMOUTH HIGH SCHOOL</div>
            <div>Studied programming, algebra and calculus, and university-level physics. Won the Computer Programming Award during graduation.</div>
        </div>
    </div>

    {{--  Technical Skills Section  --}}
    <div class="row justify-content-start mt-4">
        <div class="h2 font-weight-bolder">TECHNICAL SKILLS</div>
    </div>

    <div class="row justify-content-start pl-4">
        <div class="col w-100">
            <div>Python, Java, C, C++ and C# </div>
            <div>HTML, CSS, JavaScript and PHP</div>
            <div>MariaDB and Microsoft SQL Server</div>
            <div>Windows, Linux, and Android</div>
            <div>Bootstrap, Laravel, Node.js, Express.js, Phaser</div>
            <div>MS Office Suite, JetBrains IDEs, VS Code, Visual Studio, Android Studio</div>
            <div>Heroku, Git/GitHub, Google Domains</div>
        </div>
    </div>

    {{--  General Skills Section  --}}
    <div class="row justify-content-start mt-4">
        <div class="h2 font-weight-bolder">GENERAL SKILLS</div>
    </div>

    <div class="row justify-content-start pl-4">
        <div class="col w-100">
            <div class="font-weight-bold">TEAMWORK AND PROBLEM SOLVING</div>
            <div>Met up with the team and practiced problems that we were likely to face in the challenges, earning us third place in the first annual Code Quest competition.</div>
        </div>
    </div>

    <div class="row justify-content-start pl-4 mt-3">
        <div class="col w-100">
            <div class="font-weight-bold">TIME MANAGEMENT</div>
            <div>Developed a whole year schedule of due dates resulting in no late works and better time handling.</div>
        </div>
    </div>

    <div class="row justify-content-start pl-4 mt-3">
        <div class="col w-100">
            <div class="font-weight-bold">COMMUNICATIONS</div>
            <div>Had consistent meetings with the team I was working with on a project, which resulted in clear instructions on what and how to do things and which role I was playing in the team.</div>
        </div>
    </div>

    {{--  Certificates and Awards Section  --}}
    <div class="row justify-content-start mt-4">
        <div class="h2 font-weight-bolder">CERTIFICATES & AWARDS</div>
    </div>

    <div class="row justify-content-start pl-4">
        <div class="col w-100">
            <div>WHMIS Certificate of Completion</div>
            <div>OHS Certificate of Completion</div>
            <div>Computer Programming Award (High School Graduation)</div>
            <div>3rd Place Code Quest 2019 (Lockheed Martin)</div>
        </div>
    </div>
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <a href="/download/resume" class="btn btn-theme p-2">Download Resume</a>
    </div>
</div>
@endsection
