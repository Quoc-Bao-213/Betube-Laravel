@extends('betube.layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/jquery.kyco.easyshare.css') }}">
@endsection

@section('content')
<section id="breadcrumb">
    <div class="row">
        <div class="large-12 columns">
            <nav aria-label="You are here:" role="navigation">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> submit post
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section><!--end breadcrumbs-->

<!-- profile top section -->
@include('betube.partials.top-profile')
<!-- End profile top section -->

<div class="row">
    
    @include('betube.partials.sidebar')

    <!-- right side content area -->
    <div class="large-8 columns profile-inner">
        <!-- profile settings -->
        <section class="submit-post">
            <div class="row secBg">
                <div class="large-12 columns">
                     <div class="heading">
                        <i class="fa fa-pencil-square-o"></i>
                        <h4>Edit video Post</h4>
                        @if(session('success'))
                        <h5 style="color: #28a745 !important; text-align: center; margin-bottom: 0.5rem">
                            {{ session('success') }}
                        </h5>
                        @endif
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <form method="POST"  action="{{ route('action-update-video',$video->id) }}" data-abide novalidate enctype="multipart/form-data">
                                @csrf
                                <div data-abide-error class="alert callout" style="display: none;">
                                    <p><i class="fa fa-exclamation-triangle"></i>
                                        There are some errors in your form.</p>
                                </div>
                                <div class="row">
                                    <div class="large-12 columns">
                                        <label>Title
                                            <input type="text" style="margin-bottom: 10px;" placeholder="enter you video title..." value="{{ $video->title }}" name="title" >
                                            <span style="display: block;" class="form-error">
                                                {{-- Yo, you had better fill this out, it's required. --}}
                                                {{ $errors->first('title') }}
                                            </span>
                                        </label>
                                    </div>
                                    <div class="large-12 columns">
                                        <label>Description
                                            <textarea name="description">{{ $video->description }}</textarea>
                                        </label>
                                    </div>
                                  
                                    <div class="large-12 columns">
                                        <div class="post-category">
                                            <label>Choose Video Type:
                                                <select name="videotype">
                                                    @foreach($videoType as $videotype)
                                                    <option @if($videotype->id === $video->video_type_id) selected @endif value="{{ $videotype->id }}">
                                                        {{ $videotype->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="upload-video">
                                            <label for="imgUpload" class="button">Upload Thumbnail</label>
                                            <input type="file" name="thumbnail" id="imgUpload" class="show-for-sr">
                                            @if($errors->first('thumbnail'))
                                            <span class="form-error">
                                                {{-- Yo, you had better fill this out, it's required. --}}
                                                {{ $errors->first('thumbnail') }}
                                            </span>
                                            @else
                                            <span>No file chosen</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="large-12 columns">
                                        <label>Tags:
                                            <input style="margin-bottom: 10px;" type="text" name="hashtag" value="{{ $video->hashtag }}" placeholder="enter video tags.." >
                                            @if (session('errorHashTag'))
                                                <span style="display: block;" class="form-error">{{ session('errorHashTag') }}</span>
                                            @endif
                                        </label>
                                    </div>
                                    <div class="large-12 columns">
                                        <button class="button expanded" type="submit" name="submit">publish now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </section><!-- End profile settings -->
    </div><!-- end left side content area -->
</div>
@endsection