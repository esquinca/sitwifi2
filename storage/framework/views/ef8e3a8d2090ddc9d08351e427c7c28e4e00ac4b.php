<section id="formulario">
  <div class="container">
    <div class="section-header">
        <h2 class="section-title text-center wow fadeInDown"><?php echo e(trans('text.soporte')); ?></h2>
    </div>
    <div class="row">
        <div class="col-sm-12 wow fadeInLeft">

        </div>

        <div class="col-sm-12">
          <div class="contact-form">
           <div id="sendmessage2">Your message has been sent. Thank you!</div>
           <div id="errormessage2"></div>
           <form action="" method="post" role="form" class="FormForm" id="FormForm">
               <?php echo e(csrf_field()); ?>

                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico." data-rule="email" data-msg="Por favor ingrese un correo valido." />
                      <div class="validation"></div>
                  </div>
               </div>
               <div class="col-md-6 padding-right-zero">
                   <div class="form-group">
                       <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su nombre completo." data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                       <div class="validation"></div>
                   </div>
               </div>
               <div class="col-md-6 padding-right-zero">
                   <div class="form-group">
                       <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto." data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                       <div class="validation"></div>
                   </div>
               </div>
               <div class="col-md-12 padding-right-zero">
                 <div class="form-group">
                       <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Por favor escriba su mensaje o incidencia." placeholder="Su incidencia."></textarea>
                       <div class="validation"></div>
                   </div>
                 <button type="submit" id="botomsubmitform" class="btn btn-primary btn-submit">Enviar</button>
                 <a href="mailto:&#115;&#111;&#112;&#111;&#114;&#116;&#101;&#064;&#115;&#105;&#116;&#119;&#105;&#102;&#105;&#046;&#122;&#101;&#110;&#100;&#101;&#115;&#107;&#046;&#099;&#111;&#109;" class="btn btn-primary" role="button">@</a>
               </div>
           </form>
         </div>
        </div>
    </div>
  </div>
</section><!--/#bottom-->