@extends('layouts.app')

@section('content')
{{--<div class="position-fixed w-100 vh-100" style="background-color: rgba(0, 0, 0, 0.9);">--}}
{{--    <div class="container-fluid my-auto">--}}
{{--        <div class="row justify-content-center" style="margin-top: auto; margin-bottom: auto">--}}
{{--            <div class="col-md-8">--}}
{{--                <img class="d-block w-100 rounded my-auto" src="/assets/images/works/mp3-player/initial_state.PNG" alt="Program's Initial State">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="container-fluid position-fixed bg-dark h-100" style="top: 0">
    <div class="row justify-content-center h-100">
        <div class="col-md-7 align-self-center">
            <div>
                <img class="d-block w-100 rounded" src="/assets/images/works/mp3-player/initial_state.PNG" alt="Program's Initial State">
            </div>
        </div>
    </div>
    <div class="position-absolute" style="bottom: 20px">
        <div class="row justify-content-between text-white mx-auto">
            <div class="col-sm-1 text-right">
                <a>LEFT</a>
            </div>
            <div class="col-sm-1">
                <a>RIGHT</a>
            </div>
        </div>
    </div>
</div>
@endsection
