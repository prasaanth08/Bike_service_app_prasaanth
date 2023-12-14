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
            <div class="col-md-6 mt-2">
                <?php if(Auth::user()->role == 0): ?>
                    <div class="card-header text-center bg-light">
                        <a href="" style="text-decoration:none"class="h1"><b>customer details & update</a>
                    </div>
                <?php elseif(Auth::user()->role == 1): ?>
                    <div class="card-header text-center bg-light">
                        <a href="" style="text-decoration:none"class="h1"><b>booking details </a>
                    </div>
                <?php endif; ?>
                <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
    <?php endif; ?>
                <div class="card-body bg-light ">
                    <form action="<?php echo e(route('admin.update.status', $customers->id)); ?>" class="" method="POST"
                        novalidate>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <div class="form-group has-validation">
                            <label for="name">Name</label>
                            <input type="text" class="form-control " readonly value="<?php echo e($customers->name); ?>">

                        </div>
                        <div class="form-group has-validation">
                            <label for="name">Email</label>
                            <input type="text" class="form-control " readonly value="<?php echo e($customers->email); ?>">

                        </div>
                        <div class="form-group has-validation">
                            <label for="name">Phone</label>
                            <input type="text" name="model" id="model" class="form-control " readonly
                                value="<?php echo e($customers->p_number); ?>">

                        </div>
                        <div class="form-group has-validation">
                            <label for="name">Bike Model</label>
                            <input type="text" id="model" class="form-control "readonly
                                value="<?php echo e($customers->b_model); ?>">

                        </div>
                        <div class="form-group has-validation">
                            <label for="name">Bike Number</label>
                            <input type="text" class="form-control " readonly value="<?php echo e($customers->b_number); ?>">

                        </div>
                        <div class="form-group has-validation">
                            <label for="email">Current Date</label>
                            <input type="date" class="form-control " readonly required
                                value="<?php echo e($customers->date); ?>">

                        </div>

                        <div class="form-group mb-3 has-validation">
                            <label for="exampleSelect">services</label>
                            <input type="text" class="form-control "readonly value="<?php echo e($customers->service_need); ?> ">

                        </div>

                        <?php if(Auth::user()->role == 0): ?>
                            <div class="form-group has-validation">
                                <label for="email">Status</label>
                                <select type="text" name="status"class="form-control ">
                                    <option><?php echo e($customers->status); ?></option>
                                    <option>Approved</option>
                                    <option>Ready to delevery</option>
                                    <option>completed</option>

                                </select>
                        <?php endif; ?>
                        <?php if(Auth::user()->role == 1): ?>
                            <div class="form-group mb-3 has-validation">
                                <label for="exampleSelect">Status</label>
                                <input type="text" class="form-control "readonly value="<?php echo e($customers->status); ?> ">

                            </div>
                        <?php endif; ?>
                </div>
                <div class="row mt-4">

                    <?php if(Auth::user()->role == 0): ?>
                        <div class="col-md-2"> <a href="<?php echo e(route('admin.customer')); ?>" class="btn btn-primary">Back</a>
                        </div>
                        <div class="col-md-4"> <button type="submit" class="btn btn-primary">Update Status </button>
                        </div>
                    <?php endif; ?>
                    <?php if(Auth::user()->role == 1): ?>
                        <div class="col-md-2"> <a href="<?php echo e(route('booking.status')); ?>" class="btn btn-primary">Back</a>
                        </div>
                    <?php endif; ?>
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
        new MultiSelectTag('services') // multiple selection option script
    </script>
</body>

</html>
<?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/layouts/customer_details.blade.php ENDPATH**/ ?>