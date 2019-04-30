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
                    <h2><i class="fa fa-bars"></i> Advertisement</h2>
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
                        <li class="active"><a href="#underfeaturednews" data-toggle="tab">Under Featured News</a>
                        </li>
                        <li><a href="#sidebartop" data-toggle="tab">Side Bar Top</a>
                        </li>
                        <li><a href="#sidebarbottom" data-toggle="tab">Side Bar Bottom</a>
                        </li>                        
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="underfeaturednews">
                          @include('portal.advertisement.UFN')
                        </div>
                        <div class="tab-pane" id="sidebartop">  
                          @include('portal.advertisement.SBT')
                        </div>
                        <div class="tab-pane" id="sidebarbottom"> 
                           @include('portal.advertisement.SBB')
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

@section('portal-script')
<script type="text/javascript">
    $(document).ready(function(){
    
        tinymce.init({
            plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern imagetools jbimages"],
            selector: ".tinyeditor",
            //images_upload_url: "postAcceptor.php",
            //images_upload_credentials: true,
             file_picker_callback: function(field_name, url, type, win) {
                    if(type=='image') $('#my_form input').click();
                },
                toolbar: "insertfile undo redo | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages emoticons",
                relative_urls: false,
                //menubar:false
                menubar: "file edit insert view format table tools",
                 height : "580"

        });
    });
</script>
@endsection


