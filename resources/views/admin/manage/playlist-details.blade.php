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
        <h2>Manage<small>Playlist</small></h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible " role="alert">
            <button type="button" class="close" style="color:white" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <strong>{{ session('success')}}</strong> 
        </div>
        @endif
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Name video</th>
                    <th style="width:40%;">Video</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($playlistDetails as $playlistDetail)
                  <tr>
                    <td>{{ $playlistDetail->videos->title }}</td>
                    <td> 
                        <video id="my-video" class="video-js vjs-big-play-centered"  controls poster="{{ asset($playlistDetail->videos->thumbnail) }}"  controls preload="auto" style="width: 100%; height: 100%" data-setup='{ "aspectRatio":"640:267"}'>
                            <source src='{{ asset(Storage::url("videos/{$playlistDetail->videos->id}/{$playlistDetail->videos->id}.m3u8")) }}' type="application/x-mpegURL">
                        </video>
                    </td>
                    <td>
                        <form action="{{ route('delete-playlistDetail', $playlistDetail->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-round btn-primary "><i class="fa fa-trash"></i></button>
                        </form> 
                    </td>
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