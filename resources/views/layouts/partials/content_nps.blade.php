<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">{{ trans('text.title_nps')}}</h2>
            <p class="text-center wow fadeInDown">{{ trans('text.content_title_nps')}}</p>

        </div>

        <div class="row">
            <div class="col-sm-4">
              <h3 class="column-title">{{ trans('text.title_puntacion_abrev')}}</h3>
              <div id="bluecircle" data-percent="83" class="big"></div>
            </div>
            <div class="col-sm-8">
                <h3 class="column-title">{{ trans('text.title_puntacion')}}</h3>
                <strong>{{ trans('text.title_puntacion_hot')}}</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="89">89%</div>
                </div>
                <strong>{{ trans('text.title_puntacion_edu')}}</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="71">71%</div>
                </div>
                <strong>{{ trans('text.title_puntacion_cor')}}</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                </div>
            </div>
            <div class="col-sm-12">
              <strong>{{ trans('text.title_puntacion_mes')}}</strong>
            </div>
        </div>
    </div>
</section><!--/#meet-team-->
