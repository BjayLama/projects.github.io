
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coditor | Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/responsive_custom.css')); ?>">
</head>

<body>
    
  <section>
        <div class="container-fluid">
            <div class="row align-items-xl-center align-items-stretch login-sector">
                <div class="col-md-6 nopadding">
                    <div class="login-left">
                        <div class="login-bg bg-overlay">
                            <div class="logo-after">
                                <div class="icon-img">
                                    <img src="<?php echo e(asset('frontend/assets/images/icon/graduation-hat.png')); ?>" alt="">
                                </div>
                                <div class="login__title text-capitalize">
                                    Coditor | Easy learning
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 nopadding">
                    <div class="inner-padding register-form">
                        <div class="col-lg-8 offset-lg-2">
                        <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-12 col-form-label text-center"><strong><?php echo e(__('E-Mail')); ?></strong></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Send Password Reset Link')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>
  <script>
  $(document).ready(function(){
    $("#user-logout").click(function (e) {
        e.preventDefault();
        $("#logout-form").submit();
    });
  });
</script>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>



</html>
<?php /**PATH D:\xampp\htdocs\Final-year-project\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>