<section class="topProfile" style="background: url('{{ $user->cover() }}') no-repeat;background-size: cover;">
    <div class="profile-stats">
        <div class="row secBg">
            <div class="large-12 columns">
                <div class="profile-author-img">
                    <img src="{{ $user->avatar() }}" alt="profile author img">
                </div>

                <subscribe-button :channel="{{ $user }}" :initial-subscriptions="{{ $user->subscriptions }}" inline-template>
                    <div class="profile-subscribe" style="margin-left: 30px">
                        <span><i class="fa fa-users"></i>@{{ count }}</span>                   
                        <button @click="toggleSubscription" v-if="owner === false && subscribed === false" name="subscribe">
                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                        </button>
                        <button @click="toggleSubscription" style="background: #e96969" v-else-if="owner === false && subscribed === true" name="subscribe">
                            @{{ owner ? '' : subscribed ? 'Unsubscribe' : 'Subscribe' }}
                        </button>
                        <span v-else class="button-subscriber">Subscriber</span>                   
                    </div>
                </subscribe-button>
                
                {{-- <div class="profile-share">
                    <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com/">
                        <!-- Facebook -->
                        <button data-easyshare-button="facebook">
                            <span class="fa fa-facebook"></span>
                            <span>Share</span>
                        </button>
                        <span data-easyshare-button-count="facebook">0</span>

                        <!-- Twitter -->
                        <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                            <span class="fa fa-twitter"></span>
                            <span>Tweet</span>
                        </button>
                        <span data-easyshare-button-count="twitter">0</span>

                        <!-- Google+ -->
                        <button data-easyshare-button="google">
                            <span class="fa fa-google-plus"></span>
                            <span>+1</span>
                        </button>
                        <span data-easyshare-button-count="google">0</span>

                        <div data-easyshare-loader>Loading...</div>
                    </div>
                </div> --}}

                <div class="clearfix">
                    <div class="profile-author-name float-left">
                        <h4>
                            @if($user->channel_name)
                                {{ $user->channel_name }}
                            @else
                               {{  $user->name }}
                            @endif
                         </h4>
                        <p>Join Date : <span>{{ $user->created_at->toFormattedDateString() }}</span></p>
                    </div>
                    <div class="profile-author-stats float-right">
                        <ul class="menu">
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->videos) }}</p>
                                    <span>Videos</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->playlists) }}</p>
                                    <span>playlist</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="li-text float-left">
                                <p class="number-text">{{ count($user->subscriptions) }}</p>
                                    <span>subscribers</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon float-left">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <div class="li-text float-left">
                                    <p class="number-text">{{ count($user->comments) }}</p>
                                    <span>comments</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>