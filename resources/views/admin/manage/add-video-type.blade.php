@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Video Type</h2>
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
                <!-- start form for validation -->
                <form action="{{ route("add-videotype")}}" method="POST">
                    @csrf
                    <label for="fullname">Name video type * :</label>
                    <input type="text" class="form-control" name="name_videotype">

                    @if($errors->any())
                        <p class="alert alert-danger"  style="margin-top:10px; background-color:#fff3cd; border-color:#ffeeba; color:#856404" role="alert">{{ $errors->first('name_videotype') }}</p>
                    @endif
                    <button type="submit" style="margin-top:10px" class="btn btn-primary">Submit</button> 
                </form>
                <!-- end form for validations -->

            </div>
        </div>
    </div>
</div>
@endsection