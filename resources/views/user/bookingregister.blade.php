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

{{-- service booking form--}}
<body>

    @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif

    <div class="container">
       
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 mt-5">
                <div class="card-header text-center bg-light">
                    <a href="" style="text-decoration:none; colour:black"class="h1"><b>Booking</a>
                </div>
                <div class="card-body bg-light ">
                    <form action="{{ url('/bookingpost') }}" class="" method="POST" novalidate>
                        @csrf
                        <div class="form-group has-validation">
                            <label for="name">Bike Model</label>
                            <input type="text" name="model" id="model"
                                class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" required
                                value="{{ old('model') }}">
                            @if ($errors->has('model'))
                                <span class="invalid-feedback">
                                    <strong> {{ $errors->first('model') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-validation">
                            <label for="name">Bike Number</label>
                            <input type="text" name="b_number" id="b_number"
                                class="form-control {{ $errors->has('b_number') ? 'is-invalid' : '' }}" required
                                value="{{ old('model') }}">
                            @if ($errors->has('b_number'))
                                <span class="invalid-feedback">
                                    <strong> {{ $errors->first('b_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-validation">
                            <label for="email">Current Date</label>
                            <input type="date" name="date" id="email"
                                class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" required>
                            @if ($errors->has('date'))
                                <span class="invalid-feedback">
                                    <strong> {{ $errors->first('date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-3 has-validation">
                            <label for="exampleSelect">services</label>
                            <select name="service" id="services" multiple
                                class="form-control selectpicker {{ $errors->has('service') ? 'is-invalid' : '' }}"
                                required>
                                @foreach ($datas as $data)
                                    <option>{{ $data->topic }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('service'))
                                <span class="invalid-feedback">
                                    <strong> {{ $errors->first('service') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-2"> <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="col-md-2"> <button type="submit" class="btn btn-primary">confirm </button>
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
