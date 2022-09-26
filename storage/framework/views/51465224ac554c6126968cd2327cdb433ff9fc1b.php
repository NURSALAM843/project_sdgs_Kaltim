<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
      <tr align="center">
          <th>No</th>
          <th>Kode Program</th>
          <th>Kode Kegiatan</th>
          <th>Kode & Nama Sub-Kegiatan</th>
          <th>Nama Indikator Sub Kegiatan</th>
          <th>Satuan</th>
      </tr>
  </thead>
  <tbody>
      <?php $__currentLoopData = $subkegiatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($sub->program); ?></td>
                  <td><?php echo e($sub->kegiatan); ?></td>
                  <td><?php echo e($sub->kode_sub_kegiatan); ?>. <?php echo e($sub->name_sub_kegiatan); ?></td>
                  <td><?php echo e($sub->indikator_sub); ?></td>
                  <td><?php echo e($sub->satuan); ?></td>
              </tr>
             
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table><?php /**PATH D:\laravel\project-sdgs\resources\views/Menu/SubKegiatan/table.blade.php ENDPATH**/ ?>