<!-- home section -->
<section class="home active">
    <div class="home-detail">
        <h1>Hi, I'm Diaa Mohammad</h1>
        <h2>I am a 
            <!-- span class="txt-type" data-wait="3000" data-words='["Senior PHP Developer", "Coder", "Designer", "Web Developer", "Full Stack Developer"]'></span -->
            <span style="--i:5" data-text="Full Stack Developer">Full Stack Developer</span>
            <span style="--i:4;" data-text="Coder">Coder</span>
            <span style="--i:3;" data-text="Designer">Designer</span>
            <span style="--i:2;" data-text="Web Developer">Web Developer</span>
            <span style="--i:1;" data-text="Senior PHP Developer">Senior PHP Developer</span>
        </h2>
        <p>As a Senior PHP Developer, I have extensive experience in developing and maintaining dynamic web applications. My expertise includes working with various PHP frameworks, optimizing database queries, and ensuring code quality through best practices and testing. I am passionate about coding and continuously learning new technologies to improve my skills and deliver high-quality solutions.</p>
        <!-- p>Senior PHP Developer</p -->
        <div class="btn-sci">
            <a target="_blank" href="{{ asset('docs/DMohammad-it-en-2024-06.pdf') }}" class="btn">Download CV</a>
            <div class="sci">
                <a target="_blank" href="https://www.linkedin.com/in/diaamohammad/"><i class='bx bxl-linkedin'></i></a>
                <a target="_blank" href="https://github.com/diaahere89"><i class='bx bxl-github'></i></a>
                <a target="_blank" href="https://wa.me/393896641859"><i class='bx bxl-whatsapp'></i></a>
                <!-- a target="_blank" href="#"><i class='bx bxl-instagram'></i></>
                <a target="_blank" href="#"><i class='bx bxl-facebook'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-twitter'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-youtube'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-tiktok'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-telegram'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-discord'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-reddit'></i></a>
                <a target="_blank" href="#"><i class='bx bxl-snapchat'></i></a -->
            </div>
            {{-- <a href="#" class="btn">Hire Me</a> --}}
        </div>
    </div>

    <div class="home-img">
        <div class="img-box">
            <div class="img-item">
                <img src="{{ asset('img') }}/developer-dmohammad.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- services section -->
<section class="services">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >Web Development</h3>
            <p>I specialize in creating responsive and user-friendly websites using the latest web technologies. From front-end development to back-end programming, I ensure that your website is optimized for performance and meets your business goals.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bxs-paint'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >UI/UX Design</h3>
            <p>I create intuitive and visually appealing user interfaces that enhance user experience and engagement. My designs are focused on usability, accessibility, and aesthetics to ensure a seamless interaction for users.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-palette'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >Graphic Design</h3>
            <p>I offer creative graphic design services that bring your brand to life. From logos to marketing materials, I ensure that your visual identity is cohesive and impactful.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-trending-up'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >SEO</h3>
            <p>I provide comprehensive SEO services to improve your website's visibility and ranking on search engines. My strategies include keyword research, on-page optimization, and link building to drive organic traffic and enhance your online presence.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-slideshow'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >Video Editing</h3>
            <p>I offer professional video editing services to help you create engaging and visually appealing videos. Whether you need promotional videos, social media content, or personal projects, I can transform your raw footage into a polished final product.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-camera'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3 >Photography</h3>
            <p>I provide professional photography services to capture your special moments with creativity and precision. From portraits to events, I ensure high-quality images that tell your unique story.</p>
        </div>
    </div>
</section>

