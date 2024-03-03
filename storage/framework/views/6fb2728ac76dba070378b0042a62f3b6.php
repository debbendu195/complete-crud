<?php $__env->startSection('Title','Add Student'); ?>
<?php $__env->startSection('body'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <p> <?php echo e(session('message')); ?> </p>
                            <p> Add Student </p>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('student.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row from-group my-3">
                                    <label for="" class="form-control-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Student Id</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="student_id">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Batch</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="batch">
                                    </div>
                                </div>

                                <div class="row form-group my-3">
                                    <label for="" class="form-control-label col-md-3">Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>


                                <div>
                                    <button type="submit" class="col-md-12 btn btn-primary">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server-3\htdocs\complete-crud\resources\views/website/home/add.blade.php ENDPATH**/ ?>