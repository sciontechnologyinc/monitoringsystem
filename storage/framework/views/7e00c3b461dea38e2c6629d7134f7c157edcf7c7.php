<?php $__env->startSection('content'); ?>
     <section class="content">
         <div id="test">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>
                <task-list></task-list>
                <task-form></task-form>
            </div>
         </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>