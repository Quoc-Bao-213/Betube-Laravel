@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Add User </h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            @if(session('success'))
              <div class="alert alert-success alert-dismissible " role="alert">
                  <button type="button" class="close" style="color:white" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>{{ session('success')}}</strong> 
              </div>
            @elseif(session('error'))  
              <div class="alert alert-danger alert-dismissible " role="alert">
                  <button type="button" class="close" style="color:white" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>{{ session('error')}}</strong> 
              </div>
            @endif
        <form action="{{ route('add-user')}}" method="POST"  class="form-label-left input_mask">
            @csrf
            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="name" class="form-control has-feedback-left" placeholder="Name">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="channel_name" class="form-control" id="inputSuccess3" placeholder="Channel Name">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="phone" class="form-control" id="inputSuccess5" placeholder="Phone">
              <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="password" name="password" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Password">
                <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" name="description" class="form-control" id="inputSuccess5" placeholder="Description">
                <span class="fa fa-newspaper-o form-control-feedback right" aria-hidden="true"></span>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group row">
              <div class="col-md-9 col-sm-9">
                  <button type="submit" style="margin-left: 10px; margin-top: 10px;" class="btn btn-success ">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection