<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Kategori Model</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="<?php echo e(url('/controlweb/kategoriModel')); ?>">
              <?php echo e(csrf_field()); ?>

              <input id="kode" type="hidden" class="form-control" name="kode" value="<?php echo e(old('kode')); ?>">
              <div class="form-group<?php echo e($errors->has('namaKategoriModel') ? ' has-error' : ''); ?>">
                <label for="namaKategoriModel" class="col-md-4 control-label">Nama Kategori Model</label>

                <div class="col-md-6">
                    <input id="namaKategoriModel" type="text" class="form-control" name="namaKategoriModel" value="<?php echo e(old('namaKategoriModel')); ?>">

                    <?php if($errors->has('namaKategoriModel')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('namaKategoriModel')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
              </div>
              <div class="form-group<?php echo e($errors->has('hargamin') ? ' has-error' : ''); ?>">
                <label for="hargamin" class="col-md-4 control-label">Harga Min</label>

                <div class="col-md-6">
                    <input id="hargamin" type="number" class="form-control" name="hargamin" value="<?php echo e(old('hargamin')); ?>">

                    <?php if($errors->has('hargamin')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('hargamin')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
              </div>
              <div class="form-group<?php echo e($errors->has('hargamax') ? ' has-error' : ''); ?>">
                <label for="hargamax" class="col-md-4 control-label">Harga Max</label>

                <div class="col-md-6">
                    <input id="hargamax" type="number" class="form-control" name="hargamax" value="<?php echo e(old('hargamax')); ?>">

                    <?php if($errors->has('hargamax')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('hargamax')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary" id="edAdd">
                          <i class="fa fa-btn fa-plus"></i> Add
                      </button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">List Kategori Model</div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th class="hidden-xs">ID</th>
                    <th>Nama Kategori</th>
                </tr> 
              </thead>
              <tbody>
                <?php $__currentLoopData = $kategorimodels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategorimodel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td align="center">
                      <a class="btn5 btn-default" onclick="editKM('<?php echo e($kategorimodel->kodeKategori); ?>')"><em class="fa fa-pencil"></em></a>
                      <?php if($kategorimodel->stsActive=='1'): ?>
                        <a class="btn5 btn-success" onclick="ubahStatus('<?php echo e($kategorimodel->kodeKategori); ?>','0','kodeKategori','kategorimodel','/controlweb/kategoriModel')"><em class="fa fa-check"></em></a>
                      <?php else: ?>
                        <a class="btn5 btn-danger" onclick="ubahStatus('<?php echo e($kategorimodel->kodeKategori); ?>','1','kodeKategori','kategorimodel','/controlweb/kategoriModel')"><em class="fa fa-times"></em></a>
                      <?php endif; ?>
                   </td>
                    <td class="hidden-xs"><?php echo e($kategorimodel->kodeKategori); ?></td>
                    <td><?php echo e($kategorimodel->namaKategori); ?></td>
                 </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-8">
                <?php echo $kategorimodels->render(); ?>

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