@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(/img/slide/magutu1.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="display-5">SCIENCE INNOVATION AFRICA</span></h2>
                            <p class="lead">Scratch Programming sessions in Magutu Girls High School.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(/img/slide/baraka1.JPG);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="display-5">SCIENCE INNOVATION AFRICA</h2>
                            <p class="lead ">Offering food and book donations at the Baraka Childrens home in Nyeri Embassy
                                area.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(/img/slide/magutu4.jpeg);">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2 class="display-5">SCIENCE INNOVATION AFRICA </h2>
                            <p class="lead">Magutu Girls receiving computer donations.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <!-- ======= End Hero Section ======= -->
    <section id="about-us" class="about-us " style="background-color: rgb(230, 232, 252)">
        <div class="container bg-transparent  " data-aos="fade-up">

            <div class="section-title">
                <h2> Our Mission </h2>
            </div>
            <div class="display-8 lead text-center">
                <p class="fs-5 fst-italic ">
                    SCINOV AFRICA is a non-governmental and nonprofit organization,
                    whose mission is to enhance digital education among students in elementary,
                    middle and high school grades, hence building a strong foundation for advanced
                    computer skills.We partner with learning institutions to create
                    a well-developed and sustainable digital education environment for learners.
                </p>
            </div>

        </div>
    </section>

    <section id="recent-activities" data-aos="fade-up">

        <div class="container mt-5">
            <div class="section-title">
                <h2>UPDATES</h2>
            </div>
            <div class="row">
                <!-- News Articles -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/slide/karatinadexc.JPG') }}" alt="News Article 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Digital Exchange Cohort 2</h5>
                            <p class="card-text">The Exchange program is an exchange project by SCINOV AFRICA in partnership
                                with the National Taiwan University of Science and Technology, an institute of Digital
                                Learning and Education.</p>
                            <a href="{{ url('/events') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/slide/eswatinicoding1.jpeg') }}" alt="News Article 2" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Coding Training in Eswatini</h5>
                            <p class="card-text">In Eswatini we have certified 20 kids and 6 teachers, and now there is
                                ongoing training of grade 3 kids to form 4 students.</p>
                            <a href="{{ url('/events') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/slide/symposium_victors.jpg') }}" alt="News Article 3" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Scratch Programming Symposium 2</h5>
                            <p class="card-text">We had a scratch programming symposium on July 22, 2023, in which 12 of our
                                partner schools participated. Scratch symposium is an annual activity organized by SCINOV
                                Africa.</p>
                            <a href="{{ url('/events') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Recent Activities -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/events') }}"> NTHU Student Volunteer Visitation</a>
                            </h5>
                            <p class="card-text">2023 Student Volunteer visitations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/events') }}"> Taiwan Tech Visitation</a>
                            </h5>
                            <p class="card-text">Taiwan Tech pays a visit to our schools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ url('/events') }}"> 2023 Computer Donations</a>
                            </h5>
                            <p class="card-text">6 Schools in Nyeri county receive computers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero" data-aos="fade-up">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1>
                Let's Raise the Digital Bar for Digital Education</h1>
        </div>
    </section>


    <section id="services" class="services section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row m-5">
                <div class="section-title">
                    <h2>Our Pillars</h2>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                </path>
                            </svg>
                            <i class="bx bx-layer"></i>
                        </div>
                        <h4><a href="">Facility</a></h4>
                        <p class="fs-6"> SCINOV collects and ships hardware and software computer facilities to Kenya and
                            Tanzania to support schools. The schools keep and maintain those devices for long-term use.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                </path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Personnel</a></h4>
                        <p class="fs-6">Without stable and professional digital Edu. teachers, ICT knowledge could not be
                            taught and delivered successfully to students. Schools hire or apply for professional ICT
                            courses teachers.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Currilculum</a></h4>
                        <p class="fs-6">
                            A well-designed curriculum plan is also very important in digital education since Teachers are
                            not able to teach without structure and content. Schools design ICT curriculum for students.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                    d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                </path>
                            </svg>
                            <i class="bx bx-arch"></i>
                        </div>
                        <h4><a href="">Policy</a></h4>
                        <p class="fs-6">Digital education is never just a short-term course for students. Only a concrete
                            and well-planned policy can lead a school’s digital edu. to go further and deeper.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pillars Section -->
    <!-- Feedbacks Section -->

    <section id="faq" class="faq section-bg">
        <div class="section-title">
            <h2>FEEDBACK SECTION</h2>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_iFe3rCd0yI" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>

    </section>
    <!-- End of Feedbacks Section -->
    <!-- Donation Section -->
    <section class="scrolling-background text-white py-3" style=" height:auto;">
        <div class="container-fluid" style="background-color: rgba(2, 2, 80, 0.796); height:auto;">
            <br>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="section-title">
                        <h2> Make a Donation </h2>
                    </div>
                    <p class="text-center">Your contribution makes a difference.</p>

                    <!-- Donation Form -->
                    <form>
                        <div class="form-group">
                            <label for="amount">Donation Amount:</label>
                            <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Your email">
                        </div>
                        <button type="submit" class="btn btn-light btn-block">Donate Now</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
        </div>
    </section>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">What are the benefits of learning Scratch programming package? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                The learners get introduced to key concepts of programming such as looping, “if-then”
                                conditions, and more.
                            </p>
                            <p>
                                They also learn how to create games and animations from MIT Scratch.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Are there any prerequisites needed to learn
                            from this package? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                There are no prior knowledges required before learning programming from our package.
                                The package is suitable for all learners especially in secondary schools.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">How do we get students started on
                            programming?<i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Scratch programming is a visual language meant to give students an easy start into coding.
                            </p>
                            <p>
                                It is a fun and creative way to introduce coding concepts and develop problem solving
                                skills.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">Who else are using this package to learn
                            programming?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                In Taiwan, this package has been taught in more than 750 primary schools by Coding Nations’
                                coaches.
                                20,000 learners created their first program with our package.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">What happens after the students learn Scratch
                            programming?<i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                First, they can easily bring their ideas to life by simulating them using Scratch.
                            </p>
                            <p>
                                Secondly, it becomes incredibly easy for students to advance into other programming
                                languages such as C, Python and JavaScript.
                            </p>
                            <p>
                                Finally, they’ve a head start over their peers in building real-life solutions using
                                technology.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
