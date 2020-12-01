@extends('Administrator.admin-layouts.master')

@section('content')
<div class="page-header">
    <div class="card">
        <div class="card-block">
            <h5>Master Karyawan</h5>
            <div class="page-header-breadcrumb">

            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a href=""><button class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Tambah Baru</button></a>
                    <div class="card-header-right">
                        <i class="icofont icofont-rounded-down"></i>
                    </div>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-bordered table-hover w-100 d-block d-md-table text-center nowrap">
                            <thead>
                                <tr>
                                    <th class="align-middle w-auto">Action</th>
                                    <th class="align-middle w-auto">Area Office</th>
                                    <th class="align-middle w-auto">Operating Unit</th>
                                    <th class="align-middle w-auto">Posisi</th>
                                    <th class="align-middle w-auto">NIK</th>
                                    <th class="align-middle w-auto">Nama Karyawan</th>
                                    <th class="align-middle w-auto">NIK Atasan</th>
                                    <th class="align-middle w-auto">Nama Atasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>BANJARMASIN</td>
                                    <td>BANJARMASIN</td>
                                    <td>MERCHANDISER</td>
                                    <td>240856</td>
                                    <td>RIZKYANOOR W</td>
                                    <td>204865</td>
                                    <td>WIDIANTORO R</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Individual Column Searching (Select Inputs) end -->
        </div>
    </div>
</div>
@endsection