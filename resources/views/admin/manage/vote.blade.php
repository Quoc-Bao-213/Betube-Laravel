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
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
              <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Video</th>
                    <th>User</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($votes as $vote)
                        <tr>
                            <td>{{ $vote->type }}</td>
                            <td>{{ $vote->voteable_type }}</td>
                            <td>{{ $vote->voteable_type }}</td>
                            <td>{{ $vote->voteable_type }}</td> 
                            <td>
                              <button type="button" class="btn btn-round btn-success"><i class="fa fa-plus-circle"></i></button>
                              <button type="button" class="btn btn-round btn-warning"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-round btn-primary  "><i class="fa fa-trash"></i></button>
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