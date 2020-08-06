@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row" style="display: inline-block;">
  <div class="tile_count">
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
      <div class="count green">{{ count($user) }}</div>
      <span class="count_bottom"><i class="green">4% </i>From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-video-camera"></i> Total Video</span>
      <div class="count green">{{ count($video) }}</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-music"></i> Total Playlist</span>
      <div class="count green">{{ count($playlist) }}</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-thumbs-o-up"></i> Total Like</span>
      <div class="count green">{{ count($voteUp) }}</div>
      <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-thumbs-o-down"></i> Total Dislike</span>
      <div class="count green">{{ count($voteDown) }}</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4 ">
      <div class="x_panel tile fixed_height_300 overflow_hidden">
        <div class="x_title">
          <h2>Top User Subscriber</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <canvas id="chartUser" width="300" height="300"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-4 ">
      <div class="x_panel tile fixed_height_400 overflow_hidden">
        <div class="x_title">
          <h2>Top Most Video Views</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table class="" style="width:100%">
            <tbody><tr>
              <th style="width:37%;">
                <p class="text-center">Top 5</p>
              </th>
              <th>
                <div class="col-lg-6 col-md-7 col-sm-7 ">
                  <p class="">Name Video</p>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-5 text-right">
                  <p class="">Views</p>
                </div>
              </th>
            </tr>
            <tr>
              <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                <canvas id="charVideo" width="125" height="125"></canvas>
              </td>
              <td>
                <table class="tile_info">
                  <tbody>
                    @foreach(json_decode($getTopViewVideo) as $video)
                    <tr>
                    <td>
                    <p><i class="fa fa-square green"></i>{{ $video->title}}</p>
                    </td>
                    <td class="text-right">{{ $video->total_views }}</td>          
                  </tr>
                  @endforeach
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel tile fixed_height_400 overflow_hidden">
      <div class="x_title">
        <h2>Most Video Like & DisLike </h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          <canvas id="myChart" width="200" height="200"></canvas> 
      </div>
    </div>
</div>
</div>
@endsection

@section('js')
  <!-- Datatables -->
  <script src="{{ asset('../vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/Chart.js') }}"></script>
<script>
  $(document).ready(function () {
    showTopUserSubscriber();
    showTopVideoMost();
});
function showTopUserSubscriber() {
    var ctx = document.getElementById('chartUser');
    var renderData = {!! $getTopUserSubscriber !!};
    var arrayName = [];
    var arrayCountSubscribe = [];
    for (var i = 0; i < renderData.length; i++) {
      arrayName.push(renderData[i].name)
      arrayCountSubscribe.push(renderData[i].subscribe)
    }
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: arrayName,
        datasets: [{
          label: '# ',
          data: arrayCountSubscribe,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
          ],
          borderWidth: 2,

        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
}
function showTopVideoMost() {
    var ctx = document.getElementById('charVideo');
    var renderData = {!!$getTopViewVideo!!};
    var arrayNameVideo = [];
    var arrayCountView = [];
    for (var i = 0; i < renderData.length; i++) {
        arrayNameVideo.push(renderData[i].title)
        arrayCountView.push(renderData[i].total_views)
    }
    var chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: arrayNameVideo,
            datasets: [{ 
                backgroundColor: [
                  'rgba(255, 99, 132, 5)',
                  'rgba(54, 162, 235, 5)',
                  'rgba(255, 206, 86, 5)',
                  'rgba(75, 192, 192, 5)',
                  'rgba(153, 102, 255, 5)',
                ],
                borderColor: '#fff',
                data: arrayCountView,
            }]
        },
        options: {
            tooltips: {
              mode: 'nearest',
          },
        }
    });
}
</script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var renderDataLike = {!!$getTopLikeVideo!!};
  var renderDataDisLike = {!!$getTopDisLikeVideo!!};
    var arrayNameVideoLike = [];
    var arrayNameVideoDisLike = [];
    var arrayCountLike = [];
    var arrayCountDisLike= [];
    for (var i = 0; i < renderDataLike.length; i++) {
        arrayNameVideoLike.push(renderDataLike[i].title)
        arrayCountLike.push(renderDataLike[i].like)
    }
    for (var i = 0; i < renderDataDisLike.length; i++) {
        arrayNameVideoDisLike.push(renderDataDisLike[i].title)
        arrayCountDisLike.push(renderDataDisLike[i].dislike)
    }
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: arrayNameVideoLike, arrayNameVideoDisLike,
        datasets: [{
            label: 'LIKE', // Name the series
            data: arrayCountLike, // Specify the data values array
            fill: false,
            borderColor: '#2196f3', // Add custom color border (Line)
            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        },
        {
            label: 'DISLIKE', // Name the series
            data: arrayCountDisLike, // Specify the data values array
            fill: false,
            borderColor: '#4CAF50', // Add custom color border (Line)
            backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]
    },
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
  });
</script>
@endsection