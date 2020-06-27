@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-title">
				AKUN PEGAWAI
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">
						HOME
					</a>
				</li>
				<li>				
					<a href="#">
						AKUN PEGAWAI
					</a>
				</li>
			</ul>
		</div>

		<div class="col-xs-12">
			<div>
				@if (session('status'))

				<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					{{ session('status') }}
				</div>
			
				@endif
			
			</div>
			
			<!-- DAFTAR AKUN PEGAWAI  -->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption"><i class="fa fa-align-justify"></i>Akun Pegawai</div>
						<div class="actions">
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="fullscreen">
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<div class="row w-100" style="margin-bottom: 3px">
							<div class="col-md-6">
								<div class="btn-group">
									<a href="{{url('/employeeadd')}}">
										<button  class="btn green">
											Tambah <i class="fa fa-plus"></i>
										</button>
									</a>
								</div>
							</div>
						</div>
						<table class="table table-striped table-hover table-bordered display" id="konstruksidatatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th style="vertical-align: middle;" class="text-center">NIP</th>
									<th style="vertical-align: middle;" class="text-center">NAMA</th>
									<th style="vertical-align: middle;" class="text-center">JABATAN</th>
									<th style="vertical-align: middle;" class="text-center">UNIT</th>
									<th style="vertical-align: middle;" class="text-center">USERNAME</th>
									<th style="vertical-align: middle;" class="text-center">PASSWORD</th>
									<th style="vertical-align: middle;" class="text-center">AKSI</th>
								</tr>
							</thead>
							<tbody>

							@foreach($employees as $empl)
								<tr>
								<td class='text-center'>{{$empl->nip}}</td>
								<td class='text-center'>{{$empl->nama}}</td>
								<td class='text-center'>{{$empl->jabatan}}</td>
								<td class='text-center'>{{$empl->unit}}</td>
								<td class='text-center'>{{$empl->username}}</td>
								<td class='text-center'>{{$empl->password}}</td>
								<td class="text-center">
									<form method="POST" action="/employee/{{$empl->nip}}" class="d-inline">
										@method('DELETE')
										@csrf
										<button type="submit"  onclick="return confirm('Anda yakin akan menghapus akun pegawai?')"  class="btn btn-sm red filter-cancel"><i class="fa fa-trash"></i> &nbsp;Hapus</button>
									</form>
								{{-- <a href="{{url('/employee')}}" onclick="return confirm('Anda yakin akan menghapus akun pegawai?')"><button class="btn btn-sm red filter-cancel"><i class="fa fa-trash"></i> &nbsp;Hapus</button> </a> --}}
								</td>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END DAFTAR AKUN PEGAWAI  -->
		</div>	
	</div>
@stop