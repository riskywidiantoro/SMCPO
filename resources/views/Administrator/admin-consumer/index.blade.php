@extends('Administrator.admin-layouts.master')

@section('content')
<div class="page-header">
    <div class="card">
        <div class="card-block">
            <h5>Consumer</h5>
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
                        <div class="form-group row col-lg-12 col-sm-12">
                            <div class="col-sm-3 col-lg-2">
                                <label for="userName-2" class="block">Operating Unit</label>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <select name="kabkota" id="kabkota" class="form-control form-control-sm">
                                    <option value="" disabled selected>
                                        Pilih Operating Unit
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-lg-12 col-sm-12">
                            <div class="col-sm-3 col-lg-2">
                                <label for="userName-2" class="block">Nama</label>
                            </div>
                            <div class="col-sm-12 col-lg-5">
                                <input id="kode_outlet" name="kode_outlet" type="text" class="required form-control form-control-sm">
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
                                    <th class="align-middle">Action</th>
                                    <th class="align-middle">Area</th>
                                    <th class="align-middle">Operating Unit</th>
                                    <th class="align-middle">Nama Consumer</th>
                                    <th class="align-middle">No Hp</th>
                                    <th class="align-middle">Usia</th>
                                    <th class="align-middle">Rokok Sebelumnya</th>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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
                                    <td>BARABAI</td>
                                    <td>ADAM GAFURI DOHAMID</td>
                                    <td>26-35 th</td>
                                    <td>082253542366</td>
                                    <td>U MILD 12</td>
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