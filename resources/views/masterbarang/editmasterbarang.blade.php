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
						<!-- <div class="actions">
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="fullscreen">
								</a>
							</div>
						</div> -->
					</div>
					<div class="portlet-body">
						<!-- <div class="row w-100" style="margin-bottom: 3px">
							<div class="col-md-6">
								<div class="btn-group">
									<a href="#">
										<button  class="btn green">
											Tambah <i class="fa fa-plus"></i>
										</button>
									</a>
								</div>
							</div>
						</div> -->
						<table class="table table-striped table-hover table-bordered display" id="konstruksidatatable" cellspacing="0" width="100%">
							
                            <tbody>
							@foreach ($data as $list)
                            	<tr>
									<td style="vertical-align: middle;" class="text-center">KODE</td>
                                    <td class='text-center'><input type="text" name="kode" class="form-control" value = "{{$list->kodemasterbarang}}"></td>
									
								</tr>
                                <tr>
									<td style="vertical-align: middle;" class="text-center">NAMA MASTER BARANG</td>
                                    <td class='text-center'><input type="text" name="nama" class="form-control" value = "{{$list->namamasterbarang}}"></td>
                                    
									
								</tr>
                                <tr>
									<td style="vertical-align: middle;" class="text-center">JUMLAH</td>
                                    <td class='text-center' ><input type="text" name="jumlah" class="form-control" value = "{{$list->jumlah}}"></td>
									
								</tr>
                            @endforeach
							
							</tbody>
						</table>
                        <a href="#">
							<button  class="btn blue">
								Simpan
							</button>
						</a>
					</div>
				</div>
			</div>
			<!-- END DAFTAR AKUN PEGAWAI  -->
		</div>	
	</div>
@stop