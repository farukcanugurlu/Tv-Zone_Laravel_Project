<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row justify-content-center">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- TO DO List -->
            </section>
            <!-- /.Left col -->
            <!-- Right col -->
            <section class="col-lg-5 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Slider</h3>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="/home">
                                        <img src="{{asset('assets')}}/home.jpg" class="d-block w-100" alt="Home">
                                    </a>
                                    <div class="carousel-caption">
                                        <h3>Home</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href="/blog">
                                        <img src="{{asset('assets')}}/blog.jpg" class="d-block w-100" alt="Blog">
                                    </a>
                                    <div class="carousel-caption">
                                        <h3>Blog</h3>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.Right col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
