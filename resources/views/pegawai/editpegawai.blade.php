@extends('layouts.master')
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-md-12">
			<h3 class="page-title">
				EDIT AKUN
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">
						HOME
					</a>
				</li>
				<li>				
					<a href="#">
						EDIT AKUN
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
			
		
				<!-- FORM EDIT AKUN PEGAWAI  -->
				<div class="portlet-body form">
                    <form action="/employee/update" method = "post">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <table class="table table-striped table-hover table-bordered display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="90%" class="text-center">
                                            Uraian Kolom
                                        </th>
                                        <th width="10%" class="text-center">
                                            Input
                                        </th>
                                    </tr>	
                                </thead>
                                <tbody>
                                    <?php
                                
                                        ?>
                                        <tr>
                                            <td>NIP</td>
                                            <td>
                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </span>
                                                    <input name="nip" class="form-control" type="text" value="{{$employee->nip}}" readonly="yes">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NAMA</td>
                                            <td>
                                                <font color="#ef4423"></font>
                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-pencil-square"></i>
                                                    </span>
                                                    <input name="nama" class="form-control" type="text" value="{{$employee->nama}}" required>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>JABATAN</td>
                                            <td>

                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input class="form-control" type="text" value="{{$employee->jabatan}}" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UNIT</td>
                                            <td>

                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </span>
                                                    <input class="form-control" type="text" value="{{$employee->unit}}" disabled >
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>USERNAME</td>
                                            <td>
                                                <font color="#ef4423"></font>
                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-dollar"></i>
                                                    </span>
                                                    <input name="username" class="form-control" type="text" value="{{$employee->username}}" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NEW PASSWORD</td>
                                            <td>
                                                
                                                <div class="input-group input-large">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-lightbulb-o"></i>
                                                    </span>
                                                    <font color="#ef4423"></font>
                                                    <input name="password" type="password" class="form-control placeholder-no-fix" autocomplete="off" placeholder="Password Baru" required >
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-actions top">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-right">
                                        <button type="submit" class="btn green">Simpan</button>
                                        <a href="{{url('/home')}}" class = "btn default">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
				</div>
				<!-- FORM EDIT AKUN PEGAWAI  -->
		</div>	
	</div>
@stop