<section id="center_1" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 contact_top clearfix">
                <h2>Contact</h2>
            </div>
            <div class="col-sm-12 contact clearfix">
                <div class="col-sm-6 contact_left clearfix">
                    <div class="contact_left_1 clearfix">
                        <h3>HOW TO CONTACT US</h3>
                        <p>Send us an email or a message from the chatbox</p>
                    </div>
                    <div class="col-sm-12 contact_left_2 clearfix">
                        <div class="col-sm-6 contact_left_2_left clearfix">
                            <div class="contact_left_2_left_inner_1">
                                <h3>OFFICE</h3>
                                <h5>455 Quis sem</h5>
                                <h5>Sed Augue, DT, 77335, U.A.E</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 contact_left_2_right clearfix">
                            <div class="contact_left_2_left_inner_1">
                                <h3>CONTACT INFO</h3>
                                <h5>Office: (888) 543-9898</h5>
                                <h5>Fax: (888) 659-3290</h5>
                                <h5>Email: <a href="mailto:farukcanugurlu@outlook.com">farukcanugurlu@outlook.com</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_right clearfix">
                    <div class="contact_right_1 clearfix">
                        @include('home.message')
                        <form id="checkout-form" class="clearfix" action="{{route('sendmsg')}}" method="post">
                            @csrf
                            <input class="form-control form-control_1" id="subject" name="subject" placeholder="Your Subject*" type="text" required autofocus>
                            <textarea id="message" name="message" placeholder="Your Message*" rows="5" class="form-control form-textarea form-textarea_new" style="color: grey;" required></textarea>
                            @auth
                                <button class="btn btn-primary">Submit</button>
                            @else
                                <a href="admin/login" class="btn btn-primary"> To Submit Your Message, Please Login  </a>
                            @endauth
                        </form>
                        @auth
                        @foreach($msg as $message)
                            @if($message->status=='False')
                                <p><strong>{{$message->name}}:</strong>{{$message->message}}</p>
                                    <p style="color: #ff8f00"><strong>Mesajınız henüz okunmadı</strong></p>
                            @endif
                                @if($message->status=='Read' && $message->note == NULL)
                                    <p><strong>{{$message->name}}:</strong>{{$message->message}}</p>
                                    <p style="color: #0c84ff"><strong>Mesajınız henüz okundu yakın zamanda dönüş yapılacaktır</strong></p>
                                @endif
                            @if($message->user_id == auth()->user()->id && $message->note != NULL)
                                <p><strong style="color: #ff8f00">{{$message->name}}:</strong>{{$message->message}}</p>
                                <p><strong style="color: #0c84ff">Admin:</strong>{{ $message->note }}</p>
                                <hr>
                            @endif
                        @endforeach
                        @endauth
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
