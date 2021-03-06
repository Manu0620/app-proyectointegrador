@extends('layouts.home-master')

@section('content')
  @auth
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background: #1976D2; color: white; border-radius: 10px;">
            <div class="inner">
              <h3>5</h3>

              <p>Citas Pendientes</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background: #1E88E5; color: white; border-radius: 10px;">
            <div class="inner">
              <h3>10<sup style="font-size: 20px"></sup></h3>

              <p>Solicitud sin contestar</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-code-pull-request"></i>
            </div>
            <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background: #2196F3; color: white; border-radius: 10px;">
            <div class="inner">
              <h3>15</h3>

              <p>Facturas Pendientes</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-file-invoice-dollar"></i>
            </div>
            <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background: #42A5F5; color: white; border-radius: 10px;">
            <div class="inner">
              <h3>50</h3>

              <p>Propiedades vendidas</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-building"></i>
            </div>
            <a href="#" class="small-box-footer">Mas informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <!--<section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart"
                      style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->

   <!-- TO DO List -->
   <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="ion ion-clipboard mr-1"></i>
        To Do List
      </h3>

      <div class="card-tools">
        <ul class="pagination pagination-sm">
          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ul class="todo-list" data-widget="todo-list">
        <li>
          <!-- drag handle -->
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <!-- checkbox -->
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo1" id="todoCheck1">
            <label for="todoCheck1"></label>
          </div>
          <!-- todo text -->
          <span class="text">Design a nice theme</span>
          <!-- Emphasis label -->
          <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
          <!-- General tools such as edit or delete-->
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
            <label for="todoCheck2"></label>
          </div>
          <span class="text">Make the theme responsive</span>
          <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo3" id="todoCheck3">
            <label for="todoCheck3"></label>
          </div>
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo4" id="todoCheck4">
            <label for="todoCheck4"></label>
          </div>
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo5" id="todoCheck5">
            <label for="todoCheck5"></label>
          </div>
          <span class="text">Check your messages and notifications</span>
          <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-ellipsis-v"></i>
          </span>
          <div  class="icheck-primary d-inline ml-2">
            <input type="checkbox" value="" name="todo6" id="todoCheck6">
            <label for="todoCheck6"></label>
          </div>
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
          <div class="tools">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
          </div>
        </li>
      </ul>
    </div>-->
    
    @endauth

    @guest
        <p>Para ver el contenido <a href="/login">inicia sesion</a></p>
    @endguest

@endsection