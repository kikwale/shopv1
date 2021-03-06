

      @extends('layouts.owner')
      @section('content')
          <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
      
                     {{-- <!-- Info boxes -->
       <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-i elevation-1" style="background-color:#006699" ><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Total O-level {{Session::get('owner_id')}} {{Session::get('shop_id')}}</span>
              <span class="info-box-number">
              3546
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg- elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Total A-level</span>
              <span class="info-box-number">4354</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-in elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Undergraduates</span>
              <span class="info-box-number">2242</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-inf elevation-1" style="background-color:#006699"><i class="fas fa-users text-white"></i></span>
    
            <div class="info-box-content">
              <span class="info-box-text">Graduates</span>
              <span class="info-box-number">443</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row --> --}}


              <div class="row mb-2">
                <div class="col-sm-6">
               
                  <h1 class="m-0 text-dark">Dashboard</h1><br><br>

                </div><!-- /.col -->
                <div class="col-sm-6">
                
                </div><!-- /.col -->

                <div class="row">
                  <div class="col-sm-1">
                
                  </div><!-- /.col -->

                  <div class="col-sm-10">
                    <h5 class="text-warning"><b> {{ __('message.owner_adding_emplo_guide') }}</b></h5>
                  </div><!-- /.col -->
                 
                  <div class="col-sm-1">
                
                  </div><!-- /.col -->
                </div>
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
            
              @if (session('success'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Waoo!</strong> {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
                 

                {{-- @include('admin.include') --}}
              @if(count((array)$data) > 0)
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <h5 class="card-title">Employees</h5>
      
                              <div class="card-tools">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" data-card-widget="collapse">
                                    Add Employee
                                   </button>

                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                                
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                  <i class="fas fa-times"></i>
                                </button>
                              </div>
                            </div>
                          
                              <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                
      {{-- Full texts	
        
   id	name	owner_id	shop_id	category	unit	quantity	amount	purchased_price	sold_price	expire	created_at	updated_at	
      --}}
                            @foreach($data as $value)
                            <tr>
                              <td>{{$value->fname}}</td>
                              <td>{{$value->mname}}</td>
                              <td>{{$value->lname}}</td>
                              <td>{{$value->gender}}</td>
                              <td>{{$value->phone}}</td>
                              <td>{{$value->email}}</td>
                            
                          
                              <td>
                            
                              <a class="btn btn-info btn-sm" href="owner-edit-employee?id={{$value->id}}&&dhfjhdhgfjhgfjdhfhghguh@#gfdf$=5hj5hjg$3$$$$$#*^fg">
                                <i class="fas fa-edit">
                                </i> 
                            edit
                            </a>
                              <a class="btn btn-danger btn-sm" href="owner-delete-employee?id={{$value->id}}">
                                  <i class="fas fa-trash">
                                  </i>
                                  Delete
                              </a>
                              </td>
                            </tr>
                        @endforeach
                                
                                  </tbody>
                                  <tfoot>
                                  <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Action</th>
                                  </tr>
                                  </tfoot>
                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
              @else
              
              <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Workers</h5>
  
                        <div class="card-tools">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" data-card-widget="collapse">
                           add
                          </button>
              
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Middle Name</th>
                              <th>Gender</th>
                              <th>Phone</th>
                              <th>email</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                         
                          
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Middle Name</th>
                              <th>Gender</th>
                              <th>Phone</th>
                              <th>email</th>
                              <th>Action</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
      
              @endif
      
             
              @include('owner.worker_modal')
           
      
      
              </div>
              <!-- /.row -->
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        
      @endsection
      
        