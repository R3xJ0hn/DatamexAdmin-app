@extends('master');


@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sections</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Admin</li>
                        <li class="breadcrumb-item active">Sections</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-9 col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Fixed Header Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body table-responsive p-0" style="height: 70vh;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>School Yaer</th>
                                        <th>No. of Student</th>
                                        <th>No. of Section</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td>SY: 2018-2019</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                    </tr>

                                    <tr class="expandable-body" style="background: #f3f3f3">
                                        <td colspan="4">
                                            <div class="p-0">
                                              <table class="table table-hover">
                                                <tbody>
                                                  <tr>
                                                    <td>Section 1</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Section 2</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Section 3</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          </td>
                                    </tr>



                                    <tr>
                                        <td>SY: 2018-2019</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>


                <!-- ./col -->
                <div class="col-lg-3 col-md-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
@endsection
