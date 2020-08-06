@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Edit Video </h2>
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
            @endif
        <form action="{{ route('edit-video' , $video->id )}}" method="POST"  class="form-label-left input_mask">
            @csrf
            <div class="col-md-6 col-sm-6  form-group has-feedback">
            <input type="text" name="name" class="form-control has-feedback-left" value="{{ $video->user->channel_name }}" disabled placeholder="Name">
              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="title" class="form-control"  value="{{ $video->title }}" placeholder="Title">
              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
            </div>

            <div class="col-md-6 col-sm-6  form-group has-feedback">
              <input type="text" name="description" class="form-control has-feedback-left"  value="{{ $video->description }}">
              <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" name="total_views" class="form-control"  value="{{ $video->total_views }}">
                <span class="fa fa-eye form-control-feedback right" aria-hidden="true"></span>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" name="hashtag" class="form-control has-feedback-left"  value="{{ $video->hashtag }}">
                <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-md-6 col-sm-6  form-group has-feedback">
                {{-- <input type="text" name="video_type" class="form-control" value=""> --}}
                <select name="video_type_id"  class="form-control">
                    @foreach($videoTypes as $videoType)
                    <option @if($videoType->id === $video->video_type_id) selected @endif  value="{{ $videoType->id }}">{{ $videoType->name }}</option>
                    @endforeach
                </select>
            </div>
              <div class="col-md-6 col-sm-6 form-group has-feedback">
                  <button type="submit"  class="btn btn-success ">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection