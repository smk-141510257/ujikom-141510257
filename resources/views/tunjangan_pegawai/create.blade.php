@extends('layouts.app')

@section('content')

<div class="col-md-offset-1">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Create Tunjangan Pegawai</div>
                    
                <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/tunjangan_pegawai') }}">
                        {{ csrf_field() }}

                            <div class="col-md-6">
                                <label>Kode Tunjangan</label>
                                <input type="text" class="form-control" name="kode_tunjangan_id" autofocus>

                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_tunjangan') }}</strong>
                                    </span>
                            </div>

                            <div class="col-md-12">
                                <label>Nama Pegawai</label>
                                <select name="pegawai_id" class="form-control">
                                @foreach($pegawai as $datapegawai)
                                    <option value="{{$datapegawai->id}}">
                                        {{$datapegawai->User->name}}
                                    </option>
                                @endforeach
                                </select>
                                <span class="help-block">
                                        <strong>{{ $errors->first('pegawai_id') }}</strong>
                                    </span>
                            </div>

                           <div class="col-md-12">
                            <button type="submit" class="btn btn-primary form-control">Tambah</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>

@endsection
