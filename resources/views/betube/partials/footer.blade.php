  <!-- footer -->
  <footer>
    <div class="row">
        <div class="large-4 medium-6 columns">
            <div class="widgetBox">
                <div class="widgetTitle">
                    <h5>About Betube</h5>
                </div>
                <div class="textwidget">
                    BeTube is a online video sharing and social media platform. It was launched in October 2021 by Quoc Bao.
                </div>
            </div>
        </div>
        <div class="large-4 medium-6 columns">
            <div class="widgetBox">
                <div class="widgetTitle">
                    <h5>Recent Videos</h5>
                </div>
                <div class="widgetContent">
                    @foreach ($latestVideos as $video)
                        <div class="media-object">
                            <div class="media-object-section">
                                <div class="recent-img">
                                    <img src= "{{ asset($video->thumbnail) }}" alt="recent">
                                    <a href="{{ route('video', $video->id ) }}" class="hover-posts">
                                        <span><i class="fa fa-play"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="media-object-section">
                                <div class="media-content">
                                    <h6><a href="{{ route('video', $video->id ) }}">{{ $video->title }}</a></h6>
                                    <p><i class="fa fa-user"></i><span>{{ $video->user->channel_name }}</span><i class="fa fa-clock-o"></i><span>{{ $video->created_at->toFormattedDateString() }}</span></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="large-4 medium-6 columns">
            <div class="widgetBox">
                <div class="widgetTitle">
                    <h5>Tags</h5>
                </div>
                <div class="tagcloud">
                    @foreach ($categories as $category)
                        <a href="{{ route('categories', $category->id) }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
</footer>
<!-- footer -->
<div id="footer-bottom">
    <div class="logo text-center">
        <img src="{{ asset('images/footerlogo.png') }}" alt="footer logo">
    </div>
    <div class="btm-footer-text text-center">
        <p>2021 © BeTube video</p>
    </div>
</div>