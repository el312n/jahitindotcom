<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">List Penjahit</div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th class="hidden-xs">ID</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Email</th>
                </tr> 
              </thead>
              <tbody>
                <?php $__currentLoopData = $listPenjahits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listPenjahit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td align="center">
                      <a class="btn3 btn-danger" href="/controlweb/detailPenjahit/<?php echo e($listPenjahit->kodeUser); ?>"><em class="fa fa-search"></em></a>
                    </td>
                    <td class="hidden-xs"><?php echo e($listPenjahit->kodeUser); ?></td>
                    <td><?php echo e($listPenjahit->name); ?></td>
                    <td><?php echo e($listPenjahit->alamat); ?></td>
                    <td><?php echo e($listPenjahit->propinsi); ?></td>
                    <td><?php echo e($listPenjahit->kota); ?></td>
                    <td><?php echo e($listPenjahit->telepon); ?></td>
                    <td><?php echo e($listPenjahit->email); ?></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-8">
                <?php echo $listPenjahits->render(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>