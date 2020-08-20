@extends('admin.layout.app')
@section('css')
 <!-- Datatables -->
 <link href=" {{ asset('../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage<small>Comment</small></h2>
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
                    <th>Name Video</th>
                    <th>Content</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->user->name }}</td>
                            <td>{{ $comment->video->title }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>
                              <form action="{{ route("delete-comment", $comment->id) }}" method="POST">
                                @csrf          
                                <button type="submit" class="btn btn-round btn-primary"><i class="fa fa-trash"></i></button>
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
  <script src="{{ asset('../vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endsection