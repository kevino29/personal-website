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
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">General Skills</div>
            </div>
        </div>
    </div>

    <div class="row py-3">
        <div class="col-md-5 h4 w-100 font-weight-bold">Teamwork and Problem Solving</div>
        <div class="col paragraph">
            Met up with the team and practiced problems that we were likely to face in the challenges, earning us third place in the first annual Code Quest competition.
        </div>
    </div>

    <div class="row py-3">
        <div class="col-md-5 h4 w-100 font-weight-bold">Time Management</div>
        <div class="col paragraph">
            Created a whole year schedule of due dates resulting in no late works and better time handling.
        </div>
    </div>

    <div class="row py-3">
        <div class="col-md-5 h4 w-100 font-weight-bold">Communications</div>
        <div class="col paragraph">
            Had consistent meetings with the team I was working with on a project, which resulted in clear instructions on what and how to do things and which role I was playing in the team.
        </div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Technical Skills</div>
            </div>
        </div>
    </div>

    <div class="row py-3">
        <div class="col">
            <div class="card shadow">
                <div class="card-header theme-bg">
                    <div class="h4 text-center text-white">Languages I have used:</div>
                </div>
                <div class="card-body overflow-auto">
                    <ul class="d-flex justify-content-center list-unstyled icon-list mx-auto mt-3">
                        <li class="col text-center">
                            <i class="fab fa-python theme-fg lg-font-size"></i>
                            <div>Python <i class="fas fa-check-circle text-primary"></i></div>
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
                            <div>C++ <i class="fas fa-check-circle text-primary"></i></div>
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
                            <div>HTML/HTML5 <i class="fas fa-check-circle text-primary"></i></div>
                        </li>
                        <li class="col text-center">
                            <i class="fab fa-css3 theme-fg lg-font-size"></i>
                            <div>CSS/CSS3 <i class="fas fa-check-circle text-primary"></i></div>
                        </li>
                        <li class="col text-center">
                            <i class="fab fa-js-square theme-fg lg-font-size"></i>
                            <div>JavaScript <i class="fas fa-check-circle text-primary"></i></div>
                        </li>
                        <li class="col text-center">
                            <i class="fab fa-php theme-fg lg-font-size"></i>
                            <div>PHP <i class="fas fa-check-circle text-primary"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-right font-italic mt-3">* Languages with <i class="fas fa-check-circle text-primary"></i> mark are languages where I passed the LinkedIn Skill Assessment Quiz</div>
        </div>
    </div>

    <div class="row py-3 mt-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-header theme-bg">
                    <div class="h4 text-center text-white">Technologies I have worked with:</div>
                </div>

                <div class="card-body overflow-auto">
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

                    <ul class="d-flex justify-content-center list-unstyled icon-list mt-3 mx-auto">
                        <li class="col text-center">
                            <div class="img-icon">
                                <img src="/assets/images/icons/heroku.png" alt="Heroku">
                            </div>
                            <div>Heroku</div>
                        </li>
                        <li class="col text-center">
                            <i class="fab fa-git theme-fg lg-font-size"></i>
                            <div>Git</div>
                        </li>
                        <li class="col text-center">
                            <i class="fab fa-github theme-fg lg-font-size"></i>
                            <div>GitHub</div>
                        </li>
                        <li class="col text-center">
                            <div class="img-icon">
                                <img src="/assets/images/icons/google_domains.png" alt="Google Domains">
                            </div>
                            <div>Google Domains</div>
                        </li>
                        <li class="col text-center">
                            <div class="img-icon">
                                <img src="/assets/images/icons/aws.png" alt="Amazon Web Services">
                            </div>
                            <div>AWS</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-3 mt-5">
        <div class="col">
            <div class="card shadow">
                <div class="card-header theme-bg">
                    <div class="h4 text-center text-white">Frameworks I have used:</div>
                </div>
                <div class="card-body overflow-auto">
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
                    Heroku Logo Icon by <a href="https://iconscout.com/contributors/jagathish" target="_blank">Jagathish Saravanan</a>
                </li>
                <li>
                    AWS Logo Icon by <a href="https://iconscout.com/contributors/maninderkaur" target="_blank">Maninder Kaur</a>
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