<!-- resume section -->
<section class="resume">
    <div class="resume-container">
        <div class="resume-box">
            <h2>Why Hire Me?</h2>
            <p class="desc">
                Senior PHP developer with high passion for the IT sector and development activities since 2019. A quick learner, organized and straight to the point. With over {{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(2018, 1, 1)) }} years of experience in web development, I bring a wealth of knowledge and expertise to every project. My commitment to delivering high-quality, efficient, and innovative solutions ensures that your business goals are met with precision and excellence.
            </p>
            <button class="resume-btn active">Experience</button>
            <button class="resume-btn">Education</button>
            <button class="resume-btn">Tech Stack</button>
            <button class="resume-btn">About Me</button>
        </div>

        <div class="resume-box">
            <div class="resume-detail experience active">
                <h2 class="heading">My <span>Experience</span></h2>
                <p class="desc">Since 2019, I have been honing my skills as a PHP developer, working on a variety of projects that range from small business websites to large-scale web applications. My journey has involved mastering PHP frameworks like Laravel and Symfony, optimizing database interactions, and implementing best practices for code quality and performance. My experience has equipped me with the ability to tackle complex problems, deliver efficient solutions, and continuously adapt to the evolving landscape of web development.</p>
                <div class="resume-list">
                    <div class="resume-item">
                        <p class="year">Sept. 2020 - Present</p>
                        <h3>Senior PHP Developer</h3>
                        <p class="company">Sinapto srl, Milan, Italy</p>
                        <p>Working as part of a team in programming applications that are often web-based for clients.</p>
                    </div>
                    <div class="resume-item">
                        <p class="year">2019 - 2020</p>
                        <h3>Full Stack Developer</h3>
                        <p class="company">Electro Adda S.p.A.<br>Beverate di Brivio, Brivio LC</p>
                        <p>Design and development of the company digital platform for its technical catalogues and products.</p>
                    </div>
                </div>
            </div>

            <div class="resume-detail education">
                <h2 class="heading">My <span>Education</span></h2>
                <p class="desc">
                    I hold a Bachelor of Science in Industrial Engineering, which I obtained in 2011. In 2017, I furthered my education by earning a Master of Engineering Management, equipping me with advanced skills in managing engineering projects and teams.
                </p>
                <div class="resume-list">
                    <div class="resume-item resume-item-education">
                        <p class="year">2021</p>
                        <h3>ITIL Certificate</h3>
                        <p class="company">ITIL</p>
                        <p>
                            The ITIL Certificate has provided me with a comprehensive understanding of IT service management best practices, enabling me to effectively align IT services with business needs and improve service delivery.
                        </p>
                    </div>
                    <div class="resume-item resume-item-education">
                        <p class="year">2020</p>
                        <h3>Masters in Engineering Management</h3>
                        <p class="company">Politecnico di Milano, Italy</p>
                        <p>
                            During my study at the Politecnico di Milano, I gained in-depth knowledge and skills in engineering management, which have been instrumental in my ability to lead projects and teams effectively.
                        </p>
                    </div>
                    <div class="resume-item resume-item-education">
                        <p class="year">2011</p>
                        <h3>BSc degree in industrial engineering</h3>
                        <p class="company">Fayoum University, Egypt</p>
                        <p>
                            I earned my Bachelor of Science in Industrial Engineering from Fayoum University in 2011, laying the foundation for my career in engineering and project management.
                        </p>
                    </div>
                    <div class="resume-item resume-item-education">
                        <p class="year">2012 - 2013</p>
                        <h3>Occupational Safety and Health</h3>
                        <p class="company">OSHAcademy, Oregon, United States</p>
                        <p>132-HOUR OSH PROFESSIONAL PROGRAM provided me with essential knowledge and skills in occupational safety and health, preparing me to effectively manage workplace safety and compliance.
                        </p>
                    </div>
                </div>
            </div>

            <div class="resume-detail skills">
                <h2 class="heading">My <span>Tech Stack</span></h2>
                <p class="desc">I have a strong command of various technologies including PHP 8.3, Laravel 11, HTML5, CSS3, JavaScript, and Docker. My expertise allows me to build robust, scalable, and efficient web applications.</p>
                <div class="resume-list">

                    <!-- back-end technologies -->
                    <div class="resume-item">
                        <i class='bx bxl-php'></i>
                        <span>PHP 8.3</span>
                    </div>

                    <div class="resume-item">
                        <i class="fab fa-laravel"></i>
                        <span>Laravel 11</span>
                    </div>
                    
                    <div class="resume-item">
                        <i class='bx bxl-git'></i>
                        <span>git</span>
                    </div>

                    <div class="resume-item">
                        <i class='bx bxl-docker'></i>
                        <span>Docker</span>
                    </div>

                    <div class="resume-item">
                        <i class='bx bxl-postgresql'></i>
                        <span>PostgreSQL</span>
                    </div>

                    <div class="resume-item">
                        <i class="fa-brands fa-linux"></i>
                        <span>Linux systems</span>
                    </div>



                    <!-- front-end technologies -->
                    <div class="resume-item">
                        <i class='bx bxl-html5'></i>
                        <span>HTML5</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-css3'></i>
                        <span>CSS3</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-javascript'></i>
                        <span>JavaScript</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-jquery'></i>
                        <span>jQuery</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-bootstrap'></i>
                        <span>Bootstrap</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxl-tailwind-css'></i>
                        <span>Tailwind CSS</span>
                    </div>

                </div>
            </div>

            <div class="resume-detail about">
                <h2 class="heading">About <span>Diaa</span></h2>
                <p class="desc">Dedicated and passionate individual who thrives on challenges and continuous learning. Outside of work, I enjoy exploring new technologies, reading, and spending quality time with my family.</p>
                <div class="resume-list">
                    <div class="resume-item">
                        <p>Name <span>Diaa Mohammad</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Gender <span>Male</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Age <span>{{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(1989, 8, 14)) }} Years Old</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Status <span>Married</span></p>
                    </div>
                    <div class="resume-item">
                        <p>City <span>Milan</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Nationality <span>Egyptian</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Experience <span>{{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::createFromDate(2018, 1, 1)) }}+ Years</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Freelance <span>Available</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Phone <span>(+39) 3896641859</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Email <span>delgendy.it@gmail.com</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Languages <span>Arabic, English, Italian, French</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- portfolio section -->
<section class="portfolio">
    <h2 class="heading">Latest <span>Projects</span></h2>
    <div class="portfolio-container">
        <div class="portfolio-box">
            <div class="portfolio-detail active">
                <p class="numb">01</p>
                <h3>Full-Stack Project</h3>
                <p>This full-stack project was developed for a construction company in the KSA using Laravel for the back-end, and AJAX, jQuery, HTML5, CSS3, and JavaScript for the front-end. The application features a dynamic and responsive user interface, seamless data handling, and efficient server-side processing. It showcases the integration of modern web technologies to deliver a robust and user-friendly experience.</p>
                <div class="tech">
                    <p>Laravel, JavaScript, HTML5, CSS3</p>
                </div>
                <div class="live-github">
                    <a target="_blank" href="https://albasam-ecm.com/"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a target="_blank" href="https://github.com/diaahere89"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div>

            <!--div class="portfolio-detail">
                <p class="numb">02</p>
                <h3>Full Stack Project</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                <div class="tech">
                    <p>MongoDB, Express.js, React.js, Node.js</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">03</p>
                <h3>Frontend Project</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                <div class="tech">
                    <p>React.js, Tailwind CSS</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">04</p>
                <h3>Full Stack Project</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                <div class="tech">
                    <p>MongoDB, Express.js, AngularJS, Node.js</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">05</p>
                <h3>Frontend Project</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                <div class="tech">
                    <p>Vue.js, Tailwind CSS</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div>

            <div-- class="portfolio-detail">
                <p class="numb">06</p>
                <h3>Full Stack Project</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit asperiores natus rerum saepe. Eum modi assumenda quaerat temporibus.</p>
                <div class="tech">
                    <p>MongoDB, Express.js, Vue.js, Node.js</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class='bx bx-arrow-back'></i><span>Live Project</span></a>
                    <a href="#"><i class='bx bxl-github'></i><span>Github Repository</span></a>
                </div>
            </div-->

        </div>

        <div class="portfolio-box">
            <div class="portfolio-carousel">
                <div class="img-slide">
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio-1-ecm.png">
                    </div>
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio2.jpg">
                    </div>
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio3.jpg">
                    </div>
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio4.jpg">
                    </div>
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio5.jpg">
                    </div>
                    <div class="img-item">
                        <img src="{{ asset('img') }}/portfolio6.jpg">
                    </div>
                </div>
            </div>

            <!--div class="navigation">
                <button class="arrow-left disabled"><i class='bx bx-chevron-left'></i></button>
                <button class="arrow-right"><i class='bx bx-chevron-right'></i></button>
            </div-->
        </div>
    </div>
</section>

<!-- contact section -->
<section class="contact">
    <div class="contact-container">
        <div class="contact-box">
            <h2>Let's Work Together</h2>
            <p class="desc">
                I am dedicated to delivering top-notch solutions tailored to your needs. Let's collaborate to bring your vision to life—contact me today!
            </p>
            <div class="contact-detail">
                <i class='bx bxs-phone'></i>
                <div class="detail">
                    <p>Phone</p>
                    <p>(+39) 389 664 1859</p>
                </div>
            </div>
            <div class="contact-detail">
                <i class='bx bxs-envelope'></i>
                <div class="detail">
                    <p>Email</p>
                    <p>delgendy.it@gmail.com</p>
                </div>
            </div>
            <div class="contact-detail">
                <i class='bx bxs-map'></i>
                <div class="detail">
                    <p>Address</p>
                    <p>Via Monte Grappa, 19, Vanzago, MI, Italy</p>
                </div>
            </div>
        </div>

        <div class="contact-box">
            <form action="">
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    @csrf
                    <input name="full_name" type="text" placeholder="Full Name" required>
                    <input name="email_address" type="email" placeholder="Email Address" required>
                    <input name="phone_number" type="text" placeholder="Phone Number" required>
                    <input name="email_subject" type="text" placeholder="Email Subject" required>
                    <textarea name="message_details" id="" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>
