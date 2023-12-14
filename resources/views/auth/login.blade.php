<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
  
        <div class="container">
            <!-- /.login-logo -->
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 mt-5">
              <div class="card-header text-center bg-light">
                <a href="" style="text-decoration:none; colour:black"class="h1"><b>Bike</b>Service App</a>
              </div>
              <div class="card-body bg-light ">
                <p class="login-box-msg">Sign in to start your session</p>
                @if(session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
              
              @endif
                <form action="{{url('/loginpost')}}" method="POST"class="">
                  @csrf
                  <div class="input-group mb-3 ">
                    <input type="email||number" class="form-control "name="id"required placeholder="Email or Phonr number">
          
          
                   
                    
                  </div>
                  <div class="input-group mb-3 ">
                    <input type="password" class="form-control "name="password"required placeholder="Password">

                    
                   
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember"name="remember">
                        <label for="remember">
                          Remember Me
                        </label>
                      </div>
                    </div>
                  </div>
                  <br>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-4">
                            <a href="{{url('/register')}}" class="btn btn-primary btn-block">Register</a>
                          </div>
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    
                    <!-- /.col -->
                  </div>
                </form>
          
               
                <!-- /.social-auth-links -->
          
                
               
              </div>
              <!-- /.col -->
              <div class="col-md-4">
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>