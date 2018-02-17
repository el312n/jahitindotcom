<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Ukuran</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/controlweb/Ukuran')); ?>">
              <?php echo e(csrf_field()); ?>

              <input id="kode" type="hidden" class="form-control" name="kode" value="<?php echo e(old('kode')); ?>">
              <div class="form-group<?php echo e($errors->has('NamaUkuran') ? ' has-error' : ''); ?>">
                <label for="NamaUkuran" class="col-md-4 control-label">Ukuran</label>

                <div class="col-md-6">
                    <input id="NamaUkuran" type="text" class="form-control" name="NamaUkuran" value="<?php echo e(old('NamaUkuran')); ?>">

                    <?php if($errors->has('NamaUkuran')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('NamaUkuran')); ?></strong>
                      </span>
                    <?php endif; ?>
                </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn4 btn-primary" id="edAdd">
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
          <div class="panel-heading">List Ukuran</div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
              <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th class="hidden-xs">ID</th>
                    <th>Nama Ukuran</th>
                </tr> 
              </thead>
              <tbody>
                <?php $__currentLoopData = $Ukurans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ukuran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td align="center">
                      <a class="btn4 btn-default" onclick="editKK('<?php echo e($Ukuran->kodeukur); ?>')"><em class="fa fa-pencil"></em></a>
                      <?php if($Ukuran->stsActive=='1'): ?>
                        <a class="btn4 btn-success" onclick="ubahStatus('<?php echo e($Ukuran->kodeukur); ?>','0','kodekategori','kategorikain')"><em class="fa fa-check"></em></a>
                      <?php else: ?>
                        <a class="btn4 btn-danger" onclick="ubahStatus('<?php echo e($Ukuran->kodeukur); ?>','1','kodekategori','kategorikain','/controlweb/kategoriKain')"><em class="fa fa-times"></em></a>
                      <?php endif; ?>
                    </td>
                    <td class="hidden-xs"><?php echo e($Ukuran->kodeukur); ?></td>
                    <td><?php echo e($Ukuran->namaukur); ?></td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col col-xs-8">
                <?php echo $Ukurans->render(); ?>

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
<script type="text/javascript">
  
</script>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>