@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage<small>Users</small></h2>
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
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Channel Name</th>
                    <th>Description</th>
                    <th>Video Upload</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->channel_name }}</td>
                    <td>{{ $user->description }}</td>
                    <td>{{ count($user->videos) }}</td>
                    <td>
                      <a href= "{{ route('edit-user', $user->id)}}" type="button" class="btn btn-round btn-warning "><i class="fa fa-pencil"></i></a>         
                      <!-- Button trigger modal -->
                      <button type="submit" class="btn btn-round btn-primary" data-toggle="modal" data-target="{{'#exampleModalCenter'.$user->id}}"><i class="fa fa-trash"></i></button>
                      <!-- Modal -->
                      <form action="{{ route('delete-user', $user->id) }}" method="POST">
                        @csrf
                        <div class="modal fade" id="{{'exampleModalCenter'.$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Delete User Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4 class="text-center">
                                Are you sure delete this user ?
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
                <a href="{{ route('add-user') }}" type="button" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i></a> 
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
  {{-- <script type="text/javascript">
  var user_id;
  $(document).on('click', '.delete', function(){
    user_id = $(this).attr('id');
    $('#confirmModal').modal('show');
  });
  $('#')
  </script> --}}
@endsection