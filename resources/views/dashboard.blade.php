@extends('layouts.index')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h4>Welcome To Buka Kelas</h4>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right" style="position: relative;">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-success text-success font-size-16 align-items-center" style="border-radius: 5px;">
                                    <i class="uil uil-envelope-download text-success h2 mt-1"></i>
                                </span>
                            </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">30</span></h4>
                            <p class="text-muted mb-0">Total Surat Masuk</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>3</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right" style="position: relative;">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-info text-success font-size-16 align-items-center" style="border-radius: 5px;">
                                    <i class="uil uil-envelope-upload text-info h2 mt-1"></i>
                                </span>
                            </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">10</span></h4>
                            <p class="text-muted mb-0">Total Surat Keluar</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>3</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right" style="position: relative;">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-warning text-success font-size-16 align-items-center" style="border-radius: 5px;">
                                    <i class="uil uil-envelope-download text-warning h2 mt-1"></i>
                                </span>
                            </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">10</span></h4>
                            <p class="text-muted mb-0">Surat Masuk Hari Ini</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="mdi mdi-arrow-up-bold ml-1"></i>3</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right" style="position: relative;">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-secondary text-sbg-soft-secondary font-size-16 align-items-center" style="border-radius: 5px;">
                                    <i class="uil uil-envelope-upload text-sbg-soft-secondary h2 mt-1"></i>
                                </span>
                            </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">10</span></h4>
                            <p class="text-muted mb-0">Surat Keluar Hari Ini</p>
                        </div>
                        <p class="text-muted mt-3 mb-0"><span class="text-danger mr-1"><i class="mdi mdi-arrow-down-bold ml-1"></i>0</span> since last week
                        </p>
                    </div>
                </div>
            </div> <!-- end col-->
            
        </div>

        <div class="row">                                
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Surat Masuk Hari Ini</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Perihal</th>
                                        <th>Asal Surat</th>
                                        <th>Ditujukan Ke</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10 Desember 2010</td>
                                        <td>
                                            <ul style="list-style-type: none;padding-left:0; margin-bottom: 0;">
                                                <li><b>Undangan Acara Opening Ceremony Indonesia Giviong Fest Zakat Ekspo 2022</b></li>
                                                <li><i>No Surat:</i><b>  200.2.4/8914/SJ</b></li>
                                            </ul>
                                        </td>
                                        <td>Pemerintah Kota</td>
                                        <td>Kepala Sekolah</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection

