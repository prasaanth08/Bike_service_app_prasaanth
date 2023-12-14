<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
</head>

{{-- Edit service form--}}
<body>

   
    <div class="container">
       
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 mt-5">
                @if (session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
        
                <div class="card-header text-center bg-light">
                    <a href="" style="text-decoration:none; colour:black"class="h1"><b>Edit Service</a>
                </div>
                <div class="card-body bg-light ">
                    <form id="userForm" action="{{route('admin.update.service',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form34">Service
                                Topic
                            </label>
                            <input type="text" name="topic" id="form34"value="{{$data->topic}}" class="form-control  {{$errors->has('topic')?'is-invalid':''}}">
                            @if($errors->has('topic'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('topic')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form34">Thumbnile
                            </label>
                            <input type="file"  name="pic" class="form-control  {{$errors->has('pic')?'is-invalid':''}}">
                           <img src="{{asset('image/'.$data->pic)}}"width="70px"hright="70px"alt="Thumbnile">
                            @if($errors->has('pic'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('pic')}}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form8">
                                discription</label>
                                <input type="text" name="descript" id="form34"value="{{$data->description}}" class="form-control  {{$errors->has('descript')?'is-invalid':''}}">
                            
                            @if($errors->has('descript'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('descript')}}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-2"> <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">update</button>
                            </div>

                        </div>
                    </form>
                   



                </div>
                
                <div class="col-md-3">
                </div>
            </div>
           
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>

    <script>
        new MultiSelectTag('services') 
    </script>
</body>

</html>


