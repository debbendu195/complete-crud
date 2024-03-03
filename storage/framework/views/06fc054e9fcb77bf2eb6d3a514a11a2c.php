<?php $__env->startSection('Title','Show Student Details'); ?>

<?php $__env->startSection('body'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">Student Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Student Name:</b> <?php echo e($student->name); ?></p>
                                <p><b>Student ID:</b> <?php echo e($student->student_id); ?></p>
                                <p><b>Batch:</b> <?php echo e($student->batch); ?></p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo e(asset($student->image)); ?>" height="200px" width="200px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server-3\htdocs\complete-crud\resources\views/website/home/show.blade.php ENDPATH**/ ?>