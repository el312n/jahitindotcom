<?php $__env->startSection('content'); ?>
  <main role="main" class="container">
    <?php if(session()->has('ok')): ?>
      <?php echo $__env->make('partials/error', ['type' => 'success', 'message' => session('ok')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>  
    <?php if(isset($info)): ?>
      <?php echo $__env->make('partials/error', ['type' => 'info', 'message' => $info], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->yieldContent('main'); ?>
  </main>
  <section id="home" class="home">
    <div class="overlay">
        <img src="<?php echo e(asset('/img/a.png')); ?>" alt="" style="width:100%;height:750px;" />
    </div>
  </section>
  <section id="about" class="service">
    <div class="container">
      <div class="row">
        <div class="main_service_area sections text-center">
          <div class="head_title text-center">
             <h2>Why Choose Us?</h2>
          </div>
          <div class="col-sm-4">
            <div class="single_service">
              <div class="single_service_icon">
                  <img src="<?php echo e(asset('/img/5.png')); ?>" alt="" />
              </div>

              <h3>WE OFFER YOU EXCLUSIVENESS!</h3>
              <p>Kami mempersembahan layanan exclusive dalam mewujudkan pakaian impian dengan memperhatikan detail detail disetiap sentuhan.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single_service">
              <div class="single_service_icon">
                  <img src="<?php echo e(asset('/img/6.png')); ?>" alt="" />
              </div>
              <h3>FIND YOUR PERSONAL TAILOR!</h3>
              <p>Miliki personal tailor yang akan memahami dengan tepat keinginanmu agar kamu merasakan pengalaman menyenangkan dalam menjahit pakaian yang belum pernah kamu rasakan sebelumnya.</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="single_service">
              <div class="single_service_icon">
                  <img src="<?php echo e(asset('/img/7.png')); ?>" alt="" />
              </div>
              <h3>MAKE YOUR DREAM CLOTHES!</h3>
              <p>Hadiri event spesial dengan pakaian impian-mu agar semua mata tertuju padamu.</p>
            </div>
          </div>
          <center><a type="button" class="btn btn-primary" href="<?php echo e(url('/order')); ?>"><b>ORDER NOW</b></a></center>
        </div>
      </div>
    </div>
  </section>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>