<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>"
                            class="nav-link active">Employee List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i>
                    My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <form action="<?php echo e(route('employees.update', ['employee' => $employee->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="p-5 bg-light rounded-3 border">
                        <div class="mb-3 text-center">
                            <i class="bi-person-circle fs-1"></i>
                            <h4>Edit Employee</h4>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo e($employee->firstname); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo e($employee->lastname); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($employee->email); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" value="<?php echo e($employee->age); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select class="form-select" id="position" name="position">
                                <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($position->id); ?>" <?php echo e($position->id == $employee->position_id ? 'selected' : ''); ?>>
                                        <?php echo e($position->name); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-dark btn-lg mt-3">
                                    <i class="bi-arrow-left-circle me-2"></i> Cancel
                                </a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3">
                                    <i class="bi-check-circle me-2"></i> Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
<?php /**PATH E:\Varhan Kuliah\KULIAH\Semester 4\modul5\resources\views/employee/edit.blade.php ENDPATH**/ ?>