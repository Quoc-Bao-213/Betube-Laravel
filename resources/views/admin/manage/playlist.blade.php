@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
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
                    <th>Name</th>
                    <th>Description</th>
                    <th>User Created</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                 @foreach($playlists as $playlist)
                  <tr>
                    <td>{{ $playlist->name }}</td>
                    <td>{{ $playlist->description }}</td>
                    <td>{{ $playlist->user->name }}</td>
                    <td>
                      <a href="{{ route('manage-playlistDetail', $playlist->id) }}" type="button" class="btn btn-round btn-success"><i class="fa fa-file-audio-o"></i></a>
                      <a href= "{{ route('edit-playlists', $playlist->id)}}" type="button" class="btn btn-round btn-warning "><i class="fa fa-pencil"></i></a>
                      <button type="submit" class="btn btn-round btn-primary" data-toggle="modal" data-target="{{'#exampleModalCenter'.$playlist->id}}"><i class="fa fa-trash"></i></button>
                      <!-- Modal -->
                      <form action="{{ route('delete-playlist', $playlist->id) }}" method="POST">
                        @csrf
                        <div class="modal fade" id="{{'exampleModalCenter'.$playlist->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Playlist Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4 class="text-center">
                                Are you sure delete this playlist ?
                                </h4>
                              </div>
                              <div class="modal-footer">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </form> 
                    </td>
                  </tr>
                 @endforeach
                </tbody>
                <a href="{{ route('add-playlist') }}" type="button" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i></a> 
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