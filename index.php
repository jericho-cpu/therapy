<?php 

    include 'header.php';
    include 'login.php';

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets-homepage/img/slide/b2.gif)">
          <div class="container">
            <h2>Welcome to <span>SVFC Guidance and Counseling</span></h2>
            <p>Stay Safe, Stay healthy,we care of your healthy life</p>
            <a href="https://e-therapy.hi.link" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets-homepage/img/slide/b4.gif)">
          <div class="container">
            <h2><span>Online Consulting</span></h2>
            <p>In the digital age, healing knows no boundaries. Online therapy bridges the gap between distance and healing, offering solace with just a click</p>
            <a href="https://e-therapy.hi.link" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets-homepage/img/slide/b6.gif)">
          <div class="container">
            <h2><span>Make a Session with Therapist</span></h2>
            <p>In the realm of online therapy, words become whispers of hope, echoing across screens to touch hearts and heal minds.</p>
            <a href="https://e-therapy.hi.link" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    




    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>THERAPISTS</h2>
           <p>A therapist is a trained mental health professional who helps individuals navigate and overcome psychological challenges such as anxiety, depression, and relationship issues. They employ various therapeutic techniques to support clients in achieving emotional well-being and personal growth.</p>
        </div>

        <div class="row d-flex justify-content-center">
          <?php 
              $fetch = mysqli_query($conn, "SELECT * FROM therapist");
              while ($row = mysqli_fetch_array($fetch)) {
          ?>
          <div class="col-lg-3 col-md-6 d-flex justify-content-evenly">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img" style="width: 300px">
                <img src="images-therapist/<?php echo $row['image']; ?>" style="width: 70%; height: 230px;">
                <div class="social">
                  <!--<a href=""><i class="bi bi-twitter"></i></a>-->
                  <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                  <!--<a href=""><i class="bi bi-linkedin"></i></a> -->
                  <a href="register.php">Work with me</a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo ' '.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].' '.$row['suffix'].' '; ?></h4>
                <span>Therapist</span>
              </div>
            </div>
          </div>
        <?php } ?>
          

        </div>

      </div>
    </section><!-- End Doctors Section -->





   
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Everyone struggles at times. Our core purpose is to make it easier for people to access mental health services and the dedicated professionals who provide them, anywhere in the world.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets-homepage/img/abot.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Online Counseling</h3>
            <p class="fst-italic">
            As you take the next step to find the right therapist for you,
             I’d like to tell you about my therapy practice and share my approach to helping my clients achieve their goals..
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>  therapist with a masters degree.</li>
              <li><i class="bi bi-check-circle"></i>  We believe strongly that every therapeutic relationship is sacred and truly enjoy building deep connections with my clients.</li>
              <li><i class="bi bi-check-circle"></i> I create customized therapy and treatment plans that are specifically suited for each client’s objectives.</li>
            </ul>
            <p>
            Online therapist believes that with the right support, anyone is capable of healing, growth, and change.
             Whether you’re interested in mental health services or you provide them, you’ve come to the right place
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
     <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong>  are trained medical professionals who diagnose, treat, and prevent illnesses, injuries, and medical conditions to promote overall health and well-being.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong>  are the building blocks of success, each brick contributing to the strength of the institution.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Research Lab</strong>  In the laboratory of discovery, curiosity is our compass, and innovation is our destination.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong> Recognizing achievements that shape the future.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section> 
    <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
     <!--<section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>onsequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets-homepage/img/img6.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->
    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>The best service offer</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="#">Total Care</a></h4>
            <p class="description">"Your holistic wellness is our priority. We're here to support your physical, emotional, and mental health journey every step of the way."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="#">Realiable</a></h4>
            <p class="description">"Count on us for consistent, trustworthy support tailored to your needs, ensuring peace of mind and satisfaction."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="#">Therapist</a></h4>
            <p class="description">"Compassionate support for your mental health and well-being, guiding you towards resilience and personal growth."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="#">24/7 Support</a></h4>
            <p class="description">"Immediate assistance and guidance available round-the-clock, ensuring you're never alone in facing life's challenges."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="#">Afordable</a></h4>
            <p class="description">"Accessible care tailored to your budget, ensuring quality support without financial strain."</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="#">Online Consultation</a></h4>
            <p class="description">"Convenient virtual sessions offering personalized support and guidance from the comfort of your own space."</p>
          </div>
        </div>

      </div>
    </section> 
    <!-- End Services Section -->
