@extends('front')

@section('content')
    <div class="container pt-2">
        <form id="newTeamForm">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Racers as $racer)
                                <option value="{{$racer->id}}">{{$racer->name}}-{{$racer->cost}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Racers as $racer)
                                <option value="{{$racer->id}}">{{$racer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Racers as $racer)
                                <option value="{{$racer->id}}">{{$racer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Racers as $racer)
                                <option value="{{$racer->id}}">{{$racer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Racers as $racer)
                                <option value="{{$racer->id}}">{{$racer->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <select class="form-control">
                            @foreach($Teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
