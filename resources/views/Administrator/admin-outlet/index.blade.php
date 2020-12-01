@extends('Administrator.admin-layouts.master')

@section('content')
<div class="page-header">
    <div class="card">
        <div class="card-block">
            <h5>Inquiry & Add Outlet</h5>
            <div class="page-header-breadcrumb">

            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Area Office</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Area Office
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Operating Unit</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Operating Unit
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Channel</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Channel
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Sub Channel</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Sub Channel
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Territory</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Territory
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">District</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih District
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Route</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Route
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Kode Outlet</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <input id="kode_outlet" name="kode_outlet" type="text" class="required form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-title"></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="btn-group" role="group">
                                <!-- <legend class="w-auto">Aksi</legend> -->
                                <button name="submit_search" id="submit_search" class="btn btn-primary js-dynamic-enable btn-sm mr-1"><i class="fa fa-search"></i>Search</button><span></span>
                                <button name="add_territory" id="reset_territory" class="btn btn-info js-dynamic-enable btn-sm"><i class="fa fa-plus"></i>Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-bordered table-hover w-100 d-block d-md-table text-center nowrap">
                            <thead>
                                <tr>
                                    <th class="align-middle w-auto">Action</th>
                                    <th class="align-middle w-auto">Nama Outlet</th>
                                    <th class="align-middle w-auto">Kode Outlet</th>
                                    <th class="align-middle w-auto">Operating Unit</th>
                                    <th class="align-middle w-auto">Channel</th>
                                    <th class="align-middle w-auto">Sub Channel</th>
                                    <th class="align-middle w-auto">Territory</th>
                                    <th class="align-middle w-auto">District</th>
                                    <th class="align-middle w-auto">Route</th>
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
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>TOKO MEDAN</td>
                                    <td>BJN18000897</td>
                                    <td>AMO BANJARMASIN</td>
                                    <td>MODERN</td>
                                    <td>STORE DC</td>
                                    <td>01</td>
                                    <td>005</td>
                                    <td>SENIN</td>
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