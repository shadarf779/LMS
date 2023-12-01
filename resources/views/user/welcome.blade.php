<x-layout>


         <!---------------------------- Takeaways ---------------------------->
         <section id="activity" class="takeaways my-5 bg-light">


         <div class="container">
            <div class="row text-center mb-5">
                <div class="col-md-8 offset-md-2">
                    <h2>Our Activities</h2>
                    <p class="lead">
                        Welcome to Soran University Courses, where you can enrich your skills and knowledge.
                    </p>
                </div>
            </div>
            @if ($activites->count())


         <x-ActivityCard :activites="$activites" />
         {{ $activites->links('pagination::bootstrap-5') }}

     @else
         <p class="text-center">You Dont have any Activity.</p>
     @endif
    </div>
</section>
        <!---------------------------- Details 1 ---------------------------->

        <section id="discover" class="details py-6 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img
                            src="images/instructor.jpg"
                            alt=""
                            class="img-fluid rounded-5 mb-4"
                        />
                    </div>
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center"
                    >
                        <h2>
                            Enhance Your Skills with Engaging Training Videos
                        </h2>
                        <p>
                            Our extensive collection of training videos is
                            designed to help you enhance your skills and excel
                            in your chosen field. Whether you're looking to
                            improve your technical expertise or develop
                            essential soft skills, our videos provide valuable
                            insights and practical knowledge.
                        </p>
                        <p>
                            With expert instructors and comprehensive content,
                            you'll gain the confidence and competence to tackle
                            challenges and achieve success.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------- Points ---------------------------->

        <section class="points pb-5">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-md-8 offset-md-2">
                        <h2>
                            Unlock Your Potential with Engaging Training Videos
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                >
                                    1
                                </span>
                            </div>
                            <div>
                                <h3 class="fs-4">Enhance Your Skills</h3>
                                <p>
                                    Our training videos provide comprehensive
                                    insights and practical tips to help you
                                    enhance your skills in various domains. From
                                    technical expertise to soft skills, we've
                                    got you covered.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                    >2</span
                                >
                            </div>
                            <div>
                                <h3 class="fs-4">Stay Updated</h3>
                                <p>
                                    Keep pace with the latest industry trends
                                    and advancements through our informative and
                                    up-to-date videos. Stay ahead of the curve
                                    and broaden your knowledge.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                    >3</span
                                >
                            </div>
                            <div>
                                <h3 class="fs-4">Connect with Experts</h3>
                                <p>
                                    Our platform allows you to connect with
                                    like-minded individuals and industry
                                    experts. Expand your network, foster new
                                    connections, and unlock new opportunities.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                    >4</span
                                >
                            </div>
                            <div>
                                <h3 class="fs-4">Flexible Learning</h3>
                                <p>
                                    Our training videos are available on-demand,
                                    allowing you to learn at your own pace and
                                    convenience. Access the content anytime,
                                    anywhere, and tailor your learning
                                    experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                    >5</span
                                >
                            </div>
                            <div>
                                <h3 class="fs-4">Practical Knowledge</h3>
                                <p>
                                    Gain practical knowledge and apply it
                                    directly to real-world scenarios. Our videos
                                    offer hands-on insights and practical tips
                                    to help you succeed in your professional
                                    endeavors.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="d-flex gap-3">
                            <div class="number">
                                <span
                                    class="bg-primary py-2 px-4 fs-3 rounded-circle"
                                    >6</span
                                >
                            </div>
                            <div>
                                <h3 class="fs-4">Continuous Learning</h3>
                                <p>
                                    Lifelong learning is key to personal and
                                    professional growth. Explore a vast
                                    collection of training videos and embark on
                                    a journey of continuous learning and
                                    self-improvement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------------------------- Details 2 ---------------------------->

        <section class="details py-6 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img
                            src="images/audience.jpg"
                            alt=""
                            class="img-fluid rounded-5 mb-4"
                        />
                    </div>
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center"
                    >
                        <h2>
                            Elevate Your Learning Journey with Expert Seminars
                        </h2>
                        <p>
                            Join our expert-led seminars and unlock new
                            possibilities in your personal and professional
                            development. Our seminars cover a diverse range of
                            topics, from leadership and innovation to personal
                            growth and productivity.
                        </p>
                        <p>
                            Immerse yourself in engaging discussions,
                            interactive workshops, and valuable networking
                            opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------- Invitation ---------------------------->

        <section class="invitation mb-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="invitation-bg text-center py-6 rounded-5">
                            <div class="text-white w-75 m-auto">
                                <h2 class="display-5 fw-bold">
                                    Join Us On December 22nd
                                </h2>
                                <p>
                                    We cordially invite you to attend a seminar
                                    on December 22nd, where we will explore
                                    various topics and insights related to
                                    <strong>advertising and marketing</strong>.
                                    It will be an engaging session where you can
                                    gain valuable knowledge about. Don't miss
                                    out on this opportunity to enhance your
                                    skills and broaden your horizons. Join us
                                    and be a part of this enriching experience!
                                </p>
                                <a
                                    href="#register"
                                    class="btn btn-primary btn-lg"
                                >
                                    Register Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!---------------------------- Subscribe Form ---------------------------->
        <section id="subscribe" class="subscribe my-5">
            <div class="container">
                <div class="row">
                    <!-- am coloma la medium basarawa 6 colom wardagre u dacheta nawandesh bahoy offset-md-3 chunka dalle la mediumawa 3 colom lay chap u 3 colome rast batall bka -->
                    <div class="col-md-6 offset-md-3 text-center">
                        <h2>
                            Subscribe to our email list and get updates from the
                            experts
                        </h2>
                        <form>
                            <div class="my-4">
                                <input
                                    type="email"
                                    class="form-control form-control-lg"
                                    placeholder="Enter email"
                                />
                                <div class="form-text">
                                    We will never share your email address
                                </div>
                            </div>
                            <!-- d-grid bo awaya buttonaka 12 colom dager kat yan bllen waku block elemente lebet -->
                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


</x-layout>
