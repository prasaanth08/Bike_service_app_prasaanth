

<?php $__env->startSection('index'); ?>
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success"><?php echo e(session()->get('message')); ?></div>
    <?php endif; ?>
    <section>
        <div class="content-wrapper">




            <section class="content">
                <div class="container-fluid">


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Pending Customer List</h3>


                                </div>

                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>

                                                <th>Date</th>

                                                <th>service</th>
                                                <th>Status</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>

                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($customer->name); ?></td>

                                                    <td><?php echo e($customer->date); ?></td>

                                                    <td><?php echo e($customer->service_need); ?></td>
                                                    <?php if(Auth::user()->role == 0): ?>
                                                        <td><a href="<?php echo e(route('admin.edit.status', $customer->id)); ?>"
                                                                class= "btn btn-secondary">View&update</a></td>
                                                    <?php endif; ?>
                                                    <?php if(Auth::user()->role == 1): ?>
                                                        <td><a href="<?php echo e(route('user.edit.status', $customer->id)); ?>"
                                                                class= "btn btn-secondary">View Details</a></td>
                                                    <?php endif; ?>




                                                    <td>

                                                        <?php if($customer->status === 'pending'): ?>
                                                            <div title="update" class="btn btn-danger">

                                                                Pending
                                                            </div>
                                                        <?php elseif($customer->status === 'Approved'): ?>
                                                            <div class="btn btn-warning"title="update">
                                                                Approved
                                                            </div>
                                                        <?php elseif($customer->status === 'Ready to delevery'): ?>
                                                            <div class="btn btn-primary"title="update">
                                                                Ready
                                                            </div>
                                                        <?php elseif($customer->status === 'completed'): ?>
                                                            <div class="btn btn-success">
                                                                completed
                                                            </div>


                                                    </td>
                                            <?php endif; ?>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

        </div>
    </section>

    </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nathan\Desktop\Bike Service Application\Bike_Service-app\resources\views/layouts/customer_table.blade.php ENDPATH**/ ?>