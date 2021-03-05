@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="h1 xl-font-size text-center theme-fg py-3">My Works</div>
            </div>
        </div>
    </div>

<div class="container">
    <hr class="glyph">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Work #1 - MP3 Player/Tagger</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div id="mp3-player" class="carousel slide pointer-cursor shadow zoom-sm" data-ride="carousel"
                 data-toggle="tooltip" data-placement="bottom" title="Click to zoom">
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#mp3-player" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#mp3-player" data-slide-to="1"></li>--}}
{{--                    <li data-target="#mp3-player" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="/assets/images/works/mp3-player/initial_state.PNG" alt="Program's Initial State">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">The program's initial state</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/mp3-player/playing.PNG" alt="The program while a song is playing">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">The program while a song is playing</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/mp3-player/tagging.PNG" alt="The program's tagging menu">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">The program's tagging menu.</span></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
{{--                <a class="carousel-control-prev" href="#mp3-player" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#mp3-player" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            This is a Windows Presentation Foundation (<strong>WPF</strong>) application that allows users to select and play an MP3 audio file, as well as edit and save some of the MP3 file’s tagged metadata. This application was part of an assignment that I had to develop for one of my courses. This application was created using the WPF application UI framework. Written in <strong>XAML</strong> and <strong>C#</strong>.
        </div>
    </div>

    <div class="row mt-4">
        <div class="col paragraph text-center"><a href="/works/work/mp3-player-tagger">View full work details <i class="fas fa-arrow-right"></i></a></div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Work #2 - Flappy Bird Imitation</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div id="flappy-bird" class="carousel slide pointer-cursor shadow zoom-sm" data-ride="carousel"
                 data-toggle="tooltip" data-placement="bottom" title="Click to zoom">
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#flappy-bird" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#flappy-bird" data-slide-to="1"></li>--}}
{{--                    <li data-target="#flappy-bird" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="/assets/images/works/flappy-bird/intro_screen.PNG" alt="Flappy Bird Intro Screen">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">Intro Screen</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <video class="d-block w-100 rounded" autoplay muted loop
                               src="/assets/videos/works/flappy-bird/gameplay.mp4">
                            Your browser does not support the video tag.
                        </video>
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">Gameplay</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/flappy-bird/game_over.PNG" alt="Game Over Screen">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">Game Over Screen</span></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
{{--                <a class="carousel-control-prev" href="#flappy-bird" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#flappy-bird" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            This is an application that is an imitation of the famous mobile game <i>Flappy Bird</i>. This game was part of the final assignment that I had to develop for one of my courses. This application was created using the GDI+ graphics engine. Written in <strong>C#</strong>.
        </div>
    </div>

    <div class="row mt-4">
        <div class="col paragraph text-center"><a href="/works/work/flappy-bird-imitation">View full work details <i class="fas fa-arrow-right"></i></a></div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Work #3 - Maze Solver</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div id="maze-solver" class="carousel slide pointer-cursor shadow zoom-sm" data-ride="carousel"
                 data-toggle="tooltip" data-placement="bottom" title="Click to zoom">
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#maze-solver" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#maze-solver" data-slide-to="1"></li>--}}
{{--                    <li data-target="#maze-solver" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="/assets/images/works/maze-solver/maze.PNG" alt="Sample maze">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">Sample Maze</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/maze-solver/maze_solved.PNG" alt="Solved Maze">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg"><span class="bg-white p-1 rounded">Solved Maze</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/maze-solver/code_snippet.PNG" alt="Code Snippet">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Code Snippet</span></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
{{--                <a class="carousel-control-prev" href="#maze-solver" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#maze-solver" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            This is a console-based application that takes an existing maze and finds a solution to the maze, then output back in the console the solution for the maze. This application was part of an assignment that I had to develop for one of my courses. This application was created using my own Linked List, Stack, and Queue library. Written in <strong>C++</strong>.
        </div>
    </div>

    <div class="row mt-4">
        <div class="col paragraph text-center"><a href="/works/work/maze-solver">View full work details <i class="fas fa-arrow-right"></i></a></div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Work #4 - Spell Checker</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div id="spell-checker" class="carousel slide pointer-cursor shadow zoom-sm" data-ride="carousel">
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#spell-checker" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#spell-checker" data-slide-to="1"></li>--}}
{{--                    <li data-target="#spell-checker" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="card-header">Sample paragraph</div>
                            <div class="card-body overflow-auto"><p class="paragraph">This is a sample document used to test the accuracy of your spell checkr. It includes special charcaters, like a pound (#) sign, an amprsand (&) and "quotation marks" that should be icnored by the spel checker. Along with the special characters, the docment includes the numbers 1, 2 ad 3 which should also be ignored by teh spell checker, but, ofcourse, if those numbers were displayed as the words "one", "two" or "thre", they should be included in the spell checking.</p></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-header">Sample paragraph output</div>
                            <div class="card-body row">
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <li>checkr</li>
                                        <li>charcaters</li>
                                        <li>amprsand</li>
                                        <li>icnored</li>
                                        <li>spel</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <li>docment</li>
                                        <li>ad</li>
                                        <li>teh</li>
                                        <li>ofcourse</li>
                                        <li>thre</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/spell-checker/code_snippet.PNG" alt="Code Snippet">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Code Snippet</span></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
{{--                <a class="carousel-control-prev" href="#spell-checker" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#spell-checker" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            This is a console-based application that takes a sample text file to spell check against and a dictionary text file to look up words with. The application then outputs all the misspelled words in the sample text, based on the given dictionary, to the console. This application was part of an assignment that I had to develop for one of my courses. This application was created using my own Linked List and Binary Search Tree library. Written in <strong>C++</strong>.
        </div>
    </div>

    <div class="row mt-4">
        <div class="col paragraph text-center"><a href="/works/work/spell-checker">View full work details <i class="fas fa-arrow-right"></i></a></div>
    </div>
</div>

<div class="container">
    <hr class="flaired-edges">
</div>

<div class="container py-8">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="statement-span py-1">
                <div class="theme-highlight rounded-pill text-white w-100">Work #5 - Personal Website</div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div id="portfolio" class="carousel slide pointer-cursor shadow zoom-sm" data-ride="carousel"
                 data-toggle="tooltip" data-placement="bottom" title="Click to zoom">
{{--                <ol class="carousel-indicators mx-auto">--}}
{{--                    <li data-target="#personal-website" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#personal-website" data-slide-to="1"></li>--}}
{{--                    <li data-target="#personal-website" data-slide-to="2"></li>--}}
{{--                    <li data-target="#personal-website" data-slide-to="3"></li>--}}
{{--                    <li data-target="#personal-website" data-slide-to="4"></li>--}}
{{--                </ol>--}}
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/personal-website/index.PNG" alt="Home Page">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Home Page</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/personal-website/works.PNG" alt="Works Page">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Works Page</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/personal-website/skills.PNG" alt="Skills Page">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Skills Page</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/personal-website/resume.PNG" alt="Resume Page">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Resume Page</span></div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="/assets/images/works/personal-website/contacts.PNG" alt="Contacts Page">
{{--                        <div class="carousel-caption d-none d-md-block">--}}
{{--                            <div class="h5 theme-fg text-right"><span class="bg-white p-1 rounded">Contacts Page</span></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
{{--                <a class="carousel-control-prev" href="#personal-website" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#personal-website" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col paragraph">
            This is a personal project that will showcase who I am and what I can do, to the entire Internet. This project will rest on this website and will be updated frequently. This personal project is kind of an assignment that I had to complete for one of my courses, but also something I wanted to do for the longest time. This website was created using the Laravel PHP web framework with the help of Bootstrap for styling. Deployed using Heroku. Written in <strong>HTML, CSS, PHP,</strong> and <strong>JavaScript</strong>.
        </div>
    </div>

    <div class="row mt-4">
        <div class="col paragraph text-center"><a href="/works/work/personal-website">View full work details <i class="fas fa-arrow-right"></i></a></div>
    </div>
</div>
@endsection
