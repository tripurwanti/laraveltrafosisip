@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-title">
				PEMINJAMAN
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">
						HOME
					</a>
				</li>
				<li>				
					<a href="//">
                        PEMINJAMAN
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
					<div class="caption"><i class="fa fa-align-justify"></i>Peminjaman</div>
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
									<a href="#">
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
                                    <th style="vertical-align: middle;" class="text-center">NAMA PEGAWAI</th>								
                                    <th style="vertical-align: middle;" class="text-center">NIP PEGAWAI</th>
									<th style="vertical-align: middle;" class="text-center">DIVISI</th>
									<th style="vertical-align: middle;" class="text-center">NO TELP</th>
									<th style="vertical-align: middle;" class="text-center">PERMINTAAN</th>
									<th style="vertical-align: middle;" class="text-center">NAMA BARANG</th>
									<th style="vertical-align: middle;" class="text-center">TANGGAL KEHILANGAN</th>
									<th style="vertical-align: middle;" class="text-center">JUMLAH PESANAN</th>
									<th style="vertical-align: middle;" class="text-center">STATUS PEMESANAN</th>
									<th style="vertical-align: middle;" class="text-center">AKSI</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($data as $list)
                                <td class='text-center'>{{$list->nama_pegawai}}</td>
                                <td class='text-center'>{{$list->nip_pegawai}}</td>							
                                <td class='text-center'>{{$list->divisi}}</td>
                                <td class='text-center'>{{$list->divisi}}</td>
                                <td class='text-center'>{{$list->permintaan}}</td>
								<td class='text-center'>{{$list->namabarang}}</td>
								<td class='text-center'>{{$list->tanggal_kehilangan}}</td>
								<td class='text-center'>{{$list->jumlah_pesanan}}</td>
								<td class='text-center'>{{$list->status_pemesanan}}</td>

								<td class="text-center">
									<a href="#" onclick="return confirm('Anda yakin akan menghapus data master barang?')"><button class="btn btn-sm red filter-cancel"><i class="fa fa-trash"></i> &nbsp;Hapus</button> </a>
								</td>

							@endforeach
							<?php
							// foreach($user as $hasil):
							// 	echo "<tr>";
							// 	echo "<td class='text-center'>".$hasil->NIP."</td>";
							// 	echo "<td>".$hasil->NAMA."</td>";
							// 	echo "<td>".$hasil->JABATAN."</td>";
							// 	echo "<td>".$hasil->UNIT."</td>";
							// 	echo "<td>".$hasil->USERNAME."</td>";
							// 	echo "<td>".$hasil->PASSWORD."</td>";	
							// 	if ($_SESSION['nip'] == $hasil->NIP ){
								?>
									<!-- <td class="text-center">
									<a href="#"><button class="btn btn-sm red filter-cancel" disabled><i class="fa fa-trash"></i> &nbsp;Hapus</button> </a>
								</td> -->
								<?php
								// }
								// else {
								?>
								
								<!-- <td class="text-center">
									<a href="#" onclick="return confirm('Anda yakin akan menghapus akun pegawai?')"><button class="btn btn-sm red filter-cancel"><i class="fa fa-trash"></i> &nbsp;Hapus</button> </a>
								</td> -->
								<?php
							// 	}
							// 	echo "</tr>";
							// endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END DAFTAR AKUN PEGAWAI  -->
		</div>	
	</div>
@stop