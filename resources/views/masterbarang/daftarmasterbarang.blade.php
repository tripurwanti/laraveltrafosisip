@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-title">
				MASTER BARANG
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">
						HOME
					</a>
				</li>
				<li>				
					<a href="//">
						MASTER BARANG
					</a>
				</li>
			</ul>
		</div>

		<div class="col-xs-12">
			<div>
				<?php //echo $_SESSION['log'];
			//	$_SESSION['log']="";
				?>
			</div>
			
			<!-- DAFTAR AKUN PEGAWAI  -->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption"><i class="fa fa-align-justify"></i>Master Barang</div>
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
										<button data-toggle='modal' data-target='#inaddModal' class="btn green">
											Tambah <i class="fa fa-plus"></i>
										</button>
								</div>
							</div>
						</div>
						<table class="table table-striped table-hover table-bordered display" id="konstruksidatatable" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th style="vertical-align: middle;" class="text-center">KODE</th>
									<th style="vertical-align: middle;" class="text-center">NAMA MASTER BARANG</th>
									<th style="vertical-align: middle;" class="text-center">JUMLAH</th>
									<th style="vertical-align: middle;" class="text-center">AKSI</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($data as $list)
								<tr>
									<td class='text-center'>{{$list->kodemasterbarang}}</td>
									<td class='text-center'>{{$list->namamasterbarang}}</td>
									<td class='text-center'>{{$list->jumlah}}</td>
									<td class="text-center">
										<a href="#" onclick="return confirm('Anda yakin akan menghapus data master barang?')"><button class="btn btn-sm red filter-cancel"><i class="fa fa-trash"></i> &nbsp;Hapus</button> </a>
										<a href="{{ route('masterbarang.edit',$list->kodemasterbarang)}}"><button class="btn btn-sm green filter-cancel"><i class="fa fa-trash"></i> &nbsp;Edit</button> </a>
									</td>
								</tr>
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

<div id="inaddModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="760">
	<div  class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
		<h4 class="modal-title">Tambah Usulan</h4>
	</div>
	<div class="modal-body">
		<form method="POST" action="{{ url('masterbarangpost')}}" class="form-horizontal" role="form">
			<table class="table table-bordered">
				<thead bgcolor="#f9f9f9">
									
					<tr>
						<td style="vertical-align: middle;" >Kode</td>
						<td><input type="text" name="kode" class="form-control" required></td>
					</tr>
					<tr>
						<td style="vertical-align: middle;" >Nama Master Barang</td>
						<td ><input type="text" name="nama" class="form-control" required></td>
					</tr>
					<tr>
						<td style="vertical-align: middle;" >Jumlah</td>
						<td><input type="text" name="jumlah" class="form-control" required></td>
					</tr>
					
				</thead>
			</table>
	</div>
	<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-default">Batal</button>
			<button class="btn blue">Tambah</button>
		</form>
	</div>
</div>