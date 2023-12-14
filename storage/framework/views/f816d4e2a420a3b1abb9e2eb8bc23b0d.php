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

        <?php if(session()->has('message')): ?>
   <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
   <?php endif; ?>

   
        <div class="container">
            <!-- /.login-logo -->
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 mt-5">
              <div class="card-header text-center bg-light">
                <a href="" style="text-decoration:none; colour:black"class="h1"><b>Elite Bike</a>
              </div>
              <div class="card-body bg-light ">
                <form action="<?php echo e(url('/registerpost')); ?>" class="" method="POST" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control <?php echo e($errors->has('name')?'is-invalid':''); ?>" required value="<?php echo e(old('name')); ?>">
                        <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback">
                            <strong> <?php echo e($errors->first('name')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group has-validation">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control <?php echo e($errors->has('email')?'is-invalid':''); ?>" required value="<?php echo e(old('email')); ?>">
                        <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong> <?php echo e($errors->first('email')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group mb-3 has-validation">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" id="phone" class="form-control  <?php echo e($errors->has('phone')?'is-invalid':''); ?>" required value="<?php echo e(old('phone')); ?>">
                        <?php if($errors->has('phone')): ?>
                        <span class="invalid-feedback">
                            <strong> <?php echo e($errors->first('phone')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password"name="password" class="form-control" id=""required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                      <input type="password"name="password_confirmation" class="form-control" id=""required>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-2"> <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Back</a></div>
                      <div class="col-md-2"> <button type="submit" class="btn btn-primary">Login</button></div>
                     
                  </div>
                </form>
            <!-- /.social-auth-links -->
          
                
               
          </div>
          <!-- /.col -->
          <div class="col-md-3">
          </div>
        </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/auth/register.blade.php ENDPATH**/ ?>