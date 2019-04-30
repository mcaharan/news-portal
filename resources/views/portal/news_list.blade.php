@extends('layouts.portal')

@section('portal-content')

<div class="main_container">
  @include('portal.menu')
  @include('portal.topmenu')

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
            {{-- <div class="col-md-12 col-sm-12 col-xs-12">
              
            </div> --}}

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> News</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#activenews" data-toggle="tab" onclick="active_news();">Active News <small style="color: green">(Published)</small></a>
                        </li>
                        <li><a href="#unpublished" data-toggle="tab" onclick="unpublished_news();">Active News <small style="color: red">(Under Review)</small></a>
                        </li>
                        <li><a href="#addNews" data-toggle="tab">Add News</a>
                        </li>
                        <li><a href="#archives" data-toggle="tab">Archives</a>
                        </li>
                        <li><a href="#removed" data-toggle="tab" onclick="removed_news();">Removed</a>
                        </li>
                        
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="activenews">
                          <p class="lead">Active News</p>
                          @include('portal.news.active_news')
                        </div>
                        <div class="tab-pane" id="unpublished">
                          <p class="lead">UnPublished News</p>
                          @include('portal.news.unpublished')
                        </div>
                        <div class="tab-pane" id="addNews">@include('portal.news.add_news')</div>
                        <div class="tab-pane" id="archives">Comming Soon</div>
                        <div class="tab-pane" id="removed">
                          <p class="lead">Removed News</p>
                          @include('portal.news.removed_news')
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>
          </div>
          <!-- /top tiles -->
        </div>

</div>

@endsection
