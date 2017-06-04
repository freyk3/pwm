@extends('layouts.app')

@section('headtags')
    <link rel="stylesheet" href="css/myaccount.css">
@endsection

@section('content')
    @include('header')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Личный кабинет</div>
                    <div class="panel-body">
                        <div class="row">
                            <img class="col-md-3" src="/userdata/{{$user->avatar}}" id="avatar">
                            <div id="username" class="col-md-9">{{$user->name}}</div>
                            <div id="nickname">{{$user->nickname}}</div>
                        </div>
                        <div class="row myaccountrow" style="margin-top: 30px">
                            <div class="col-md-5 myaccounttext">Предпочитаемая музыка:</div>
                            <div class="col-md-7 myaccounttext">{{$user->music}}</div>
                        </div>
                        <div class="row myaccountrow">
                            <div class="col-md-5 myaccounttext">О себе:</div>
                            <div class="col-md-7 myaccounttext">{{$user->about}}</div>
                        </div>
                        <div class="row myaccountrow">
                            <div class="col-md-5 myaccounttext">Skype:</div>
                            <div class="col-md-7 myaccounttext">{{$user->skype}}</div>
                        </div>
                        <div class="row myaccountrow">
                            <div class="col-md-5 myaccounttext">Телефон:</div>
                            <div class="col-md-7 myaccounttext">{{$user->phone}}</div>
                        </div>
                        <div class="row myaccountrow">
                            <div class="col-md-5 myaccounttext">Skills:</div>
                            <!--<div class="col-md-7 col-md-offset-0 myaccounttext">qje</div>-->
                        </div>
                        @foreach($instruments as $instrument)
                            <div class="row myaccountrow">
                                <div class="col-md-4 col-md-offset-1 myaccounttext">{{$instrument->name}}</div>
                                <div class="col-md-6 col-md-offset-0 myaccounttext">
                                    @for($i=0; $i<$instrument->pivot->level; $i++)<span class="glyphicon glyphicon-star"></span>@endfor
                                        @for($i=0; $i<(10-$instrument->pivot->level); $i++)<span class="glyphicon glyphicon-star-empty"></span>@endfor
                                </div>
                            </div>
                        @endforeach
                        <button id="editbutton" class="btn btn-primary" type="submit">Редактировать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection