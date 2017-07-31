<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show
<body id="home" class="homepage">
  <!--Header - Encabezamiento -->
  @include('layouts.partials.mainheader')
  <!--Slider - Deslizador -->
  @include('layouts.partials.mainslider')
  <!--Reliability - Confiabilidad-->
  @include('layouts.partials.mainreliability')
  <!--  Contains page content -->
    <!--Know us -Conocenos-->
    @include('layouts.partials.content_know')
    <!--Service - Servicios-->
    @include('layouts.partials.content_service')
    <!--Solutions - Soluciones-->
    <!--include('layouts.partials.content_solutions')-->
    <!--Customers - Clientes-->
    @include('layouts.partials.content_customers')
    <!--Testimonial - Testimonios -->
    @include('layouts.partials.content_testimonial')
    <!--Products - Productos-->
    <!--include('layouts.partials.content_products')-->
    <!--Infrastructure - Infraestructura-->
    @include('layouts.partials.content_infrastructure')
    <!--Free wifi - Gratis Wifi-->
    @include('layouts.partials.content_free')
    <!--RRSS - Redes sociales-->
    @include('layouts.partials.content_rrss')
    <!-- NPS -->
    @include('layouts.partials.content_nps')
    <!--Contact - Contacto-->
    @include('layouts.partials.content_contact')
    <!--Formulario Zendesk -->
    @include('layouts.partials.content_formulario')
  <!-- Contains page content -->

  <!--Footer - Pie de página-->
  @include('layouts.partials.footer')


  @section('scripts')
      @include('layouts.partials.scripts')
  @show
</body>
</html>
