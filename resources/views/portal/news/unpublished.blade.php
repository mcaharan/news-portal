  <div class="x_content">
 
    <div class="row" id="unpublished_news">
           
    </div>
  </div>


<script type="text/javascript">
 
  function unpublished_news() {
      
    var tempcsrf = '{!! csrf_token() !!}';

    var url = "{{ url('get_unpublished_news') }}";

    $.ajax({
       type: "POST",
       url: url,
       data: {
              _token: tempcsrf
              }, // serializes the form's elements.
        beforeSend: function() {
            $('#unpublished_news').html('');
        },
       success: function(data)
       {
        $('#unpublished_news').append(data);
       }
    });
  }
</script>

<script type="text/javascript">
  function published_news(news_id, status)
    {
      var tempcsrf = '{!! csrf_token() !!}';

      var url = 'publish_news';
      $.ajax({
       type: "POST",
       url: url,
       data: {
              news_id:news_id,
              status:status,
              _token: tempcsrf
              }, // serializes the form's elements.
        beforeSend: function() {
           
        },
       success: function(data)
       {
          var response = JSON.parse(data);
          $("#news_list").trigger("reset");
          if(status == 2)
          {
            text = 'Now News was Live';
            type = 'success';
          }
          else
          {
            text = 'News was moved to Removed list';
            type = 'danger';
          }
          new PNotify({
              title: response,
              text: text,
              type: type,
              styling: 'bootstrap3'
          }); // show response from the php script.

          $('#'+news_id).fadeOut();
       }
      });
    }
</script>