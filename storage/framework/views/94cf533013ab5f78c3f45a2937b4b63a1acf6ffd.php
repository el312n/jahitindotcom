<?php $__env->startSection('content'); ?>
<div class="section">
    <div class="container">
        <div class="row">
          <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#pendingTransaction">Pending Transaction</a></li>
          </ul>
          <div class="tab-content">
            <div id="pendingTransaction" class="tab-pane fade in active">
              <h3>List Transaction Not Complete</h3>
              <div class="list-group">
                <?php if(count($listTransaksis)==0): ?>
                  <h1>Belum Ada Pesanan</h1>
                <?php else: ?>
                  <?php $__currentLoopData = $listTransaksis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listTransaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="controlweb/detailPesanan?id=<?php echo e($listTransaksi->kodeTrans); ?>" class="list-group-item">
                      <h4 class="list-group-item-heading">No Transaksi : <?php echo e($listTransaksi->kodeTrans); ?></h4>
                      <p class="list-group-item-text">Nama Customer : <?php echo e($listTransaksi->nama); ?><br>
                      Telepon : <?php echo e($listTransaksi->telepon); ?><br>
                      Email : <?php echo e($listTransaksi->email); ?><br>
                      <?php if($listTransaksi->statusJahitan==0): ?>
                        Status : Sedang Diproses oleh admin
                      <?php elseif($listTransaksi->statusJahitan==1): ?>
                        Status : Menunggu Pembayaran
                      <?php elseif($listTransaksi->statusJahitan==3): ?>
                        Status : Pembayaran Telah Dikirim
                      <?php elseif($listTransaksi->statusJahitan==4): ?>
                        Status : Diproses Oleh Penjahit
                      <?php elseif($listTransaksi->statusJahitan==5): ?>
                        Status : Pesanan Telah Dikirim
                      <?php endif; ?>
                      </p>
                    </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
                
              </div>
              <div class="section">
                <div class="container">
                  <div class="row">
                    <?php echo $listTransaksis->render(); ?>

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