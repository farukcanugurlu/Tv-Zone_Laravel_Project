<section id="center_1" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="center_new_main clearfix">
                <div class="col-sm-8 about_left clearfix">
                    <div class="col-sm-12 about_left_2 clearfix">
                        <div class="about_left_2_inner clearfix">
                            @include('home.message')
                            <hr>
                            @foreach($blog->reverse() as $rs)
                                <ul>
                                    @if($rs->user)
                                        <li class="dropper">
                                            <p>Written by <span class="albert">{{ $rs->user->name }}</span></p>
                                        </li>
                                    @endif
                                    <li>
                                        <p>Publish Time <span class="albert">{{$rs->created_at}}</span></p>
                                    </li>
                                </ul>
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image) }}" alt="">
                                @endif
                                <h3>{{$rs->title}}</h3>
                                <h5>{{$rs->detail}}</h5>

                                <!-- Ayırıcı çizgi -->
                                <hr>
                                <form class="review-form" action="{{route('sendcmt')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="blog_id" value="{{$rs->id}}">
                                    <div class="form-group">
                                        <textarea class="input" name="review" placeholder="Your review"></textarea>
                                    </div>
                                    @auth
                                        <button class="btn btn-primary">Submit</button>
                                    @else
                                        <a href="admin/login" class="primary-btn"> To Submit Your Review, Please Login  </a>
                                    @endauth

                                    <div class="product-reviews">
                                        <h4>Comments</h4>
                                        @foreach($comments->reverse() as $comment)
                                            @if($comment->blog_id == $rs->id)
                                                <div class="single-review">
                                                    <div class="review-heading">
                                                        <div class="user-info">
                                                            <i class="fa fa-user-o"></i>
                                                            @if($comment->user->name!=NULL)
                                                            <a href="#">{{$comment->user->name}}</a>
                                                            @endif
                                                        </div>
                                                        <div class="review-date">
                                                            <i class="fa fa-clock-o"></i>
                                                            <a href="#">{{$comment->created_at}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>{{$comment->review}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 center_2_right clearfix">
                    <div class="col-sm-12 center_2_right_top clearfix">
                        <div class="center_2_right_top_inner clearfix">
                            <h4>Latest Content</h4>
                            <h3><a href="/blog"><img src="{{asset('assets')}}/img/33.jpg" width="100%" /></a></h3>
                            <h2><a href="#"></a></h2>
                            <p>Hold On, ‘The Walking Dead: Dead City’ Actually Looks . . . Really Good</p>
                            <h5><a href="/blog"><i class="fa fa-arrow-circle-right"></i>Read more</a></h5>
                        </div>
                    </div>
                    <div class="col-sm-12 center_2_right_top_2 clearfix">
                        <div class="center_2_right_top_2_inner">
                            <a href="/blog"><img src="{{asset('assets')}}/img/39.jpg" width="100%" /></a>
                        </div>
                        <a href="/blog" class="link-black"><h4 class="fa fa-arrow-circle-right">Click for blog</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
