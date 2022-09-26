
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800 text-center">Kegiatan</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/menu/kegiatan/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
            </div>

            <div class="card-body">
                
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Program</th>
                                <th>Nama Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kegiatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($kegiatan->user->id == Auth::user()->id): ?>
                                    <tr>
                                        <td><?php echo e($kegiatan->program->name_program); ?></td>
                                        <td><?php echo e($kegiatan->name_kegiatan); ?></td>
                                        <td align="center">
                                            <a href="/menu/kegiatan/<?php echo e($kegiatan->id); ?>/edit" class="btn btn-warning"><i class="fas fa-fw fa-pen-square"></i></a>
                                            <form action="/menu/kegiatan/<?php echo e($kegiatan->id); ?>" method="post" class="d-inline">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin menghapur tujuan : <?php echo e($kegiatan->name_kegiatan); ?> ?')">
                                                        <i class="fas fa-fw fa-trash"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/Kegiatan/index.blade.php ENDPATH**/ ?>