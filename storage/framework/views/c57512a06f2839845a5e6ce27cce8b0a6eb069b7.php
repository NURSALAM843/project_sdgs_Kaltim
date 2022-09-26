
<?php $__env->startSection('container'); ?>

    <div class="container-fluid">

        <h1 class="h3 mb-3 text-gray-800 text-center">Laporan Pencapaian TPB/SDGs</h1>

        <div class="card shadow mb-4">
            <?php if(Auth::user()->role_id != 1): ?>
                <div class="card-header py-3">
                    <a href="/menu/lp/create" class="btn btn-info"><i class="fas fa-fw fa-plus-square"></i><span>Tambah Data</span></a>
                </div>
            <?php endif; ?>

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
                            <tr align="center">
                                <th>No</th>
                                <th>Tahun</th>
                                <th>Tujuan</th>
                                <th>Nama File</th>
                                <th>File</th>
                                <?php if(Auth::user()->role_id != 1): ?>
                                <th>Aksi</th>
                                <?php elseif(Auth::user()->role_id == 1): ?>
                                <th>Sumber Data</th>
                                <?php endif; ?>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $laporan_pencapaians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($lp->user->id == Auth::user()->id): ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <?php if($lp->tahun_id == null): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($lp->tahun->name); ?></td>
                                        <?php endif; ?>
                                        <?php if($lp->tujuan_id == null): ?>
                                            <td></td>
                                        <?php else: ?>
                                        <td><?php echo e($lp->tujuan->name); ?></td>
                                        <?php endif; ?>
                                        <td><?php echo e($lp->name_file); ?></td>
                                        <td align="center" style="width: 8rem;"> <a href="/menu/lp/<?php echo e($lp->id); ?>" class="btn btn-info"><i class="fas fa-fw fa-download"></i></a></td>
                                        <td align="center" style="width: 8rem;">
                                            <a href="/menu/lp/<?php echo e($lp->id); ?>/edit" class="btn btn-warning">
                                                <i class="fas fa-fw fa-pen-square"></i>
                                            </a>
                                            <form action="/menu/lp/<?php echo e($lp->id); ?>" method="post" class="d-inline">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class=" btn btn-danger " onclick="return confirm('Apakah Yaking Menghapus File : <?php echo e($lp->name_file); ?>:')"><i class="fas fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php elseif(Auth::user()->role_id == 1): ?>
                                    <tr>
                                        <td align="center"><?php echo e($loop->iteration); ?></td>
                                        <?php if($lp->tahun_id == null): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($lp->tahun->name); ?></td>
                                        <?php endif; ?>
                                        <?php if($lp->tujuan_id == null): ?>
                                            <td></td>
                                        <?php else: ?>
                                        <td><?php echo e($lp->tujuan->name); ?></td>
                                        <?php endif; ?>
                                        <td><?php echo e($lp->name_file); ?></td>
                                        <td align="center" style="width: 8rem;"> 
                                            <a href="/menu/lp/<?php echo e($lp->id); ?>" class="btn btn-info">
                                                <i class="fas fa-fw fa-download"></i>
                                            </a>
                                        </td>
                                        <td><?php echo e($lp->user->name); ?></td>
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
<?php echo $__env->make('Menu.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/LaporanPencapaian/index.blade.php ENDPATH**/ ?>