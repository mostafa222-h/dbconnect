@extends('layouts.app')
@section('content')

    <div >
        <!-- Watch -->
        <div >
            <div >

                <!-- Video Player -->
                <h1>{{ $video->name }}</h1>
                <div >
                    <video controls style="height: 100%; width: 100%;">
                        <source src="{{ $video->url }}" type="video/mp4">
                    </video>
                </div><!-- // video-code -->

                <div>
                    <p>
                        {{ $video->description }}
                    </p>
                </div>

                <div >
                    <ul >
                        <li><a  href="#">1250 <i ></i></a></li>
                        <li><a  href="#">1250 <i ></i></a></li>
                    </ul>
                    <ul>
                        <li><a  href="#"><i aria-hidden="true"></i></a>
                        </li>
                        <li><a  href="#"><i  aria-hidden="true"></i></a>
                        </li>
                        <li><a  href="#"><i  aria-hidden="true"></i></a>
                        </li>
                        <li><a cl href="#"><i aria-hidden="true"></i></a>
                        </li>
                        <li><a  href="#"><i  aria-hidden="true"></i></a>
                        </li>
                        <li><a  href="#"><i  aria-hidden="true"></i></a></li>
                    </ul><!-- // Social -->
                </div><!-- // video-share -->
                <!-- // Video Player -->


                <!-- Chanels Item -->
                <div>
                    <div>
                        <a href="#"><img src="/demo_img/ch-1.jpg" alt=""></a>
                    </div>
                    <div >
                        <a  href="#">داود طاهری</a>
                        <span >436,414 ویدیو</span>
                    </div>
                    <a href="#" >مشاهده همه ویدیوهای داوود طاهری</a>
                </div>
                <!-- // Chanels Item -->


                <!-- Comments -->
                <div>
                    <h3><span>19</span> نظرات</h3>
                    <ul>
                        <li>
                            <div>
                                <div>
                                    <a href="#"><img src="/demo_img/c1.jpg" alt=""></a>
                                </div>
                                <a href="#">داود طاهری</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>


                        </li>
                        <li>
                            <div class="post_author">
                                <div class="img_in">
                                    <a href="#"><img src="/demo_img/c2.jpg" alt=""></a>
                                </div>
                                <a href="#" >بهمن نجاتی</a>
                                <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </li>

                    </ul>


                    <h3 >ارسال نظرات</h3>
                    <form>
                        <input type="text"  id="Name" placeholder="نام">
                        <input type="email"  id="Email" placeholder="ایمیل">
                        <input type="text"  placeholder="سایت">
                        <textarea  rows="8" id="Message" placeholder="پیام"></textarea>
                        <button type="button"  >ارسال پیام</button>
                    </form>
                </div>
                <!-- // Comments -->


            </div><!-- // watch -->
        </div><!-- // col-md-8 -->
        <!-- // Watch -->

        <!-- Related Posts-->
        <div>
            <x-related-video :video="$video" />
        </div><!-- // col-md-4 -->
        <!-- // Related Posts -->


    </div>

@endsection
