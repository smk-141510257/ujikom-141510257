@extends('layouts/app')
@section('content')
<div class="col-md-3 ">
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


                <div class="panel-body" align="center">
                    
                    <a class="btn btn-danger form-control" href="{{url('jabatan')}}">Jabatan</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('golongan')}}">Golongan</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('pegawai')}}">Pegawai</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('kategori_lembur')}}">Kategori Lembur</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('lembur_pegawai')}}">Lembur Pegawai</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('tunjangan')}}">Tunjangan</a><hr>

                    <a class="btn btn-danger form-control" href="{{url('tunjangan_pegawai')}}">Tunjangan Karyawan</a><hr>
                    
                    <a class="btn btn-danger form-control" href="{{url('penggajian')}}">Penggajian Karyawan</a><hr>  
  

                </div>
            </center>
        </div>
    </div>
</div>
<center><h1>Data kategori lembur</h1></center>
<hr>
<div class="col-md-9 ">
<table class="table table-striped table-bordered table-hover">
<!-- <table class="table table-default"> -->
<tr class="danger">

<a href="{{url('/kategori_lembur/create')}}"class="btn btn-primary form-control">Tambah Data</a>

<br><br>
	<thead>
		<tr class="bg-info">
		<th>No</th>
		<th><center>kode lembur</center></th>
		<th><center>jabatan </center></th>
		<th><center>golongan </center></th>
		<th><center>besaran_uang </center></th>
		<th colspan="3">Action</th>
			
		</tr>
	</thead>
	<tbody>
		@php
		$no=1;
		@endphp
		@foreach($kategori_lembur as $kategori_lemburs)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$kategori_lemburs->kode_lembur}}</td>
			<td>{{$kategori_lemburs->jabatanModel->nama_jabatan}}</td>
			<td>{{$kategori_lemburs->golonganModel->nama_golongan}}</td>
			<td>{{$kategori_lemburs->besaran_uang}}</td>
			
		<td><a href="{{route('kategori_lembur.edit',$kategori_lemburs->id)}}" class="btn btn-success">Edit</a></td>	

		</td>
		<td>
		{!!Form::open(['method'=>'DELETE','route'=>['kategori_lembur.destroy',$kategori_lemburs->id]])!!}
		
		<input type="submit" class="btn btn-primary" onclick="return confirm('anda yakin akan menghapus data?');"value="Hapus"> 

		{!!Form::close()!!}
		</td>
		</tr>
		</div>
		@endforeach

	</tbody>
</table>




@endsection