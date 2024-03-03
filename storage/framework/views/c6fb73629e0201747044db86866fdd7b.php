<?php $__env->startSection('Title','Manage Student'); ?>

<?php $__env->startSection('body'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <div class="card">

                    <div class="card-body table-responsive">
                        <h6 class="">Student List</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Batch</th>
                                <th>Image</th>
                                <th>Action</th>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($student->name); ?></td>
                                        <td><?php echo e($student->student_id); ?></td>
                                        <td><?php echo e($student->batch); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset($student->image)); ?>" alt="" height="50px" width="50px">
                                        </td>

                                        <td class="d-flex">
                                            <a href="<?php echo e(route('student.show',$student->id)); ?>" class="btn btn-success m-1">Show</a>
                                            <a href="<?php echo e(route('student.edit',$student->id)); ?>" class="btn btn-primary m-1">Edit</a>

                                            <form action="<?php echo e(route('student.destroy',$student->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <button type="submit" class="btn btn-danger btn-sm float-start m-1"
                                                        onclick="return confirm('Are you want to delete this !!!')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server-3\htdocs\complete-crud\resources\views/website/home/index.blade.php ENDPATH**/ ?>