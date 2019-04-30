  <div class="x_panel">
    <div class="x_title">
      <h2>Add News</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br />
            <form id="news_list" data-parsley-validate class="form-horizontal form-label-left">
                  <div class="col-md-12 col-sm-12 col-xs-12">   
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="student_name">News Title
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" name="news_title" id="news_title" placeholder="Enter News Title" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="student_name">News Subtitle
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" name="subtitle" id="subtitle" placeholder="Enter News Subtitle" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="student_name">News-URL
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <input class="form-control" type="text" name="news_url" id="news_url" placeholder="Enter News-URL" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="student_name">Full Description 
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                           <textarea name="ccontent" id="ccontent" rows="10" class="form-control tinyeditor"></textarea>
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="present_address">News Thumbnail Image
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div id="fileuploader">Upload</div>
                            <input type="text" name="news_img" id="news_img">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="present_address">News Category
                        </label>
                        <div class="col-md-9 col-sm-6 col-xs-12">
                            <select class="form-control" required="" name="news_cat" id="news_cat">
                                <option hidden="" selected="" value="">Select</option>
                                @foreach($category as $cat)
                                <option value="{{ $cat->id }}">{{  $cat->category_E.' - '.$cat->category_T }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="present_address">Related Tag
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input class="form-control tags1" list="tag1" name="tag1" >
                            <datalist id="tag1">
                                @foreach($news_tag as $tag)
                                <option value="{{  $tag->tag }}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input class="form-control tags2" list="tag2" name="tag2" >
                            <datalist id="tag2">
                              @foreach($news_tag as $tag)
                                <option value="{{  $tag->tag }}">
                              @endforeach
                            </datalist>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <input class="form-control tags3" list="tag3" name="tag3" >
                            <datalist id="tag3">
                              @foreach($news_tag as $tag)
                                <option value="{{  $tag->tag }}">
                              @endforeach
                            </datalist>
                        </div>
                    </div>


                  </div>

                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                <a href="#" class="btn btn-primary">Cancel</a>
                <input type="submit" id="save" value="Save" class="btn btn-success" name="insert_btn" >
            </form>
    </div>
  </div>

@section('portal-script')
<script>
  var tempcsrf = '{!! csrf_token() !!}';
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
    
    $("#fileuploader").uploadFile({
      url:"uploadfile",
      fileName:"myfile",
      showPreview:true,
      formData : { _token:tempcsrf },
      onSuccess: function (files, data, xhr) {
        var filename = JSON.parse(data);
        $('#news_img').val(filename);
      }
    });

//form insert and update start
$('#news_list').on('submit',function (e) {
  e.preventDefault();
  tinyMCE.triggerSave();
  
  var news_title  = $('#news_title').val();
  var subtitle  = $('#subtitle').val();
  var news_url  = $('#news_url').val();
  var ccontent  = $('#ccontent').val();
  var news_img  = $('#news_img').val();
  var news_cat  = $('#news_cat').val();


  var tags1  = $('.tags1').val();
  var tags2  = $('.tags2').val();
  var tags3  = $('.tags3').val();


  if(ccontent != '')
  {

    var url = "{{ url('add_news_list') }}";

    $.ajax({
       type: "POST",
       url: url,
       data: {
              news_title:news_title,
              subtitle:subtitle,
              news_url:news_url,
              ccontent:ccontent,
              news_img:news_img,
              news_cat:news_cat,
              tags1:tags1,
              tags2:tags2,
              tags3:tags3,
              _token: tempcsrf
              }, // serializes the form's elements.
        beforeSend: function() {
            $('#save').hide();
        },
       success: function(data)
       {
          $('#save').show();
          var response = JSON.parse(data);
          $("#news_list").trigger("reset");
          new PNotify({
                title: response,
                text: 'Your News was Under Review.',
                type: 'success',
                styling: 'bootstrap3'
            }); // show response from the php script.
       }
    });

  }
  else
  {
      new PNotify({
          title: 'Error',
          text: 'Kindly Fill All Fields',
          type: 'error',
          styling: 'bootstrap3'
      }); // show response from the php script.
  }
  
});
</script>
@endsection