<!-- ======= FAQ Section ======= -->
<section id="faq" class="faq">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>FAQs</h2>
    </div>

    <div class="row">
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <div class="faq-list">
          <!-- FAQ item 1 -->
          <div class="faq-item">
            <h4 class="question">How does eTherapy work?</h4>
            <div class="answer">eTherapy, also known as online therapy or teletherapy, involves receiving therapy sessions remotely through digital platforms such as video calls, chat messages, or phone calls. It offers the same benefits as traditional in-person therapy, including confidential support from licensed therapists, convenient scheduling, and accessibility from the comfort of your own home.</div>
          </div>
          
          <!-- FAQ item 2 -->
          <div class="faq-item">
            <h4 class="question"> eTherapy confidential?</h4>
            <div class="answer">Yes, eTherapy prioritizes confidentiality and privacy. All communication between you and your therapist is secure and protected by encryption. Therapists adhere to strict confidentiality guidelines, similar to in-person therapy sessions, ensuring that your personal information remains confidential.</div>
          </div>
          
          <!-- Add more FAQ items as needed -->
          <div class="faq-item">
            <h4 class="question">What issues can be addressed through eTherapy?</h4>
            <div class="answer">eTherapy can effectively address a wide range of mental health concerns, including anxiety, depression, stress, relationship issues, trauma, grief, and more. Licensed therapists provide personalized treatment plans tailored to your specific needs and goals, helping you navigate and overcome various challenges in your life.</div>
          </div>
          
          <!-- Add more FAQ items as needed -->

        </div>
      </div>
    </div>

  </div>
</section>
<!-- End FAQ Section -->

<script>
  // Get all FAQ items
  var faqItems = document.querySelectorAll('.faq-item');

  // Loop through each FAQ item
  faqItems.forEach(function(item) {
    // Add click event listener to each question
    var question = item.querySelector('.question');
    question.addEventListener('click', function() {
      // Toggle the 'active' class on the clicked question
      question.classList.toggle('active');
      // Toggle the 'show' class on the answer to show/hide it
      var answer = item.querySelector('.answer');
      answer.classList.toggle('show');
    });
  });
</script>

<style>
  .faq-item {
    margin-bottom: 20px;
  }

  .question {
    cursor: pointer;
    margin-bottom: 10px;
    color: #333;
  }

  .answer {
    display: none;
    padding-left: 20px;
  }

  .answer.show {
    display: block;
  }

  .question.active {
    font-weight: bold;
  }
</style>


   
    <!-- Doctors Section -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Client Review</h2>
          <p>This review can provide a better understanding of the current role of client feedback in psychotherapy for children and adolescents, 
            as well as future directions that promote evidence-based practice in child and adolescent psychotherapy.</p>
        </div>

        <div class="row d-flex justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets-homepage/img/doctors/client.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>James</h4>
                <span>Insightful and informative, providing a concise overview of key points and recommendations.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets-homepage/img/doctors/client.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Justine</h4>
                <span>Take the first step towards a healthier mind. Try online therapy today and discover the support you need, conveniently from wherever you are.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets-homepage/img/doctors/client.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Juana</h4>
                <span> Transformative journey towards self-discovery and growth, facilitated by compassionate support and effective strategies.</span>
              </div>
            </div>
          </div>

           <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets-homepage/img/doctors/client.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda</h4>
                <span>Struggling with stress, anxiety, or other mental health challenges? Online therapy offers a safe space to explore your feelings and find solutions. Start your journey to healing now.</span>
              </div>
            </div>
          </div> 

        </div>

      </div>
    </section><!-- End Doctors Section



    <!-- ======= Contact Section ======= -->
     <!--<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>"Let's connect! Reach out to me via email or phone."</p>
        </div>

      </div>

      

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Manila, Philippines</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>jerichoasug453@gmail.com<br>etherapy@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>-->
    <!-- End Contact Section -->

  </main><!-- End #main -->

<?php include 'footer.php'; ?>