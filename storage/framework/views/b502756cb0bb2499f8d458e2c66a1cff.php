<?php $__env->startSection('Title','Edit the student'); ?>

<?php $__env->startSection('body'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">

                    <div class="card-header">
                        <p><?php echo e(session('message')); ?></p>
                        <p> Edit the student </p>
                    </div>

                    <div class="card-body">
                        <form action="<?php echo e(route('student.update',$student->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Student Name</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Student ID</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo e($student->student_id); ?>" name="student_id">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Batch</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?php echo e($student->batch); ?>" name="batch">
                                </div>
                            </div>

                            <div class="row form-group my-3">
                                <label for="" class="form-control-label col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" value="<?php echo e($student->image); ?>" name="image">
                                    <img src="<?php echo e(asset($student->image)); ?>" class="img-fluid" alt="">
                                </div>
                            </div>

                            <button type="submit" class="col-md-12 btn btn-success">Update Info</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server-3\htdocs\complete-crud\resources\views/website/home/edit.blade.php ENDPATH**/ ?>