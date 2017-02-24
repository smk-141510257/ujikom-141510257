@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">buat lembur pegawai </div>
                <div class="panel-body">


                     {!! Form::open(['url' => 'lembur_pegawai']) !!}
                    <div class="form-group">
                        {!! Form::label('kode lembur ', 'kode lembur') !!}
                        {!! Form::text('kode_lembur_id',null,['class'=>'form-control','required']) !!}

                        <div class="col-md-6">
                        {!! Form::label('Nip Dan Nama Pegawai ', 'Nip Dan Nama Pegawai ') !!}
                                    <select class="col-md-12 form-control" name="pegawai_id">
                                        @foreach($pegawai as $pegawais)
                                            <option  value="{{$pegawais->id}}" >
                                            {{$pegawais->nip}} {{$pegawais->User->name}}
                                                </option>
                                        @endforeach
                                    </select>

                    <div class="col-md-6">
                                <label for="Jabatan">Jabatan</label>
                                    <select class="col-md-6 form-control" name="jabatan_id">
                                        @foreach($jabatan as $datajabatan)
                                            <option  value="{{$datajabatan->id}}" >{{$datajabatan->nama_jabatan}}</option>
                                        @endforeach
                                    </select>
                                    <span>{{$errors->first('jabatan_id')}}</span>
                            </div>

                            <div class="col-md-6">
                                <label for="Jabatan">Golongan</label>
                                    <select class="col-md-6 form-control" name="golongan_id">
                                        @foreach($golongan as $datagolongan)
                                            <option  value="{{$datagolongan->id}}" >{{$datagolongan->nama_golongan}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('golongan_id')}}
                                    </span>
                            </div>

                                    
                                
                    <div class="form-group">
                        {!! Form::label('jumlah jam', 'jumlah jam') !!}
                        {!! Form::text('jumlah_jam',null,['class'=>'form-control','required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('SAVE', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
