@extends('layouts.portal')

@section('portal-content')

<div class="main_container">
  @include('portal.menu')
  @include('portal.topmenu')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total News</span>
        <div class="count" id="pagecount"> </div>
       {{--  <span class="count_bottom"><i class="green">4% </i> From last Week</span> --}}
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Total Live News</span>
        <div class="count">123.50</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Waiting for Approve</span>
        <div class="count green">2,500</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Page Viewer</span>
        <div class="count">4,567</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i>Total Archived News</span>
        <div class="count">2,315</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
      </div>
    </div>
    <p>Month Wise (April)</p>
    
    <!-- /top tiles -->

    <div class="col-md-3 col-sm-12 col-xs-12">
      <div>
        <div class="x_title">
          <h2>Top News</h2>
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
        <ul class="list-unstyled top_profiles scroll-view">
          <li class="media event">
            <a class="pull-left border-aero profile_thumb">
              <i class="fa fa-user aero"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-green profile_thumb">
              <i class="fa fa-user green"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-blue profile_thumb">
              <i class="fa fa-user blue"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-aero profile_thumb">
              <i class="fa fa-user aero"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-green profile_thumb">
              <i class="fa fa-user green"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <div class="x_title">
          <h2>Top News (Month)</h2>
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
        <ul class="list-unstyled top_profiles scroll-view">
          <li class="media event">
            <a class="pull-left border-aero profile_thumb">
              <i class="fa fa-user aero"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-green profile_thumb">
              <i class="fa fa-user green"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-blue profile_thumb">
              <i class="fa fa-user blue"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-aero profile_thumb">
              <i class="fa fa-user aero"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
          <li class="media event">
            <a class="pull-left border-green profile_thumb">
              <i class="fa fa-user green"></i>
            </a>
            <div class="media-body">
              <a class="title" href="#">Ms. Mary Jane</a>
              <p><strong>$2300. </strong> Agent Avarage Sales </p>
              <p> <small>12 Sales Today</small>
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Recent Activities <small>Sessions</small></h2>
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
            <div class="dashboard-widget-content">

              <ul class="list-unstyled timeline widget">
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


@section('portal-script')
<script>
  var tempcsrf = '{!! csrf_token() !!}';

//file upload start
$(document).ready(function()
{
 
$.get( "get_page_count" ).then(
  function(data) {
    var count = JSON.parse(data);

    document.cookie = "var1="+count[0]['count'];

   
    $.ajax({
     type: "POST",
     url: 'save_page_count',
     data: {
          _token: tempcsrf,
            }, // serializes the form's elements.
     success: function(data)
     {
      var count = JSON.parse(data);
      $('#pagecount').text(count[0]['count']);
     }
    });
  }, function(data) {
    alert( "$.get failed!" );
  }
);

    
});

</script>
@endsection