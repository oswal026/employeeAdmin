@extends('layouts.main')


@section('content')

    <div class="row login">
        <div class="col-xs-offset-3 col-xs-6 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 bg-gray show-grid">
            {!! Form::open(['route' => 'login', 'class' => 'text-center', 'method' => 'POST']) !!}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">        
                <img class="icon-user" src="{{asset('assets/imgs/flat-user.png')}}" alt="icon-user">
                <h3>Log in</h3>
                <p class="txt-gray">with your administrator account</p>
                <div class="margin-upbottom">
                    <div class="form-group">
                        <input type="text" class="form-control text-center bg-dark-gray txt-black" name="user" placeholder="user" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control text-center bg-dark-gray txt-black" name="password" placeholder="password" required>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Keep me logged in
                        </label>
                    </div>
                </div>
                <button type="submit" class="col-xs-12 btn btn-danger btn-lg show-grid" style="margin-right: 15px;">
                    LOG IN
                </button>

            {!! Form::close() !!}

        </div>

        
    </div>

@stop