@extends('layouts.portal')

@section('portal-content')

<div class="main_container">
  @include('portal.menu')
  @include('portal.topmenu')

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Basic Settings</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                        <form id="basic_settings" data-parsley-validate class="form-horizontal form-label-left">
                              <div class="col-md-6 col-sm-6 col-xs-12">   
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_name">Owner Name
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" name="owner" id="owner" placeholder="Enter Owner Name" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_name">Site Name
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" name="site_name" id="site_name" placeholder="Enter Site Name" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_name">Company Email 
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" name="company_email" id="company_email" placeholder="Enter Email" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_name">Current Logo
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div id="display_logo"><img width="30%" src=""></div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_name">Change Logo
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div id="fileuploader">Upload</div>
                                        <input type="hidden" name="logo" id="logo">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">Company Cell  
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" name="cell" id="cell" placeholder="Enter Cell Number" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_address">Facebook
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <input class="form-control" type="text" name="facebook" id="facebook" placeholder="Facebook Url" required="">
                                    </div>
                                </div>

                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">Company About Us 
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                       <textarea name="ccontent" id="ccontent" rows="10" class="form-control tinyeditor"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_address">Twitter
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input class="form-control" type="text" name="twitter" id="twitter" placeholder="Enter Twitter" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_address">Instragram
                                    </label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                         <input class="form-control" type="text" name="instragram" id="instragram" placeholder="Enter Instragram" required="">
                                    </div>
                                </div>
                              </div>

                            <div class="x_title">
                                <div class="clearfix"></div>
                            </div>
                            <a href="#" class="btn btn-primary">Cancel</a>
                            <input type="submit" value="Save" class="btn btn-success" name="insert_btn" >
                        </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /top tiles -->
        </div>

</div>

@endsection



@section('portal-script')
<script>
  var tempcsrf = '{!! csrf_token() !!}';

//file upload start
$(document).ready(function()
{
    
    $("#fileuploader").uploadFile({
      url:"uploadfile",
      fileName:"myfile",
      showPreview:true,
      formData : { _token:tempcsrf },
      onSuccess: function (files, data, xhr) {
        var filename = JSON.parse(data);
        $('#logo').val(filename);
      }
    });


    //get form data

    $.ajax({
     type: "POST",
     url: 'get_basic_settings',
     data: {_token: tempcsrf}, // serializes the form's elements.
     success: function(data)
     {
        var basic_settings = JSON.parse(data);
        
        $('#display_logo img').attr('src','uploads/'+basic_settings[0]['logo']);
        $('#owner').val(basic_settings[0]['owner_name']);
        $('#site_name').val(basic_settings[0]['site_name']);
        $('#company_email').val(basic_settings[0]['site_email']);
        $('#logo').val(basic_settings[0]['logo']);
        $('#cell').val(basic_settings[0]['cell']);
        $('#facebook').val(basic_settings[0]['facebook']);
        $('#ccontent').val(basic_settings[0]['aboutus']);
        $('#twitter').val(basic_settings[0]['twitter']);
        $('#instragram').val(basic_settings[0]['insta']);
     }
    });


});

//file upload ends

//form insert and update start
$('#basic_settings').on('submit',function (e) {
  e.preventDefault();
  
  var owner = $('#owner').val();
  var site_name = $('#site_name').val();
  var company_email = $('#company_email').val();
  var logo = $('#logo').val();
  var cell = $('#cell').val();
  var facebook = $('#facebook').val();
  var aboutus = $('#ccontent').val();
  var twitter = $('#twitter').val();
  var instragram = $('#instragram').val();

  var url = "{{ url('basic_settings') }}";

  $.ajax({
     type: "POST",
     url: url,
     data: {owner:owner,
                  site_name:site_name,company_email:company_email,logo:logo,cell:cell,facebook:facebook,aboutus:aboutus,twitter:twitter,instragram:instragram,_token: tempcsrf}, // serializes the form's elements.
     success: function(data)
     {

        var response = JSON.parse(data);
        new PNotify({
              title: response,
              text: 'Form Data was '+response,
              type: 'success',
              styling: 'bootstrap3'
          }); // show response from the php script.
     }
  });
});
//form insert and update end
</script>
@endsection