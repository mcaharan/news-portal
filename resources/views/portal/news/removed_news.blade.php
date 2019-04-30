  <div class="x_content">

    <div class="row" id="removed_news">        
    </div>
  </div>

  <script type="text/javascript">
    function removed_news() {

      var tempcsrf = '{!! csrf_token() !!}';

      var url = "{{ url('get_removed_news') }}";

      $.ajax({
         type: "POST",
         url: url,
         data: {
                _token: tempcsrf
                }, // serializes the form's elements.
          beforeSend: function() {
              $('#removed_news').html('');
          },
         success: function(data)
         {
          $('#removed_news').append(data);
         }
      });
    }
  </script>