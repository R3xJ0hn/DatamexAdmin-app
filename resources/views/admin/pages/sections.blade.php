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
                            <h3 class="card-title">Expandable Table Tree</h3>
                          </div>
                          <!-- ./card-header -->
                          <div class="card-body p-0">
                            <table class="table table-hover">
                              <tbody>
                                <tr>
                                  <td class="border-0">183</td>
                                </tr>
                                <tr data-widget="expandable-table" aria-expanded="true">
                                  <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    219
                                  </td>
                                </tr>
                                <tr class="expandable-body">
                                  <td>
                                    <div class="p-0">
                                      <table class="table table-hover">
                                        <tbody>
                                          <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>
                                              <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                              219-1
                                            </td>
                                          </tr>
                                          <tr class="expandable-body d-none">
                                            <td>
                                              <div class="p-0" style="display: none;">
                                                <table class="table table-hover">
                                                  <tbody>
                                                    <tr>
                                                      <td>219-1-1</td>
                                                    </tr>
                                                    <tr>
                                                      <td>219-1-2</td>
                                                    </tr>
                                                    <tr>
                                                      <td>219-1-3</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr data-widget="expandable-table" aria-expanded="false">
                                            <td>
                                              <button type="button" class="btn btn-primary p-0">
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                              </button>
                                              219-2
                                            </td>
                                          </tr>
                                          <tr class="expandable-body d-none">
                                            <td>
                                              <div class="p-0" style="display: none;">
                                                <table class="table table-hover">
                                                  <tbody>
                                                    <tr>
                                                      <td>219-2-1</td>
                                                    </tr>
                                                    <tr>
                                                      <td>219-2-2</td>
                                                    </tr>
                                                    <tr>
                                                      <td>219-2-3</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>219-3</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>657</td>
                                </tr>
                                <tr>
                                  <td>175</td>
                                </tr>
                                <tr>
                                  <td>134</td>
                                </tr>
                                <tr>
                                  <td>494</td>
                                </tr>
                                <tr>
                                  <td>832</td>
                                </tr>
                                <tr>
                                  <td>982</td>
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
