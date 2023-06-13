<section id="center_1" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 center_1 clearfix">
                <div class="col-sm-8 center_1_left clearfix">
                    <div class="center_1_left_1 clearfix">
                        <div class="carousel slide article-slide" id="article-photo-carousel">
                            <div class="col-sm-10 clearfix">
                                <div class="carousel-inner cont-slider">
                                    <div class="item">
                                        <img alt="" title="" src="{{asset('assets')}}/img/5.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="" title="" src="{{asset('assets')}}/img/6.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="" title="" src="{{asset('assets')}}/img/7.jpg">
                                    </div>
                                    <div class="item active">
                                        <img alt="" title="" src="{{asset('assets')}}/img/8.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- Indicators -->
                            <div class="col-sm-2 clearfix">
                                <ol class="carousel-indicators">
                                    <li class="" data-slide-to="0" data-target="#article-photo-carousel">
                                        <img alt="" src="{{asset('assets')}}/img/5.jpg">
                                    </li>
                                    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                        <img alt="" src="{{asset('assets')}}/img/6.jpg">
                                    </li>
                                    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                        <img alt="" src="{{asset('assets')}}/img/7.jpg">
                                    </li>
                                    <li class="active" data-slide-to="3" data-target="#article-photo-carousel">
                                        <img alt="" src="{{asset('assets')}}/img/8.jpg">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 center_1_right clearfix">
                    <div class="col-sm-12 center_1_right_1 clearfix">
                        <div class="center_1_right_1_top clearfix">
                            <div class="row">
                                <div class="col-sm-8 center_1_right_1_top_left">
                                    <h3>ANNOUNCEMENTS</h3>
                                </div>
                                <div class="col-sm-4 center_1_right_1_top_right clearfix">
                                    <!-- Controls -->
                                    <div class="controls pull-right">
                                        <a class="left fa fa-chevron-left btn btn-success" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example" data-slide="prev"></a>
                                        <a class="right fa fa-chevron-right btn btn-success" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/2XX5#carousel-example" data-slide="next"></a>
                                    </div>
                                </div>
                            </div>
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach($an->reverse() as $item)
                                        <div class="item @if($loop->first) active @endif">
                                            <div class="row">
                                                <div class="col-sm-12 center_1_right_1_top_main clearfix">
                                                    <div class="col-sm-4 center_1_right_1_top_main_1 clearfix">
                                                        <a><img src="{{asset('assets')}}/anno.png" /></a>
                                                    </div>
                                                    <div class="col-sm-8 center_1_right_1_top_main_2 clearfix">
                                                        <h4><a href="{{route('anno')}}">{{$item->title}}</a></h4>
                                                        <h4><a href="{{route('anno')}}">{{$item->detail}}</a></h4>
                                                        <h5>{{$item->created_at}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 center_new_main clearfix">
                <div class="col-sm-8 center_3_left clearfix">
                    <div class="col-sm-12 center_3_left_1 clearfix">
                        <h2>NEW HEADLINES....</h2>
                    </div>
                    @foreach($blog->reverse() as $rs)
                        <div class="col-sm-12 center_3_left_4 clearfix">
                            <div class="col-sm-3 center_3_left_4_right clearfix">
                                <ul>
                                    <!-- İçeriklerinizi buraya ekleyebilirsiniz -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 center_3_left_5 clearfix">
                            <div class="col-sm-3 center_3_left_5_left clearfix">
                                <div class="center_3_left_5_left_1 claerfix">
                                    <a href="/blog">
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" alt="">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9 center_3_left_5_right clearfix">
                                <div class="col-sm-12 center_3_left_5_right_1 clearfix">
                                    <div class="col-sm-10 center_3_left_5_right_1_inner">
                                        <h4><a href="#">{{$rs->title}}</a></h4>
                                        <ul>
                                            <li><h5><i class="fa fa-clock-o"></i>{{$rs->updated_at}}</h5></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 center_3_left_5_right_2 clearfix">
                                    <p>{{$rs->detail}}</p>
                                    <h5><a href="/blog"><i class="fa fa-arrow-circle-right"></i>Read more...</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                        <a href="blog.html" class="link-black"><h4 class="fa fa-arrow-circle-right">Click for blog</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
