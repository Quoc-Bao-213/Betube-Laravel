@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Playlist</h2>
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
                @elseif($errors->any())
                    <div class="alert alert-warning fade show" style="background-color:#fff3cd; border-color:#ffeeba; color:#856404" role="alert">
                    <button type="button" class="close" style="color:#856404" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4><strong>Holy guacamole!</strong> You should check in on some of those fields below.</h4>
                        @foreach($errors->all() as $error)
                        <p>{{ $error}}</p>
                        @endforeach
                    </div>
                @endif
                <!-- start form for validation -->
                <form action="{{ route("add-playlist")}}" method="POST">
                    @csrf
                    <label>Name playlist * :</label>
                    <input type="text" class="form-control" name="name">
                    <label>Descriptipn playlist * :</label>
                    <input type="text" class="form-control" name="description">
                    <label>User create playlist * :</label>
                    <select name="user_id"  class="form-control">
                        <option disabled selected>--- Choose user create playlist ---</option>
                        @foreach($users as $user)
                        <option  value="{{ $user->id }}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Submit</span> 
                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
@endsection