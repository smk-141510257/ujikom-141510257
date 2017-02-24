@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-primary">
			    <div class="panel-heading">Data User</div>
	                <div class="panel-body">
				        
				        <table border="2" class="table table-success table-border table-hover">
										<thead >
											<tr>
												<th>No</th>
												<th colspan="2"><center>Action</center></th>
											</tr>
										</thead>
										@php $no=1; @endphp
										<tbody>
											@foreach($penggajian as $data)
											<tr>
												<td>{{$no}}</td>
												
												
												<td>
													<a href="{{route('penggajians.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
												</td>
												<td>
													{!! Form::open(['method'=>'DELETE','route'=>['penggajians.destroy',$data->id]]) !!}
													{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
													{!! Form::close() !!}
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
				                </div>
				            </div>
				        </div>
					<a  href="{{url('penggajian/create')}}" class="btn btn-primary form-control">Tambah</a>
	        		</div>
        	</div>
        </div>
    </div>
</div>
	

@endsection