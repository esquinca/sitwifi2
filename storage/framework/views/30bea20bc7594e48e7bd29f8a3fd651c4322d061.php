<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('htmlheader'); ?>
    <?php echo $__env->make('layouts.partials.htmlheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>
<body id="home" class="homepage">
  <!--Header - Encabezamiento -->
  <?php echo $__env->make('layouts.partials.mainheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--Slider - Deslizador -->
  <?php echo $__env->make('layouts.partials.mainslider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--Reliability - Confiabilidad-->
  <?php echo $__env->make('layouts.partials.mainreliability', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--  Contains page content -->
    <!--Know us -Conocenos-->
    <?php echo $__env->make('layouts.partials.content_know', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Service - Servicios-->
    <?php echo $__env->make('layouts.partials.content_service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Solutions - Soluciones-->
    <!--include('layouts.partials.content_solutions')-->
    <!--Customers - Clientes-->
    <?php echo $__env->make('layouts.partials.content_customers', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Testimonial - Testimonios -->
    <?php echo $__env->make('layouts.partials.content_testimonial', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Products - Productos-->
    <!--include('layouts.partials.content_products')-->
    <!--Infrastructure - Infraestructura-->
    <?php echo $__env->make('layouts.partials.content_infrastructure', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Free wifi - Gratis Wifi-->
    <?php echo $__env->make('layouts.partials.content_free', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--RRSS - Redes sociales-->
    <?php echo $__env->make('layouts.partials.content_rrss', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- NPS -->
    <?php echo $__env->make('layouts.partials.content_nps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Contact - Contacto-->
    <?php echo $__env->make('layouts.partials.content_contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!--Formulario Zendesk -->
<<<<<<< HEAD
    <?php echo $__env->make('layouts.partials.content_zendesk', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
=======
    <?php echo $__env->make('layouts.partials.content_formulario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
>>>>>>> master
  <!-- Contains page content -->

  <!--Footer - Pie de página-->
  <?php echo $__env->make('layouts.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


  <?php $__env->startSection('scripts'); ?>
      <?php echo $__env->make('layouts.partials.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldSection(); ?>
</body>
</html>
