@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
 <style>
.video-js{
    font-size: 8px;
}
.video-js .vjs-big-play-button
{
    font-size: 2em;
    height: 1.5em;
    width: 2em;
}
.vjs-big-play-centered .vjs-big-play-button
{
    left: 55%;
}
..vjs-poster{
    top: 3px ;
}
.video-js .vjs-big-play-button .vjs-icon-placeholder:before
{
    top:-3px;
}
 </style>
@endsection
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage<small>Comment</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>User</th>
                    <th style="width:300px">Video</th>
                    <th>Content</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->user->name }}</td>
                            <td>
                                <video id="my-video" class="video-js vjs-big-play-centered"  controls poster="{{ asset($comment->video->thumbnail) }}"  controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "aspectRatio":"640:267"}'>
                                    <source src='{{ asset(Storage::url("videos/{$comment->video->id}/{$comment->video->id}.m3u8")) }}' type="application/x-mpegURL">
                                </video>
                            </td>
                            <td>{{ $comment->content }}</td>
                            <td><button type="button" class="btn btn-round btn-success">Edit</button>
                              <button type="button" class="btn btn-round btn-warning">Delete</button></td>
                        </tr>
                    @endforeach             
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <!-- Datatables -->
  <script src="https://vjs.zencdn.net/7.8.3/video.js"></script>
  <script src="{{ asset('../vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endsection