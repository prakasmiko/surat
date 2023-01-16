@extends('layouts.index')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">
                        Kode Sifat
                    </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="dashboard.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kode Sifat</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- <div class="flash-data" data-flashdata="{{ session()->has('flash') }}"></div>
        @if (session()->has('success'))

        @endif --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 text-right mb-4">
                            <button type="button" class="btn btn-success ml-2" data-toggle="modal" data-target=".tambah-sifat"><i class="uil uil-plus mr-2"></i>Tambah</button>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-hover table-bordered nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="10%">Kode</th>
                                        <th width="65%">Sifat</th>
                                        <th width="10%">Status</th>
                                        <th width="10%" class="text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>                                    
								@foreach ($data as $value) 

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->kode_sifat }}</td>
                                        <td>{{ $value->sifat }}</td>
                                        <td>									
                                            @if ($value->status === 'Aktif')
                                                <span class="badge badge-success">Aktif</span>
                                            @else
                                                <span class="badge badge-danger">Tidak Aktif</span>
                                            @endif                                        
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-block btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a data-target="#edit-sifat-{{ $value->id }}" type="button" class="dropdown-item" data-toggle="modal">Edit</a>
                                                                                                        
                                                    <form action ="{{ route('kode-sifat.delete', $value->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item tombol-hapus">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>     
                                    
								@endforeach                           
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- tambah --}}
        <div class="modal fade tambah-sifat" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form action="{{ route('kode-sifat.add') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Sifat</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="sifat" placeholder="Sifat" id="example-text-input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Kode</label>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Kode" name="kode_sifat" id="example-text-input">
                                </div>
                                <label for="example-text-input" class="col-md-1 col-form-label">Status</label>
                                <div class="col-md-2">                                    
								{{-- @foreach ($data as $value) 

                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="status" value="Aktif">
                                        <label class="custom-control-label" for="customCheck1">Aktif</label>
                                        {!! Form::checkbox($status, $null, null, [
                                            'class' => 'custom-control custom-checkbox mt-2',
                                            'id' => 'customCheck1'
                                            ] ) !!}
                                    </div>

                                @endforeach    --}}
                                    <select class="select form-control" name="status">
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btnsubmit" class="btn btn-primary waves-effect waves-light" name="submit"><i class="uil uil-save mr-2"></i>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- edit --}}
        @foreach ($data as $value) 
        <div class="modal fade" id="edit-sifat-{{ $value->id }}" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form action="{{ route('kode-sifat.edit', $value->id) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Sifat</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="sifat" placeholder="Sifat" value="{{ $value->sifat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Kode</label>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" placeholder="Kode" name="kode_sifat" value="{{ $value->kode_sifat }}">
                                </div>
                                <label for="example-text-input" class="col-md-1 col-form-label">Status</label>
                                <div class="col-md-2">                                    
								{{-- @foreach ($data as $value) 

                                    <div class="custom-control custom-checkbox mt-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="status" value="Aktif">
                                        <label class="custom-control-label" for="customCheck1">Aktif</label>
                                        {!! Form::checkbox($status, $null, null, [
                                            'class' => 'custom-control custom-checkbox mt-2',
                                            'id' => 'customCheck1'
                                            ] ) !!}
                                    </div>

                                @endforeach    --}}
                                    <select class="select form-control" name="status" value="{{ $value->status }}">
                                        <option>Aktif</option>
                                        <option>Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light tombol-edit" name="submit"><i class="uil uil-save mr-2"></i>Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>
</div>
@endsection

@section('javascript')
@endsection