<?php $__env->startSection('content'); ?>

<div class="container-fluid pl-50 pr-50 mt-20">
        <div class="row">
            <div class="col-md-8 offset-md-1">
                <div class="recent-access">
                    <div class="row">
                        <div class="recent__title">
                            Recent Access Courses
                        </div>
                       
                        <?php $__currentLoopData = $featured_courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 mb-20">
                            <a href="<?php echo e(route('course-single',$course->slug )); ?>">
                                <div class="card">
                                    <div class="img-card"><img src="<?php echo e(asset('storage/course/'.$course->slug.'/' .$course->image)); ?>" class="card-img-top" alt=""></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($course->coursename); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="course-view">
                    <div class="course__title">
                        Courses Overview
                    </div>
                    <div class="row text-center">
                    <?php $data = App\Course::where('semester', auth()->user()->semester_id)->get();?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 mb-20">
                            <a href="<?php echo e(route('course-single',$course->slug )); ?>">
                                <div class="card">
                                    <div class="img-card"><img src="<?php echo e(asset('storage/course/'.$course->slug.'/' .$course->image)); ?>" class="card-img-top" alt=""></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo e($course->coursename); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-12">
                        <div class="timeline-section">
                            <div class="">
                                <div class="title timeline__title">
                                    Time Line
                                </div>
                                <?php $assignments=App\Assignment::orderBy('created_at', 'DESC')->where('semester', auth()->user()->semester_id)->limit(5)->get(); ?>
                                <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="time-line">
                                    <div class="meta-date">
                                    <?php echo e(\Carbon\Carbon::parse($assignment->deadline)->format('M d, Y')); ?>

                                    </div>
                                    <div class="timeline-event">
                                        <span>
                                            <i class="fa fa-file"></i>
                                        </span>
                                        <div class="event-title">
                                            <a href="<?php echo e(route('assignment-details',['slug' => $assignment->slug])); ?>"><?php echo e($assignment->title); ?></a>
                                            <div class="event-subtitle">
                                                <?php echo e($assignment->course_detail->coursename); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Final-year-project\resources\views/welcome.blade.php ENDPATH**/ ?>