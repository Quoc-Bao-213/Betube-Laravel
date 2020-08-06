@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" />
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage<small>Video</small></h2>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Total_Views</th>
                    <th>Hashtag</th>
                    <th>Video Type</th>
                    <th>Path</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                        <tr>
                            <td>{{ $video->user->channel_name }}</td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->description }}</td>
                            <td><img src="{{ $video->thumbnail}}" width="150" height="100" alt=""></td>
                            <td>{{ $video->total_views }}</td>
                            <td>{{ $video->hashtag }}</td>
                            <td>             
                              @php                              
                                foreach ($video->videoTypes as $value) {
                                  echo($value->name);
                                }
                              @endphp
                             </td> 
                             <td>{{ $video->path }}</td>
                             <td>
                                <a href="{{ route('action-delete-video', $video->id) }}" type="button" class="btn btn-round btn-primary "><i class="fa fa-trash"></i></a>
                                <a href="{{ route('edit-video', $video->id) }}" type="button" class="btn btn-round btn-warning "><i class="fa fa-pencil"></i></a>
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
  <script src="{{ asset('../vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endsection