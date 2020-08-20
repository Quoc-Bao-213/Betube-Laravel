@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
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
                    <th>User</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Total Views</th>
                    <th>Total Like</th>
                    <th>Total Dislike</th>
                    <th>Hashtag</th>
                    <th>Video Type</th>  
                    <th>Path</th>           
                  </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                        <tr>
                            <td>{{ $video->user->channel_name }}</td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->description }}</td>
                            <td><img src="{{ $video->thumbnail}}" width="150" height="100" alt="picture"></td>
                            <td>{{ $video->total_views }}</td>
                            <td>
                              @php
                              echo App\Http\Controllers\AdminManageController::getTotalLike($video->id);
                              @endphp
                            </td>
                            <td>
                              @php
                              echo App\Http\Controllers\AdminManageController::getTotalDisLike($video->id);
                              @endphp
                            </td>
                            <td>{{ $video->hashtag }}</td>
                            <td>           
                              @php                              
                                foreach ($video->videoTypes as $value) {
                                  echo($value->name);
                                }
                              @endphp
                             </td> 
                            <td><a href="http://localhost/videos/{{$video->id}}" target="_blank">http://localhost/videos/{{$video->id}}</a> </td>
                             <td>  
                              <button type="submit" class="btn btn-round btn-primary" data-toggle="modal" data-target="{{'#exampleModalCenter'.$video->id}}"><i class="fa fa-trash"></i></button>
                              <!-- Modal -->
                              <form action="{{ route('delete-video', $video->id) }}" method="POST">
                                @csrf
                                <div class="modal fade" id="{{'exampleModalCenter'.$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Video Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <h4 class="text-center">
                                        Are you sure delete this video ?
                                        </h4>
                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1" style="display:block;" class="text-center">Reason Why Delete Video!</label>
                                          <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="submit" class="btn btn-danger">Delete and Send Email</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </form>         
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