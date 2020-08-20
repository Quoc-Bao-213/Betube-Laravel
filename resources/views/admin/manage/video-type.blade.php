@extends('admin.layout.app')
@section('css')
<!-- Datatables -->
<link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

@endsection
@section('content')
<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Manage<small>Video Type</small></h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close" style="color:white" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">×</span>
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
                <th>Name Video Types</th>
                 <th>Video in category</th>
                 <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($videotypes as $index => $videotype)
                <tr>
                  <td>{{ $videotype->name }}</td>   
                  <td>
                  @php
                      echo App\Http\Controllers\AdminManageController::getCountVideoInVideoType($index);
                  @endphp
                  </td>   
                  <td>
                    <a href="{{ route("edit-videotype" ,  $videotype->id )}}" type="button"
                      class="btn btn-round btn-warning"><i class="fa fa-pencil"></i></a>
                    <button type="submit" class="btn btn-round btn-primary" data-toggle="modal" data-target="{{'#exampleModalCenter'.$videotype->id}}"><i class="fa fa-trash"></i></button>
                    <!-- Modal -->
                      <form action="{{ route('delete-videotype', $videotype->id) }}" method="POST">
                        @csrf
                        <div class="modal fade" id="{{'exampleModalCenter'.$videotype->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Video Type Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4 class="text-center">
                                Are you sure delete this video type ?
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
              <a href="{{ route("add-videotype") }}" type="button" class="btn btn-round btn-success"><i
                  class="fa fa-plus-circle"></i></a>
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