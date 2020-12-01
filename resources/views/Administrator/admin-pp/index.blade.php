@extends('Administrator.admin-layouts.master')

@section('content')
<div class="page-header">
    <div class="card">
        <div class="card-block">
            <h5>Pengajuan Program</h5>
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
                                    <label for="userName-2" class="block">No P2</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <input id="kode_outlet" name="kode_outlet" type="text" class="required form-control form-control-sm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Tahun</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Tahun
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Budget Owner</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Budget Owner
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <div class="col-lg-3 col-lg-2">
                                    <label for="userName-2" class="block">Initiative</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Initiative
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
                                    <label for="userName-2" class="block">Status P2</label>
                                </div>
                                <div class="col-sm-8 col-lg-8">
                                    <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                        <option value="" disabled selected>
                                            Pilih Status P2
                                        </option>
                                    </select>
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
                                    <th class="align-middle w-auto">No P2</th>
                                    <th class="align-middle w-auto">Tahun</th>
                                    <th class="align-middle w-auto">Quartal</th>
                                    <th class="align-middle w-auto">Nama P2</th>
                                    <th class="align-middle w-auto">Budget Owner</th>
                                    <th class="align-middle w-auto">Brand</th>
                                    <th class="align-middle w-auto">Channel</th>
                                    <th class="align-middle w-auto">Status P2</th>
                                    <th class="align-middle w-auto">Approval Status</th>
                                    <th class="align-middle w-auto">Budget</th>
                                    <th class="align-middle w-auto">Spending</th>
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
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-group icon-btn" role="group">
                                            <!-- <legend class="w-auto">Aksi</legend> -->
                                            <button name="view_territory" id="view_territory" class="btn btn-inverse btn-sm mr-1"><i class="icofont icofont-eye"></i></button>
                                            <button name="edit_territory" id="edit_territory" class="btn btn-info btn-sm"><i class="icofont icofont-edit"></i></button>
                                        </div>
                                    </td>
                                    <td>187980</td>
                                    <td>2020</td>
                                    <td>Q1-Q4</td>
                                    <td>Consumer Promo Outlet</td>
                                    <td>BJN</td>
                                    <td>SSB</td>
                                    <td>RETAIL</td>
                                    <td>OPEN</td>
                                    <td>APPROVED</td>
                                    <td>12.759.000</td>
                                    <td>11.500.000</td>
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