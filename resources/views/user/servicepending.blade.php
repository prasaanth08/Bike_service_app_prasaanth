@extends('layouts.app')

@section('index')
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif
    <section>
<section>
    <div class="content-wrapper">

  
      
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
          
            <!-- /.row -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Pending Customer List</h3>
                    
                   
               <div><a href="{{url('/user/index')}}" class="btn btn-primary"><i class="fa-solid fa-left-long"></i></a></div>
                   
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User</th>
                        
                          <th>Date</th>
                          
                          <th>service</th>
                          <th>Action</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($customers as $customer)
                       @php
                       $index=($customers->currentpage()-1)*$customers->perpage()+$loop->iteration
                   @endphp
                        <tr>
                          
                          <td>{{$index}}</td>
                          <td>{{$customer->name}}</td>
                          
                          <td>{{$customer->date}}</td>
                          
                          <td>{{$customer->service_need}}</td>
                         
                          <td><a href="{{route('user.edit.status',$customer->id)}}" class= "btn btn-secondary">View Details</a></td>
                         

                         
                        
                    
                        <td>
                          
                        @if($customer->status == 'pending')
                        <div title="update" class="btn btn-danger" >
                            
                                Pending
                        </div>
                        @elseif($customer->status== 'Approved')
                        <div class="btn btn-warning"title="update"  >
                                Approved
                              </div>
                         @elseif($customer->status == 'Ready to delevery')
                            <div class="btn btn-primary"title="update" >
                                Ready
                              </div>
                        @elseif($customer->status == 'completed')
                        <div class="btn btn-success">
                                completed
                              </div>
                        
                        
                        </td>
                          @endif
                        </tr>
                       
                          
                         
                        @endforeach
                       
                        
            </tbody>
                    </table>
                    {{$customers->links()}}
                  </div>
                  
                </div>
                
              </div>
            </div>
            
          </div>
           
          </div>
        </section>
       
    </div>
      
</section>
   
   @endsection