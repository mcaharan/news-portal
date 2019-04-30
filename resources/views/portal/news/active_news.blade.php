  <div class="x_content">

    <div class="row" id="active_news">
      
      @if(empty($live_news[0]))
        <div class="x_content bs-example-popovers">
          <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>No Active News</strong>
          </div>
        </div>
      @else
        @foreach($live_news as $live_news)

        <div class="col-md-55" id="{{ $live_news->news_id }}">
          <div class="thumbnail">
            <div class="image view view-first">
              <img style="width: 100%; display: block;" src="uploads/{{ $live_news->news_thumbile }}" alt="image" />
              <div class="mask">
                <div class="tools tools-bottom">
                  <a href="#"><i class="fa fa-link"></i></a>
                  <a href="#" onclick="published_news({{ $live_news->news_id }},2)" ><i class="fa fa-check"></i></a>
                  <a href="#" onclick="published_news({{ $live_news->news_id }},0)"><i class="fa fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="caption">
              <p>{{ $live_news->news_title }}</p>
            </div>
          </div>
        </div>
        @endforeach
      @endif
        
    </div>
  </div>

@section('portal-script2')
  <script type="text/javascript">
  function active_news() {

    var tempcsrf = '{!! csrf_token() !!}';

    var url = "{{ url('get_live_news') }}";

    $.ajax({
       type: "POST",
       url: url,
       data: {
              _token: tempcsrf
              }, // serializes the form's elements.
        beforeSend: function() {
            $('#active_news').html('');
        },
       success: function(data)
       {
        $('#active_news').append(data);
       }
    });
  }

  </script>
@endsection