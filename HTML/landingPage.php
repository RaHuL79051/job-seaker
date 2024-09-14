<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Seaker</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/landingPage.css" />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container d-flex justify-content-between align-items-center">
        <h1 class="logo">Job Seaker</h1>
        <nav>
          <ul class="nav">
            <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#Founders" class="nav-link">Founders</a></li>
            <li class="nav-item"><a href="#companies" class="nav-link">Companies</a></li>
            <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
            <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="#login" class="nav-link">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Video Section -->
    <video src="../assets/videos/entry-video.mp4" id="entry_video" autoplay loop muted></video>
    <section class="video-section" id="home">
      <div class="container">
        <h2>Find Your Dream Tally Caller Job</h2>
        <p>
          Connecting job seekers with the best tally caller positions in top
          companies.
        </p>
        <video controls width="600" loop autoplay muted>
          <source src="../assets/videos/intro.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
    </section>

    <!-- Owners Section -->
    <section class="team-section" id="Founders">
      <div class="container">
        <h3 style="margin-bottom: 20px;">Founders</h3>
        <div class="row justify-content-center ownerContainer">
          <div class="col-md-4 owner">
            <img src="../assets/images/profile-2.jpg" alt="Owner 1" />
            <h5>Mandhata Singh</h5>
            <p>Founder & CEO</p>
            <div class="owner1Desc">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum illum vel dolore ex facilis distinctio rerum culpa ducimus dolorem enim praesentium porro adipisci, optio aliquid assumenda. Totam, eum! Tempora minus neque laboriosam inventore maxime! Ab quisquam quas voluptatibus soluta.</p>
            </div>
          </div>
          <div class="col-md-4 owner">
            <img src="../assets/images/profile-1.jpg" alt="Owner 2" />
            <h5>Rahul Saxena</h5>
            <p>Co-Founder & CEO</p>
            <div class="owner2Desc"></div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum illum vel dolore ex facilis distinctio rerum culpa ducimus dolorem enim praesentium porro adipisci, optio aliquid assumenda. Totam, eum! Tempora minus neque laboriosam inventore maxime! Ab quisquam quas voluptatibus soluta.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Companies -->
    <div class="container" id="companies">
      <h2 class="text-center mb-5" style="margin-top: 10px;">Top Companies</h2>
      <div class="row">
        <!-- Company 1 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm companyCard">
            <img src="../assets/images/tech_mahendra.png" class="card-img-top companyCardImg" alt="Company 1 Logo">
            <div class="card-body">
              <h5 class="card-title">Tech Mahendra</h5>
              <p class="card-text">A leader in the tally calling industry, Company 1 has helped many candidates land their dream jobs.</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>

        <!-- Company 2 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm companyCard">
            <img src="../assets/images/Corporate connect.png" class="card-img-top companyCardImg" alt="Company 2 Logo">
            <div class="card-body">
              <h5 class="card-title">Corporate Connect</h5>
              <p class="card-text">Renowned for their growth opportunities and employee satisfaction, Company 2 is one of the top employers in the field.</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>

        <!-- Company 3 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm companyCard">
            <img src="assets/images/company3-logo.png" class="card-img-top companyCardImg" alt="Company 3 Logo">
            <div class="card-body">
              <h5 class="card-title">Company 3</h5>
              <p class="card-text">Focused on innovation, Company 3 has been a front-runner in the tally calling domain.</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>

        <!-- Company 4 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm companyCard">
            <img src="assets/images/company4-logo.png" class="card-img-top companyCardImg" alt="Company 4 Logo">
            <div class="card-body">
              <h5 class="card-title">Company 4</h5>
              <p class="card-text">Company 4 stands out for its employee-centric policies and high success rate in placing candidates in top positions.</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>

        <!-- Company 5 -->
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm companyCard">
            <img src="assets/images/company5-logo.png" class="card-img-top companyCardImg" alt="Company 5 Logo">
            <div class="card-body">
              <h5 class="card-title">Company 5</h5>
              <p class="card-text">With a proven track record, Company 5 is known for its extensive network and strong support for job seekers.</p>
              <a href="#" class="btn btn-primary">View Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Developer Team Section -->
    <section class="team-section bg-light py-5" id="team">
        <div class="container">
          <h3 class="text-center mb-4">Meet Out Development Team</h3>
          <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
              <!-- Slide 1 (First 5 Developers) -->
              <div class="carousel-item active">
                <div class="row justify-content-center">
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-1.jpg" class="card-img-top rounded-circle" alt="Developer 1">
                      <div class="card-body">
                        <h5 class="card-title">Developer 1</h5>
                        <p class="card-text">Frontend Developer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-2.jpg" class="card-img-top rounded-circle" alt="Developer 2">
                      <div class="card-body">
                        <h5 class="card-title">Developer 2</h5>
                        <p class="card-text">Backend Developer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-3.jpg" class="card-img-top rounded-circle" alt="Developer 3">
                      <div class="card-body">
                        <h5 class="card-title">Developer 3</h5>
                        <p class="card-text">UI/UX Designer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-4.jpg" class="card-img-top rounded-circle" alt="Developer 4">
                      <div class="card-body">
                        <h5 class="card-title">Developer 4</h5>
                        <p class="card-text">Full Stack Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 2 (Next 5 Developers) -->
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-6.jpg" class="card-img-top rounded-circle" alt="Developer 6">
                      <div class="card-body">
                        <h5 class="card-title">Developer 6</h5>
                        <p class="card-text">Data Scientist</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-7.jpg" class="card-img-top rounded-circle" alt="Developer 7">
                      <div class="card-body">
                        <h5 class="card-title">Developer 7</h5>
                        <p class="card-text">Security Engineer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-8.jpg" class="card-img-top rounded-circle" alt="Developer 8">
                      <div class="card-body">
                        <h5 class="card-title">Developer 8</h5>
                        <p class="card-text">Mobile App Developer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-9.jpg" class="card-img-top rounded-circle" alt="Developer 9">
                      <div class="card-body">
                        <h5 class="card-title">Developer 9</h5>
                        <p class="card-text">QA Engineer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 3 (Last 5 Developers) -->
              <div class="carousel-item">
                <div class="row justify-content-center">
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-11.jpg" class="card-img-top rounded-circle" alt="Developer 11">
                      <div class="card-body">
                        <h5 class="card-title">Developer 11</h5>
                        <p class="card-text">Machine Learning Engineer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-12.jpg" class="card-img-top rounded-circle" alt="Developer 12">
                      <div class="card-body">
                        <h5 class="card-title">Developer 12</h5>
                        <p class="card-text">System Analyst</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-13.jpg" class="card-img-top rounded-circle" alt="Developer 13">
                      <div class="card-body">
                        <h5 class="card-title">Developer 13</h5>
                        <p class="card-text">Game Developer</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 developer">
                    <div class="card text-center shadow-sm p-3 mb-5 bg-body rounded">
                      <img src="../assets/images/profile-14.jpg" class="card-img-top rounded-circle" alt="Developer 14">
                      <div class="card-body">
                        <h5 class="card-title">Developer 14</h5>
                        <p class="card-text">Blockchain Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </section>

  <!-- Login Form Section -->
    <section class="login-form-section d-flex justify-content-between align-items-center" style=" color: black !important;" id="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white quoteContainer">
                        <h2 style="color: black;">Join Job Seaker</h2>
                        <p style="color: black;">Find the best opportunities in tally caller jobs. Companies are looking for people like you! Login and start your journey.</p>
                        <div class="quote-section">
                            <!-- Initial Quote -->
                            <div class="quote active">"The only way to do great work is to love what you do." - Steve Jobs</div>
                            <div class="quote">"Success is not the key to happiness. Happiness is the key to success." - Albert Schweitzer</div>
                            <div class="quote">"Don’t watch the clock; do what it does. Keep going." - Sam Levenson</div>
                            <div class="quote">"The future depends on what you do today." - Mahatma Gandhi</div>
                            <div class="quote">"Success is not final, failure is not fatal: It is the courage to continue that counts." - Winston Churchill</div>
                            <div class="quote">"Believe you can and you're halfway there." - Theodore Roosevelt</div>
                            <div class="quote">"Your time is limited, so don’t waste it living someone else’s life." - Steve Jobs</div>
                            <div class="quote">"It always seems impossible until it’s done." - Nelson Mandela</div>
                            <div class="quote">"The only way to do great work is to love what you do." - Steve Jobs</div>
                            <div class="quote">"Don’t watch the clock; do what it does. Keep going." - Sam Levenson</div>
                            <div class="quote">"Hardships often prepare ordinary people for an extraordinary destiny." - C.S. Lewis</div>
                            <div class="quote">"I am not a product of my circumstances. I am a product of my decisions." - Stephen Covey</div>
                            <div class="quote">"Start where you are. Use what you have. Do what you can." - Arthur Ashe</div>
                            <div class="quote">"The only limit to our realization of tomorrow is our doubts of today." - Franklin D. Roosevelt</div>
                            <div class="quote">"You miss 100% of the shots you don't take." - Wayne Gretzky</div>
                            <div class="quote">"Success usually comes to those who are too busy to be looking for it." - Henry David Thoreau</div>
                            <div class="quote">"The best way to predict the future is to create it." - Peter Drucker</div>
                            <div class="quote">"Don’t be pushed around by the fears in your mind. Be led by the dreams in your heart." - Roy T. Bennett</div>

                        </div>
                    </div>
                    <div class="col-md-4 login-form">
                        <h4 style="text-align: center; margin-bottom: 10px;">Login to Job Seaker</h4>
                        <form id="LoginForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <p style="text-align: center; margin-top: 10px;">Don't have an Account? <a href="./signUP.html">click here</a></p>
                        </form>
                    </div>
                </div>
            </div>
    </section>

  <!-- Footer -->
    <footer class="bg-dark text-white pt-5" id="footer">
        <div class="container">
          <div class="row">
            <!-- About Section -->
            <div class="col-md-3 mb-3">
              <h5>About Job Seaker</h5>
              <p>Job Seaker connects companies with potential employees in the tally caller sector, offering opportunities and creating employment paths.</p>
            </div>
      
            <!-- Quick Links Section -->
            <div class="col-md-3 mb-3">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Home</a></li>
                <li><a href="#Founders" class="text-white">Founder</a></li>
                <li><a href="#companies" class="text-white">Companies</a></li>
                <li><a href="#team" class="text-white">Team</a></li>
              </ul>
            </div>
      
            <!-- Contact Info Section -->
            <div class="col-md-3 mb-3">
              <h5>Contact Us</h5>
              <ul class="list-unstyled">
                <li><i class="fas fa-phone-alt"></i> +91-7905157775</li>
                <li><i class="fas fa-envelope"></i> jobseakerhelp@gmail.com</li>
                <li><i class="fas fa-map-marker-alt"></i> Lucknow, Uttar Pradesh, India</li>
              </ul>
            </div>
      
            <!-- Newsletter Section -->
            <div class="col-md-3 mb-3">
              <h5>Subscribe to our Newsletter</h5>
              <form>
                <div class="mb-3">
                  <input type="email" class="form-control" id="newsletterEmail" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
            </div>
          </div>
      
          <hr class="border-light">
      
          <div class="row justify-content-between">
            <!-- Social Media Section -->
            <div class="col-md-6">
              <h5>Follow Us</h5>
              <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-2x"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
      
            <!-- Report an Issue Section -->
            <div class="col-md-6 text-md-end">
              <a href="mailto:support@jobseaker.com?subject=Report an Issue" class="btn btn-outline-light">
                <i class="fas fa-exclamation-circle"></i> Report an Issue
              </a>
            </div>
          </div>
      
          <!-- Copyright Section -->
          <div class="row mt-3">
            <div class="col text-center">
              <p class="mb-0">&copy; 2024 Job Seaker. All Rights Reserved.</p>
            </div>
          </div>
        </div>
    </footer>
    <script src="../JS/landingPage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>