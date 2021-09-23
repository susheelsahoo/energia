<?php include('layout/header.php');?>


        <div class="module-content module-search-warp">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="type words then enter" />
                                <button></button>
                            </form>

                        </div>

                    </div>

                </div>

            </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>

        </div>

        <section class="map map-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="d-none">our office map</h3>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56046.79308898248!2d77.33073075258137!3d28.60203966437383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce514ba85e10f%3A0xf606330fd60f297d!2ss%20s%20solar%20energy!5e0!3m2!1sen!2sin!4v1632426720126!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
            <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background" /></div>
            <div class="container">
                <div class="contact-panel contact-panel-2">
                    <div class="row">
                        <div class="col-12 col-lg-5 img-card-holder">
                            <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                                <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image" /></div>
                                <div class="card-content">
                                    <div class="content-top">
                                        <p>As a world wide distributor of solar supplies we endeavor provide fast and
                                            knowledgeable service, we can get all the materials you need by sea or air.
                                        </p>
                                    </div>
                                    <div class="content-bottom">
                                        <ul class="list-unstyled contact-infos">
                                            <li class="contact-info"><i class="energia-phone-Icon"></i>
                                                <p>TollFree: <a href="tel:<?= $tollfree ?>"><?= $tollfree ?></a></p>
                                            </li>
                                            <li class="contact-info"><i class="energia-location-Icon"></i>
                                                <p>Location:  <?= $address ?></p>
                                            </li>
                                            <li class="contact-info"><i class="energia-clock-Icon"></i>
                                                <p>Mon - Fri: 8:00 am - 7:00 pm </p>
                                            </li>
                                            <li class="contact-info"><i class="energia-email--icon"></i>
                                                <p> Email US: <a href="mail:<?= $email ?>"><?= $email ?></a></p>
                                            </li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="contact-card">
                                <div class="contact-body">
                                    <h5 class="card-heading">get in touch</h5>
                                    <p class="card-desc">We take great pride in everything that we do, control over
                                        products allows us to ensure our customers receive the best quality service.</p>
                                    <form class="contactForm" method="post"
                                        action="https://demo.zytheme.com/energia/assets/php/contact.php">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="contact-name"
                                                    name="contact-name" placeholder="Name" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="contact-email"
                                                    name="contact-email" placeholder="Email" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="contact-phone"
                                                    name="contact-phone" placeholder="Phone" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <select class="form-control" id="select-1">
                                                    <option value="default">select your services</option>
                                                    <option value="s1">service 1 </option>
                                                    <option value="s2">service 2 </option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" id="contact-infos"
                                                    placeholder="additional information" name="contact-infos" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn--secondary">submit request <i
                                                        class="energia-arrow-right"></i></button>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="counters-holder">

                            <div class="counter counter-3">
                                <div class="counter-holder">
                                    <div class="counter-num"> <span class="counting" data-counterup-nums="25"
                                            data-counterup-beginat="12">25</span></div>
                                    <div class="counter-img">
                                        <div class="bg-section"><img src="assets/images/counters/1.jpg" alt="image" />
                                        </div><i class="flaticon-020-factory"></i>
                                    </div>
                                </div>
                                <div class="counter-desc">
                                    <p>Years Of Experience In The Solar Industry</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-7 offset-lg-1">
                        <div class="heading heading-14">
                            <p class="heading-subtitle">Customers Doing it Their Way!</p>
                        </div>
                        <div class="testimonials-holder">
                            <div class="carousel owl-carousel testimonials-carousel" data-slide="1" data-slide-rs="1"
                                data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false"
                                data-speed="800">
                                <div class="testimonial-panel testimonial-panel-2">
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>Energia has been absolutely the best to work with. Their attention to
                                                detail and customer support was amazing!! They were fantastic through
                                                the entire purchase process. Had lots of questions and they were
                                                patient. When my system arrived, it was well packed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-panel testimonial-panel-2">
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>Energia has been absolutely the best to work with. Their attention to
                                                detail and customer support was amazing!! They were fantastic through
                                                the entire purchase process. Had lots of questions and they were
                                                patient. When my system arrived, it was well packed.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-panel testimonial-panel-2">
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p>Energia has been absolutely the best to work with. Their attention to
                                                detail and customer support was amazing!! They were fantastic through
                                                the entire purchase process. Had lots of questions and they were
                                                patient. When my system arrived, it was well packed.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-thumbs">
                            <div class="testimonial-thumb active" data-hover="">
                                <div class="thumb-img"> <img src="assets/images/testimonial/1.jpg"
                                        alt="Testimonial Author" /></div>
                                <div class="thumb-body">
                                    <h6>sami wade</h6>
                                    <p>promina</p>
                                </div>
                            </div>
                            <div class="testimonial-thumb" data-hover="">
                                <div class="thumb-img"> <img src="assets/images/testimonial/2.jpg"
                                        alt="Testimonial Author" /></div>
                                <div class="thumb-body">
                                    <h6>john peter</h6>
                                    <p>optima inc</p>
                                </div>
                            </div>
                            <div class="testimonial-thumb" data-hover="">
                                <div class="thumb-img"> <img src="assets/images/testimonial/3.jpg"
                                        alt="Testimonial Author" /></div>
                                <div class="thumb-body">
                                    <h6>sony blake</h6>
                                    <p>koira ind</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

<?php include('layout/footer.php');?>