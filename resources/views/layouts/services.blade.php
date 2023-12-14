  
  
<section id="services">
  <div class="container-fluid " >
    <h1 class=" text-center mt-5"> Services Provided</h1>
    <div class="container p-5">




        {{-- Add services  --}}
        @if(Auth::user()->role == 0)
            <div class="col-lg-12 col-md-12 col-sm-12 my-3">

                <div class="card  shadow-none border-0">

                    <div class="align-self-center rounded-pill border border-primary shadow-sm m-5">
                            <div class="text-center">
                                <a href="{{route('service.create')}}" class="btn btn-unique  m-4 text-primary "
                                    ><i class="fa-solid fa-circle-plus p-1"
                                        style="color: #189daf;"></i>Add New Service</a>
                            </div>
                        
                    </div>


                </div>
            </div>
        @endif
        {{-- end of add services --}}



        {{-- looping services--}}
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">

 
           
            @foreach($datas as $data)

            <div class="col-lg-3 col-md-6 col-sm-6 g-3 my-3">
                
                <div class="card h-100 shadow-sm">
                    <div class="text-center">
                        <div class="img-hover-zoom img-hover-zoom--colorize">
                            <img class="shadow" src="{{asset('image/'.$data->pic)}}"
                                alt="Thumbnile">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="clearfix mb-3">
                        </div>
                        <div class="my-2 text-center">
                            <h3>{{$data->topic}}</h3>
                        </div>
                        <div class="mb-3">
                            <h2 class="text-uppercase text-center role">{{$data->description}}</h2>
                        </div>
                        
                        @if (Auth::user()->role == 0)
                            <div class="row ">
                                <div class="col-3 mx-1">
                                    <a href="{{route('edit.service',$data->id)}}" class="btn btn-warning"title="update"  >
                                        <i class="fa-solid fa-file-pen"></i>
                                    </a>
                                    
                                    
                                </div>
                                
                                <div class="col-4 ">

                                        <div class="text-center">
                                          
                                               <form action="{{url('/destroy',$data->id)}} "method="POST">
                                                @method('DELETE')
                                                @csrf
    
                                            <button type="submit" class="btn btn-danger btn-rounded mb-4"onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </div>
                                    
                                </div>
                            </div>

                      
                        @endif
                    </div>
                </div>
            </div>

            

            @endforeach



        </div>
        {{--  form for customer booking--}}

        @if (Auth::user()->role == 1)
        <div class="text-center">
            <a href="{{route('booking')}}" class="btn btn-primary btn-rounded mb-4" 
                >Book Now</a>
                
        </div>
        @endif
        {{--end of  form for customer booking--}}

    </div>




</div>
</section>