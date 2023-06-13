<section id="footer" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 footer clearfix">
                <div class="col-sm-6 footer_left clearfix">
                    <a href="/home"><h5><i class="fa fa-home" ></i>Home</h5></a>
                </div>
                <div class="col-sm-6 footer_right clearfix">
                    <h5><a href="#"><i class="fa fa-arrow-circle-up"></i>Back to top</a></h5>
                </div>
            </div>
            <div class="col-sm-12 footer_middle clearfix">
                <div class="col-sm-3 footer_middle_left clearfix">
                    <div class="footer_middle_left_1">
                        <h2><a href="#"><span class="zoomer">Tv Zone</span></a></h2>
                        <p>Our goal is presenting reviews about movies and tv-series we hope you to contribute so we can grow our community together</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 footer_bottom clearfix">
                <div class="footer_bottom_1 clearfix">
                    <ul>
                        <li><a href="/msg">Contact Us</a></li>
                        <li><a href="/#">Back To Top</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-sm-12 footer_end clearfix">
                <div class="col-sm-6 footer_end_left clearfix">
                    <p class="website">� 2023 TvZone All rights reserved</p>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(function(){

        $('#show').on('click',function(){
            $('.card-reveal').slideToggle('slow');
        });

        $('.card-reveal .close').on('click',function(){
            $('.card-reveal').slideToggle('slow');
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('[id^=detail-]').hide();
        $('.toggle').click(function() {
            $input = $( this );
            $target = $('#'+$input.attr('data-toggle'));
            $target.slideToggle();
        });
    });
</script>
