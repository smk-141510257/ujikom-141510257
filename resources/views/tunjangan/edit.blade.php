@extends('layouts.app')
@section('content')
<div class="col-md-3 col-md-offset-1 ">
    <div class="panel panel-default">
        <div class="panel-heading">
            <center>
                <h3>MY APPLICATION</h3>
                <h5>HALAMAN WEB</h5>
                <div class="collapse navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-center">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="" href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

            </center>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit Tunjangan</h1></div>
                 <div class="panel-body">

                     {!!Form::model($tunjangan,['method'=>'PATCH','route'=>['tunjangan.update',$tunjangan->id]])!!}

                    <div class="col-md-6">
                        <label>Kode Tunjangan</label>
                        <input type="text" name="kode_tunjangan" class="form-control" value="{{$tunjangan->kode_tunjangan}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <label>Tunjangan</label>
                        <input type="text" name="nama_tunjangan" class="form-control" value="{{$tunjangan->nama_tunjangan}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_tunjangan') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-12">
                        <label>Besaran Uang</label>
                        <input type="text" name="besaran_uang" class="form-control" value="{{$tunjangan->besaran_uang}}" >
                        <span class="help-block">
                            <strong>{{ $errors->first('besaran_uang') }}</strong>
                        </span>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection