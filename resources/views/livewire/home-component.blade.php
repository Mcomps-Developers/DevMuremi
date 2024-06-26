<div>
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Muremi Peter</h1>
                            <h2></h2>
                            <div class="typed-text">Software Engineer, DevOps</div>

                        </div>
                        <div class="hero-btn">
                            <button class="btn btn-primary">
                                <a href="{{ asset('img/muremiCv.pdf') }}" target="_blank" style="color: inherit; text-decoration: none;">
                                    My CV
                                </a>
                            </button>

                            <a href="#contact" class="btn">Contact Me</a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="{{ asset('img/hero.jpg') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('img/about.png') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>
                            <h2>4 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                I am a dedicated software engineer with 4 years of experience in the tech industry. My
                                expertise lies in developing efficient and reliable software solutions for complex
                                problems. Throughout my career, I have worked on various projects, honing my skills in
                                web development, mobile app development and network security. I am passionate about
                                leveraging technology to create impactful solutions and
                                continuously seek opportunities to expand my knowledge and skills.
                            </p>
                        </div>
                        <div class="skills">
                            <div class="skill-name">
                                <p>Web Design</p>
                                <p>93%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Mobile App Development</p>
                                <p>87%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Graphic Design</p>
                                <p>91%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>DevOps</p>
                                <p>88%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="skill-name">
                                <p>Cybersecurity</p>
                                <p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        {{-- <a class="btn" href="">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>Awesome Quality Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-server"></i> <!-- Updated icon for System Administration -->
                        </div>
                        <div class="service-text">
                            <h3>System Administration</h3> <!-- Updated title for System Administration -->
                            <p>
                                I provide comprehensive system administration services, including server management,
                                network monitoring and
                                ensuring system security and performance. My goal is to maintain and optimize IT
                                infrastructure for
                                reliability and efficiency.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="service-text">
                            <h3>Web Development</h3>
                            <p>
                                With a strong background in front-end and back-end development, I build robust, scalable
                                web applications. My tech stack includes HTML, CSS, JavaScript, laravel, livewire, blade and php.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i> <!-- Updated icon for DevOps -->
                        </div>
                        <div class="service-text">
                            <h3>DevOps Services</h3> <!-- Updated title for DevOps -->
                            <p>
                                I provide comprehensive DevOps services, including continuous integration, continuous
                                delivery and
                                automated testing to streamline your software development lifecycle and improve
                                efficiency.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fab fa-android"></i>
                        </div>
                        <div class="service-text">
                            <h3>Mobile Apps Development</h3>
                            <p>
                                I develop high-performance mobile applications using Flutter technology. My apps are
                                optimized for performance and usability, ensuring a great user experience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i> <!-- Updated icon for Graphic Design -->
                        </div>
                        <div class="service-text">
                            <h3>Graphic Design</h3> <!-- Updated title for Graphic Design -->
                            <p>
                                I specialize in creating unique and professional logos, posters,
                                and other graphic designs tailored to your needs. My designs aim to effectively
                                 communicate your brand message and attract your target audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-network-wired"></i> <!-- Updated icon for Networking -->
                        </div>
                        <div class="service-text">
                            <h3>Networking Services</h3> <!-- Updated title for Networking Services -->
                            <p>
                                I offer comprehensive networking services including network setup,
                                maintenance and troubleshooting. My work ensures reliable and secure
                                connections for your home or business, optimizing your network for peak performance.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>




    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>My Resume</h2>
                {{-- <h2>Working Experience</h2> --}}
            </header>
            <div class="timeline">


                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019 - 2025</div>
                        <h2>University</h2>
                        <h4>University of Eastern Africa, Baraton</h4>
                        <p>
                            Specialized in software engineering, concentrating on creating efficient and dependable
                            software solutions for complex challenges
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2015 - 2018</div>
                        <h2>Secondary Education</h2>
                        <h4>Stanley Godia Secondary School</h4>
                        <p>
                            Finished secondary education with a solid grounding in mathematics and Physics.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2006 - 2014</div>
                        <h2>Primary Education</h2>
                        <h4>Muhaya Primary School</h4>
                        <p>
                            Completed foundational education and established a solid academic background.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2020</div> --}}
                        <h2>IT Consultant</h2>
                        <h4>Baraton University</h4>
                        <p>
                            Provided professional guidance and solutions in various IT domains including web development,
                            project management and system optimization. Collaborated with Baraton University to enhance their IT
                            infrastructure and operations.
                        </p>
                    </div>

                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2020 - 2022</div> --}}
                        <h2>Web Developer</h2>
                        <h4>Mcomps Limited</h4>
                        <p>
                            Created web-based applications and delivered technical expertise to enhance online
                            platforms.
                        </p>
                    </div>
                </div>

                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2021 - 2022</div> --}}
                        <h2>System Admin</h2>
                        <h4>Baraton University</h4>
                        <p>
                            Managed IT infrastructure and ensured smooth operations at Baraton University.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2023</div> --}}
                        <h2>Networking and IT Support</h2>
                        <h4>Kengen Kipevu, Mombasa</h4>
                        <p>
                            Collaborated with Magal Solutions to provide networking services including network architecture design,
                             maintain network infrastructure,
                             troubleshooting and CCTV installation at Kengen Kipevu, Mombasa.
                             Ensured the smooth operation of computer systems and assisted in troubleshooting issues.

                        </p>
                    </div>
                </div>


                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2023</div> --}}
                        <h2>Software Engineering Intern</h2>
                        <h4>Smatech Labs LLC, Mombasa</h4>
                        <p>
                            Acquired practical web development experience during an internship at Smatech Labs.
                        </p>
                    </div>
                </div>


                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">Since 2024</div> --}}
                        <h2>Software Engineer </h2>

                        <h4><a href="https://m.mcomps.co.ke/"><b>Mcomps Limited</b></a></h4>
                        <p>
                            We design, develop, and support business applications using the latest technology and
                            standards.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        {{-- <div class="timeline-date">2024</div> --}}
                        <h2>Production and Quality Assurance</h2>
                        <h4> <a href="https://m.mcomps.co.ke/"><b>Mcomps Limited</b></a></h4>
                        <p>
                            Ensures production of high-quality softwares by implementing stringent quality assurance
                            processes and continuous improvement techniques.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>




    {{-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Reasonable Price</p>
                <h2>Get A <span>Special</span> Price</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                    facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                    quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Pricing Plan</a>
            </div>
        </div>
    </div> --}}




    <div class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Portfolio</p>
                <h2>My Excellent Portfolio</h2>
                <p>Below are some of my projects</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-filter">
                        {{-- <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-1">Web Development</li>
                        <li data-filter=".filter-2">Mobile Development</li>
                        <li data-filter=".filter-3">Game Dev</li> --}}
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="portfolio-wrap">
                        <a href="https://angoloexpert.com/" class="mil-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('img/portfolio-1.jpg') }}" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <a href="https://angoloexpert.com/"><b>Angolo Experts</b></a>

                                <a href="{{ asset('img/portfolio-1.jpg') }}"></a>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-wrap">
                        <a href="https://m.mcomps.co.ke/" class="mil-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('img/portfolio-2.jpg') }}" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <a href="https://m.mcomps.co.ke/"><b>Mcomps Limited</b></a>

                                <a href="{{ asset('img/portfolio-2.jpg') }}"></a>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-wrap">
                        <a href="https://pointpro.mcomps.co.ke/" class="mil-card">
                            <div class="portfolio-img">
                                <img src="{{ asset('img/portfolio-3.jpg') }}" alt="Image">
                            </div>
                            <div class="portfolio-text">

                                <a href="https://pointpro.mcomps.co.ke/"><b>Point Pro</b></a>
                                <a href="{{ asset('img/portfolio-3.jpg') }}"></a>

                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-4.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>JavaScript drawing</h3>
                            <a class="btn" href="{{ asset('img/portfolio-4.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-5.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Social Mobile Apps</h3>
                            <a class="btn" href="{{ asset('img/portfolio-5.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                    <div class="portfolio-wrap">
                        <div class="portfolio-img">
                            <img src="{{ asset('img/portfolio-6.jpg') }}" alt="Image">
                        </div>
                        <div class="portfolio-text">
                            <h3>Company Website</h3>
                            <a class="btn" href="{{ asset('img/portfolio-6.jpg') }}"
                                data-lightbox="portfolio">+</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>




    {{-- <div class="banner wow zoomIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-header text-center">
                <p>Awesome Discount</p>
                <h2>Get <span>30%</span> Discount</h2>
            </div>
            <div class="container banner-text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                    facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra
                    quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                </p>
                <a class="btn">Order Now</a>
            </div>
        </div>
    </div> --}}




    {{-- <div class="price" id="price">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>Pricing Plan</p>
                <h2>Affordable Price</h2>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Basic</h2>
                            </div>
                            <div class="price-prices">
                                <h2><small>$</small>49<span>/ mo</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 4</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Standard</h2>
                            </div>
                            <div class="price-prices">
                                <h2><small>$</small>99<span>/ mo</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 4</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="price-item">
                        <div class="price-header">
                            <div class="price-title">
                                <h2>Premium</h2>
                            </div>
                            <div class="price-prices">
                                <h2><small>$</small>149<span>/ mo</span></h2>
                            </div>
                        </div>
                        <div class="price-body">
                            <div class="price-description">
                                <ul>
                                    <li>Bootstrap 4</li>
                                    <li>Font Awesome 5</li>
                                    <li>Responsive Design</li>
                                    <li>Browser Compatibility</li>
                                    <li>Easy To Use</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-footer">
                            <div class="price-action">
                                <a class="btn" href="">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    {{-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
    <div class="container">
        <div class="testimonial-icon">
            <i class="fa fa-quote-left"></i>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-1.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-2.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="img/testimonial-3.jpg" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum. Lorem ipsum dolor sit amet consec adipis elit.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
        </div>
    </div>
</div> --}}




    <div class="team" id="team">
        <div class="container">
            {{-- <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>My Team</p>
            <h2>Expert Team Members</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Mollie Ross</h2>
                        <h4>Web Designer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Dylan Adams</h2>
                        <h4>Web Developer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Jennifer Page</h2>
                        <h4>Apps Designer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <h4>Apps Developer</h4>
                        <p>
                            Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                        </p>
                        <div class="team-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
    </div>




    <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div id="success"></div>
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" wire:model='name'
                                        required="" placeholder="Your Name" required="required"
                                        data-validation-required-message="Please enter your name" />
                                    <p class="help-block"></p>
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" wire:model='email'
                                        required="" placeholder="Your Email" required="required"
                                        data-validation-required-message="Please enter your email" />
                                    <p class="help-block"></p>
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" wire:model='subject'
                                        required="" placeholder="Subject" required="required"
                                        data-validation-required-message="Please enter a subject" />
                                    <p class="help-block"></p>
                                    @error('subject')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" wire:model='message' required="" placeholder="Message"
                                        required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block"></p>
                                    @error('message')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="blog" id="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>From Blog</p>
            <h2>Latest Articles</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Web Design</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-text">
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Apps Design</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>10</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                        </p>
                        <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div> --}}

</div>
