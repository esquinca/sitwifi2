<header id="header">
  <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="top-links"> <a href="{{ url('lang/es') }}">ES</a> | <a href="{{ url('lang/en') }}">EN</a></div>
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#home"><img src="../img/logo.png" alt="logo"></a>
          </div>
          <div class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="scroll active"><a href="#home">{{ trans('text.company')}}</a></li>
                <li class="scroll"><a href="#services">{{ trans('text.title_two')}}</a></li>
                <li class="scroll"><a href="#solutions">{{ trans('text.solutions')}}</a></li>
                <li class="scroll"><a href="#customers">{{ trans('text.customers')}}</a></li>
                <li class="scroll"><a href="#products">{{ trans('text.title_four')}}</a></li>
                <li class="scroll"><a href="#infrastructure">{{ trans('text.infrastructure')}}</a></li>
                <li class="scroll"><a href="#contfreewifi">{{ trans('text.freewifi')}}</a></li>
                <li class="scroll"><a href="#contactdos">{{ trans('text.contact')}}</a></li>
              </ul>
          </div>
      </div><!--/.container-->
  </nav><!--/nav-->
</header><!--/header-->
