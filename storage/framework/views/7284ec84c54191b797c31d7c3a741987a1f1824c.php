<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
      <tr align="center">
          <?php if(Auth::user()->role_id != 7): ?>     
          <th width="5">No</th>
          <?php endif; ?>
          <th width="30">Tujuan</th>
          <th width="40" >Program</th>
          <?php if(Auth::user()->role_id == 1): ?>
          <th width="15">Sumber Data</th>
          <?php elseif(Auth::user()->role_id == 7): ?>
          <th width="15">Sumber Data</th>
          <?php endif; ?>
          <th width="10">Aksi</th>
  </thead>
  <tbody>
      <?php $__currentLoopData = $pelaporan_pembelajarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($pp->user->id == Auth::user()->id): ?>
              <tr>
                  <td align="center"><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($pp->tujuan->kode_tujuan); ?>.<?php echo e($pp->tujuan->name); ?></td>
                  <td><?php echo e($pp->name_program); ?></td>
                  <td align="center" style="width: 8rem;">
                      <a href="/menu/pp/<?php echo e($pp->id); ?>" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a>
                      <a href="/menu/pp/<?php echo e($pp->id); ?>/edit" class="btn btn-warning"> <i class="fas fa-fw fa-pen-square"></i></a>
                      <form action="/menu/pp/<?php echo e($pp->id); ?>" method="post" class="d-inline">
                          <?php echo method_field('delete'); ?>
                          <?php echo csrf_field(); ?>
                          <button class=" btn btn-danger " onclick="return confirm('Apakah Yaking Menghapus File : <?php echo e($pp->name_program); ?>:')"><i class="fas fa-fw fa-trash"></i></button>
                      </form>
                  </td>
              </tr>
          <?php elseif(Auth::user()->role_id == 1): ?>
           <tr>
                  <td align="center"><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($pp->tujuan->kode_tujuan); ?>.<?php echo e($pp->tujuan->name); ?></td>
                  <td><?php echo e($pp->name_program); ?></td>
                  <td><?php echo e($pp->user->name); ?></td>
                  <td align="center" style="width: 8rem;">
                      <a href="/menu/pp/<?php echo e($pp->id); ?>" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a>  
                  </td>
              </tr>
              
        <?php elseif(Auth::user()->role_id == 7): ?>
            <?php if($pp->tujuan->user_id == Auth::user()->id): ?>
                <tr>
                   
                    <td><?php echo e($pp->tujuan->kode_tujuan); ?>.<?php echo e($pp->tujuan->name); ?></td>
                    <td><?php echo e($pp->name_program); ?></td>
                    <td><?php echo e($pp->user->name); ?></td>
                    <td align="center" style="width: 8rem;"><a href="/menu/pp/<?php echo e($pp->id); ?>" class="btn btn-info"><i class="fas fa-fw fa-eye"></i></a></td>
                </tr>
            <?php endif; ?>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/PelaporanPembelajaran/table.blade.php ENDPATH**/ ?>