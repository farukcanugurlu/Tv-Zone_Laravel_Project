<section id="center_1" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="center_new_main clearfix">
                <div class="col-sm-12 center_3 clearfix">
                    <div class="col-sm-8 about_left clearfix">
                        <div class="col-sm-12 about_left_l clearfix">
                            <div class="col-sm-10 col-sm-offset-1 about_left_l_right clearfix text-center">
                                <h2><a href="#">Announcements</a></h2>
                                <p>Move your mouse to photo</p>
                            </div>
                        </div>
                        <div class="col-sm-12 about_left_2_bottom clearfix">
                            @foreach($an->reverse() as $item)
                                <div class="about_left_2_bottom_1 clearfix">
                                    <div class="ih-item square effect13 right_to_left">
                                        <a href="#">
                                            <div class="img"><img src="{{asset('assets')}}/annobig.jpg" alt="img"></div>
                                            <div class="info">
                                                <h3>{{$item->title}}</h3>
                                                <h3>{{$item->detail}}</h3>
                                                <h3>{{$item->created_at}}</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
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
                                <a href="blog.html"><img src="{{asset('assets')}}/img/39.jpg" width="100%" /></a>
                            </div>
                            <a href="blog.html" class="link-black">
                                <h4 class="fa fa-arrow-circle-right">Click for twd corner</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
