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


<body>

   
    <div class="container">
       
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 mt-5">
                <?php if(session()->has('message')): ?>
                <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
            <?php endif; ?>
        
                <div class="card-header text-center bg-light">
                    <a href="" style="text-decoration:none; colour:black"class="h1"><b>Edit Service</a>
                </div>
                <div class="card-body bg-light ">
                    <form id="userForm" action="<?php echo e(route('admin.update.service',$data->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form34">Service
                                Topic
                            </label>
                            <input type="text" name="topic" id="form34"value="<?php echo e($data->topic); ?>" class="form-control  <?php echo e($errors->has('topic')?'is-invalid':''); ?>">
                            <?php if($errors->has('topic')): ?>
                            <span class="invalid-feedback">
                                <strong> <?php echo e($errors->first('topic')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form34">Thumbnile
                            </label>
                            <input type="file"  name="pic" class="form-control  <?php echo e($errors->has('pic')?'is-invalid':''); ?>">
                           <img src="<?php echo e(asset('image/'.$data->pic)); ?>"width="70px"hright="70px"alt="Thumbnile">
                            <?php if($errors->has('pic')): ?>
                            <span class="invalid-feedback">
                                <strong> <?php echo e($errors->first('pic')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3 has-validation">
                            <label data-error="wrong" data-success="right" for="form8">
                                discription</label>
                                <input type="text" name="descript" id="form34"value="<?php echo e($data->description); ?>" class="form-control  <?php echo e($errors->has('descript')?'is-invalid':''); ?>">
                            
                            <?php if($errors->has('descript')): ?>
                            <span class="invalid-feedback">
                                <strong> <?php echo e($errors->first('descript')); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col-md-2"> <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary">Back</a>
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


<?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/admin/edit_service.blade.php ENDPATH**/ ?>