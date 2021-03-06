


@extends('layouts.seller')

<?php
App::setLocale(Session::get('locale'));
?>

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
         
            <h1 class="m-0 text-dark">{{ __('message.seller.shop_worker') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
           
          {{-- @include('admin.include') --}}
        @if(count((array)$data) > 0)
                <div class="row">
                  <div class="col-md-12">
                    <div class="car">
                      <div class="card-header">
                        <h5 class="card-title">{{ __('message.seller.shop_worker') }}</h5>

                        {{-- <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                          
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                          </button>
                        </div> --}}
                      </div>
                    
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>{{ __('message.seller.first_name') }}</th>
                              <th>{{ __('message.seller.middle_name') }}</th>
                              <th>{{ __('message.seller.last_name') }}</th>
                              <th>{{ __('message.seller.gender') }}</th>
                              <th>{{ __('message.seller.email') }}</th>
                              <th>{{ __('message.seller.phone') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                          
{{-- Full texts	
	

Full texts	
id
user_id
owner_id
shop_id
fname
mname
lname
gender
phone
email
created_at
upd
--}}
                                @foreach($data as $value)
                                    <tr>
                                      <td>{{$value->fname}}</td>
                                      <td>{{$value->mname}}</td>
                                      <td>{{$value->lname}}</td>
                                      <td>{{$value->gender}}</td>
                                      <td>{{$value->email}}</td>
                                      <td>{{$value->phone}}</td>
                                     
                                    </tr>
                                @endforeach
                          
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>{{ __('message.seller.first_name') }}</th>
                              <th>{{ __('message.seller.middle_name') }}</th>
                              <th>{{ __('message.seller.last_name') }}</th>
                              <th>{{ __('message.seller.gender') }}</th>
                              <th>{{ __('message.seller.email') }}</th>
                              <th>{{ __('message.seller.phone') }}</th>
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
                  <h5 class="card-title">Users</h5>

                  <div class="card-tools">
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
                        <th>{{ __('message.seller.first_name') }}</th>
                        <th>{{ __('message.seller.middle_name') }}</th>
                        <th>{{ __('message.seller.last_name') }}</th>
                        <th>{{ __('message.seller.gender') }}</th>
                        <th>{{ __('message.seller.email') }}</th>
                        <th>{{ __('message.seller.phone') }}</th>
                      </tr>
                      </thead>
                      <tbody>
                   
                    
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>{{ __('message.seller.first_name') }}</th>
                        <th>{{ __('message.seller.middle_name') }}</th>
                        <th>{{ __('message.seller.last_name') }}</th>
                        <th>{{ __('message.seller.gender') }}</th>
                        <th>{{ __('message.seller.email') }}</th>
                        <th>{{ __('message.seller.phone') }}</th>
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

       

     

      


        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
@endsection

  