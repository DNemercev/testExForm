<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .select-css {
        display: block;
        font-size: 16px;
        font-family: sans-serif;
        font-weight: 700;
        color: #444;
        line-height: 1.3;
        padding: .6em 1.4em .5em .8em; width: 20%;
        max-width: 100%;
        box-sizing: border-box;
        margin: 0;
        border: 1px solid #aaa;
        box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
        border-radius: .5em;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        background-color: #fff;
        background-repeat: no-repeat, repeat;
        background-position: right .7em top 50%, 0 0;
        background-size: .65em auto, 100%;
        }
        .select-css::-ms-expand { display: none; }
        .select-css:hover { border-color: #888; }
        .select-css:focus { border-color: #aaa;
        box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
        box-shadow: 0 0 0 3px -moz-mac-focusring;
        color: #222;
        outline: none;
        }
        .select-css option { font-weight:normal; }
        *[dir="rtl"] .select-css, :root:lang(ar) .select-css, :root:lang(iw) .select-css {
        background-position: left .7em top 50%, 0 0;
        padding: .6em .8em .5em 1.4em;
        }
        div{
            padding: 5px;
        }
        h3{
            font-family:sans-serif;
        }
    </style>
</head>
<body>

<div>
    <h3>Select callcenter</h3>
    <form action="{{url('showAllInfoCallCenter')}}">
        <select class="select-css" name="call_center_id">
            @foreach ($allSellects['callCenters'] as $callCenter)
                <option value="{{$callCenter->id}}">{{$callCenter->name}}</option>
            @endforeach
        </select>
        <input class="select-css" type="submit" />
    </form>
</div>

<div>
    <h3>Select desk</h3>
    <form action="{{url('showAllInfoDesk')}}">
        <select class="select-css" name="desk_id">
            @foreach ($allSellects['desks'] as $desk)
                <option value="{{$desk->id}}">{{$desk->desk_name}}</option>
            @endforeach
        </select>
        <input class="select-css" type="submit" />
    </form>
</div>

<div>
    <h3>Select team</h3>
    <form action="{{url('showAllInfoTeam')}}">
        <select class="select-css" name="team_id">
            @foreach ($allSellects['teams'] as $team)
                <option value="{{$team->id}}">{{$team->team_name}}</option>
            @endforeach
        </select>
        <input class="select-css" type="submit" />
    </form>
</div>

<div>
    <h3>Select user</h3>
    <form action="{{url('showAllInfoUser')}}">
        <select class="select-css" name="user_id">
            @foreach ($allSellects['users'] as $user)
                <option value="{{$user->user_id}}">{{$user->stage_name}}</option>
            @endforeach
        </select>
        <input class="select-css" type="submit" />
    </form>
</div>
<div>
    <h3>Select all info</h3>
    @if (Session::has('dismiss'))
        <div class="alert alert-dismiss">
            <h3>{{ Session::get('dismiss') }}</h3>
        </div>
    @endif
    <form action="{{url('secondForm')}}">
        <select class="select-css" name="call_center_id">
            @foreach ($allSellects['callCenters'] as $callCenter)
                <option value="{{$callCenter->id}}">{{$callCenter->name}}</option>
            @endforeach
        </select>
        <select class="select-css" name="desk_id">
            @foreach ($allSellects['desks'] as $desk)
                <option value="{{$desk->id}}">{{$desk->desk_name}}</option>
            @endforeach
        </select>
        <select class="select-css" name="team_id">
            @foreach ($allSellects['teams'] as $team)
                <option value="{{$team->id}}">{{$team->team_name}}</option>
            @endforeach
        </select>
        <select class="select-css" name="user_id">
            @foreach ($allSellects['users'] as $user)
                <option value="{{$user->user_id}}">{{$user->stage_name}}</option>
            @endforeach
        </select>
        <input class="select-css" type="submit" />
    </form>
</div>

</body>
</html>
