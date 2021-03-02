@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="h1 xl-font-size text-center theme-fg py-3">My Skills</div>
        </div>
    </div>
</div>

<div class="container">
    <hr class="glyph">
</div>

<div class="container py-8">
    <div class="row pb-4">
        <div class="col h3 theme-fg">General Skills</div>
    </div>

    <div class="row py-3">
        <div class="col h4 w-100">Teamwork and Problem Solving</div>
        <div class="col paragraph">
            Met up with the team and practiced problems that we were likely to face in the challenges, earning us third place in the first annual Code Quest competition.
        </div>
    </div>

    <div class="row py-3">
        <div class="col h4 w-100">Time Management</div>
        <div class="col paragraph">
            Created a whole year schedule of due dates resulting in no late works and better time handling.
        </div>
    </div>

    <div class="row py-3">
        <div class="col h4 w-100">Communications</div>
        <div class="col paragraph">
            Had consistent meetings with the team I was working with, which resulted in clear instructions on what and how to do things.
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row pb-5">
        <div class="col h3 theme-fg">Technical Skills</div>
    </div>

    <div class="row py-3">
        <div class="col overflow-auto">
            <div class="h4 text-center pb-4">Languages I have used:</div>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <i class="fab fa-python theme-fg lg-font-size"></i>
                    <div>Python</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-java theme-fg lg-font-size"></i>
                    <div>Java</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/c.png" alt="C Icon">
                    </div>
                    <div>C</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/cpp.png" alt="C++ Icon">
                    </div>
                    <div>C++</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/cs.png" alt="C# Icon">
                    </div>
                    <div>C#</div>
                </li>
            </ul>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <i class="fab fa-html5 theme-fg lg-font-size"></i>
                    <div>HTML5</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-css3 theme-fg lg-font-size"></i>
                    <div>CSS3</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-js-square theme-fg lg-font-size"></i>
                    <div>JavaScript</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-php theme-fg lg-font-size"></i>
                    <div>PHP</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row py-3">
        <div class="col overflow-auto">
            <div class="h4 text-center py-4">Technologies I have used:</div>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <i class="fas fa-database theme-fg lg-font-size"></i>
                    <div>MariaDB</div>
                </li>
                <li class="col text-center">
                    <i class="fas fa-server theme-fg lg-font-size"></i>
                    <div>SQL Server</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-windows theme-fg lg-font-size"></i>
                    <div>Windows</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-linux theme-fg lg-font-size"></i>
                    <div>Linux</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-android theme-fg lg-font-size"></i>
                    <div>Android</div>
                </li>
            </ul>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <i class="fab fa-microsoft theme-fg lg-font-size"></i>
                    <div>MS Office</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/jetbrains.png" alt="JetBrains">
                    </div>
                    <div>JetBrains</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/vs_code.png" alt="VS Code">
                    </div>
                    <div>VS Code</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/visual_studio.png" alt="Visual Studio">
                    </div>
                    <div>Visual Studio</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/android_studio.png" alt="Android Studio">
                    </div>
                    <div>Android Studio</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row py-3">
        <div class="col overflow-auto">
            <div class="h4 text-center py-4">Frameworks I have used:</div>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <i class="fab fa-bootstrap theme-fg lg-font-size"></i>
                    <div>Bootstrap</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-laravel theme-fg lg-font-size"></i>
                    <div>Laravel</div>
                </li>
                <li class="col text-center">
                    <i class="fab fa-node theme-fg lg-font-size"></i>
                    <div>Node.js</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon">
                        <img src="/assets/images/icons/microsoft_dot_net.png" alt=".NET Framework">
                    </div>
                    <div>.NET Framework</div>
                </li>
            </ul>

            <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                <li class="col text-center">
                    <div class="img-icon-long">
                        <img src="/assets/images/icons/phaser.png" alt="Phaser">
                    </div>
                    <div>Phaser</div>
                </li>
                <li class="col text-center">
                    <div class="img-icon-long">
                        <img src="/assets/images/icons/express.png" alt="Express.js">
                    </div>
                    <div>Express.js</div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row pb-4">
        <div class="col h3 theme-fg">Credits</div>
    </div>

    <div class="row">
        <div class="col">
            <ul class="list-unstyled">
                <li class="my-1">
                    C, C++, Express, Visual Studio, and .NET Framework Icons by <a href="https://iconscout.com/contributors/icon-mafia" target="_blank">Icon Mafia</a>
                </li>
                <li class="my-1">
                    C# and VS Code Icons by <a href="https://iconscout.com/contributors/fengquanli" target="_blank">Fengquan Li</a>
                </li>
                <li class="my-1">
                    Android Studio Icon by <a href="https://iconscout.com/contributors/hellomille" target="_blank">Aireen Ch</a>
                </li>
                <li class="my-1">
                    Phaser Icon from <a href="https://phaser.io/download/logo" target="_blank">Phaser.io</a>
                </li>
                <li class="my-1">
                    JetBrains Icon from <a href="https://www.jetbrains.com/company/brand/logos/" target="_blank">JetBrains</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
