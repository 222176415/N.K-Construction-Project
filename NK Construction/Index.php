<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nelson Kabine Construcion and Projects CC.</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!----Bootsrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section id="home" class="hero">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
                <!----Logo-->
                <a class="navbar-brand fs-4" href="#">Nelson Kabine Construction</a>
                <!----Toggle button-->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!---SideBar Header -->
                <div class="sideBar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel" style="background-color: #032B44;">
                    <div class="offcanvas-header text-white border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">N.K construction</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close" style="color: aliceblue; "></button>
                    </div>
                    <!---SideBar  Body-->
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#contact">Contact </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                        </ul>
                        <!---Button-->
                        <div class="d-flex flex-column justify-content-center align-items-center gap-3">
                            <a href="PortFolio.html" onclick="nextPage()" class="text-decoration-none px-3 py-1 rounded-4" style="background-color:white; text-align:center; color: #032B44;">Portfolio</a>
                        </div>


                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <p>SINCE 2008</p>
            <h2>Welcome to N.K Construction</h2>
            <p font-style="Verdana">Design It,We Build It!</p>
            <p>Your trusted partner for all construction needs.</p>
        </div>
        <a href="#services" class="btn">See Our Services</a> <a href="#contact" class="btn">Contact US</a>
    </section>
    <section id="services" class="bg-light mt-5">

        <div class="container-lg">
            <div class="text-center">
                <h2>Services</h2>
                <p class="lead text-muted">Professional Services Available.</p>
            </div>
            <div class="row my-5 align-items-center justify-content-center">
                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">

                        <img src="Images/ServicesImages/BrickWork.jpg" class="card-img-top" alt="BrickWork Image">
                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Building Staffs</h4>
                            <p class="lead card-subtitle">BrickWork</p>

                        </div>
                    </div>
                </div>

                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">

                        <img src="Images/ServicesImages/Plastering1.jpeg" alt="Plastering Image">

                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Plastering</h4>
                            <p class="lead card-subtitle">BrickWork</p>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">

                        <img src="Images/ServicesImages/LabourSupply.jpg" alt="Tiling Image">

                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Labour Supply</h4>
                            <p class="lead card-subtitle">Skilled Labour Supply</p>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">

                        <img src="Images/ServicesImages/Panting.jpeg" alt="Painting Image">

                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Painting</h4>
                            <p class="lead card-subtitle">Labour </p>
                        </div>
                    </div>
                </div>

            </div>
            <!--2and Row -->
            <div class="row my-5 align-items-center justify-content-center">
                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">

                        <img src="Images/ServicesImages/Renovations.jpeg" alt="Renovations Image">

                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Renovations</h4>
                            <p class="lead card-subtitle">Alterations</p>
                        </div>
                    </div>
                </div>

                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">
                        <img src="Images/ServicesImages/paving.jpg " alt="Paving Image">
                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Paving </h4>
                            <p class="lead card-subtitle">Labour Skills</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">
                        <img src="Images/ServicesImages/Tiling.jpeg" alt="Transportation Image">
                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Tiling</h4>
                            <p class="lead card-subtitle">Skilled Stuff</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-lg-4 col-xl-3">
                    <div class="card border">
                        <img src="Images/ServicesImages/Maintanance.jpeg" alt="Maintenance Image">
                        <div class="card-body text-center py-4">
                            <h4 class="card-title">Maintanance</h4>
                            <p class="lead card-subtitle">Labour & Handy Man Supply</p>
                        </div>
                    </div>

                </div>
            </div>
            <p style="text-align: center;">Feel Free to contact us for any quiries!!</p>
        </div>
    </section>
    <section id="projects">
        <div class="container-lg my-5">
            <h2>Our Projects</h2>
            <p>Take a look at some of our past projects.</p>

            <div class="row">
                <div class="col">
                    <img src="Images/ProjectsImages/Mall of Tembisa-2020.jpeg" class="img-fluid"
                        alt="Mall Of Tembisa" style="height:auto;">
                    <hr>
                    <p>Mall of Tembisa-2020</p>
                    <p class=" Project Location">Tembisa</p>
                    <p class="project-date">2020</p>
                </div>
                <div class="col">
                    <img src="Images/ProjectsImages/VW Hartfield-2013.jpeg" class="img-fluid" alt="Mall Of Tembisa"
                        style="height:auto;">
                    <hr>
                    <p>VW HARTFIELD</p>
                    <p class=" Project Location">Boksburg</p>
                    <p class="project-date">2013</p>
                </div>
                <div class="col">
                    <img src="Images/ProjectsImages/CTM & ITALIE limited Boksburg-2021.jpeg" class="img-fluid"
                        alt="Mall Of Tembisa" style="height:auto;">
                    <hr>
                    <p class="Project title">CTM & ITALIE LIMITED</p>
                    <p class=" Project Location">Boksburg</p>
                    <p class="project-date">2021</p>
                </div>
                <div class="col">
                    <img src="Images/ProjectsImages/lordsview-2021.jpeg" class="img-fluid" alt="Mall Of Tembisa"
                        style="height:auto;">
                    <hr>
                    <p class="Project title">LORDSVIEW</p>
                    <p class=" Project Location">ChloorKop</p>
                    <p class="project-date">2021</p>
                </div>
            </div>
            <br>
            <a href="portFolio.html" class="btn">See More..</a>
        </div>

    </section>

    <section id="statistics" class="statistics-section">
        <div class="container-lg my-5">
            <div class="row">
                <div class="col">
                    <h3>100+</h3>
                    <p>Projects Completed</p>
                </div>
                <div class="col">
                    <h3>98%</h3>
                    <p>Client Satisfaction Rate</p>
                </div>
                <div class="col">
                    <h3>10+</h3>
                    <p>Years of Experience</p>
                </div>
            </div>
    </section>
    <section id="contact">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header" style="text-align: center;">
                    <h2>Contact Us</h2>
                    <p>Get in touch with us for inquiries or quotes.</p>
                </div>

                <div class="card-body">
                    <form id="contact-form" method="POST" action="sendmail.php">
                        <div>
                            <label for="name">Full Name:</label>
                            <input type="text" id="full_name" name="full_name" required>
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>


                        <div>
                            <label for="Regarding">Regarding:</label>
                            <select name="Regarding" id="Regarding" required title="Please select the purpose of your contact"
                                style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                                <option value="BrickWork"> Brick Work(Building) </option>
                                <option value="Plastering"> Plastering </option>
                                <option value="Tiling"> Tiling </option>
                                <option value="Painting"> Painting </option>
                                <option value="Renovations"> Renovations </option>
                                <option value="GeneralEquiry">General Equiry </option>
                            </select>
                        </div>
                        <div>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message"></textarea>
                        </div>
                        <button type="submit" name="submitContact">Submit</button>
                    </form>
                </div>

            </div>
        </div>

    </section>
    <div id="about">
        <div class="container">
            <h2 style="display: flexbox;">About Us</h2>
            <p>Discover our journey, mission, vision, and dedicated team.</p>
            <div class="about-section">
                <h3 style="text-align: center;">History</h3><!--Add ICONS-->
                <p>Nelson Kabine Construction is a versatile construction company with over a decade of experience
                    in the industry. We have distinguished ourselves by delivering exceptional results through our
                    dedicated team of professionals. Our portfolio includes significant projects in collaboration
                    with prominent industry partners, showcasing our commitment to excellence and client
                    satisfaction.</p>
            </div>
            <div class="about-section">
                <h3 style="text-align: center;">Vision</h3>
                <p>At Nelson Kabine Construction, our vision is to be recognized as a leader in the construction
                    industry, renowned for our innovative approach, exceptional service delivery, and dedication to
                    excellence. We aim to expand our capabilities, embrace new technologies, and continue raising
                    the bar in construction standards.</p>
            </div>
            <div class="about-section">
                <h3 style="text-align: center;">Our Team</h3>
                <p>Our success is driven by our talented and diverse team of professionals who bring expertise,
                    creativity, and dedication to every project. Led by experienced industry veterans, our team
                    embodies our core values of professionalism, collaboration, and continuous improvement.</p>
            </div>
            <!-- Add more sections like Mission, Vision, Team here -->
            <!--Company Stakeholders-->
        </div>
    </div>
    </main>
    <footer>
  <div class="container">
    <div class="footer-content row row-cols-1 row-cols-md-2 row-cols-lg-4">
      <div class="col">
        <div class="logo">
          <img src="Images/Logos/Logo.jpeg" class="logo" alt="NK Construction Logo">
        </div>
      </div>
      <div class="col">
        <div class="useful-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="Index.html">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="social-links">
          <h4>Follow Us</h4>
          <ul>
            <li><a href="https://www.facebook.com/nkconstructioncc" target="_blank"><i
                    class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="https://www.instagram.com/nk_constructioncc?igsh=M2hqeDFicWVuODlz"
                    target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
            <li><a href="https://www.linkedin.com/in/YourProfile" target="_blank"><i
                    class="fab fa-linkedin"></i> LinkedIn</a></li>
          </ul>
        </div>
      </div>
      <div class="col">
        <div class="contact-info">
          <h4>Contact Information</h4>
          <p>Phone: 083 338 0122 / 072 414 9013</p>
          <p>Email: <a href="mailto:info@nkconstruction.com">kabinecc@gmail.com</a></p>
          <p>Address: 13216 Seemola street,Ivory Park Ext 12,Midrand 1685</p>
        </div>
      </div>
    </div>
    <p class="text-center">&copy; 2024 NK Construction. All rights reserved. | Website Developed By<a
          href="https://222176415.github.io/">Themba Ntimane</a></p>
    <hr class="my-4">
  </div>
</footer>

    <script src="scripts.js"></script>
    <!----For Bootsrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var messageText="<?= $_SESSION['status'] ?? ' '; ?> "

        if(messageText != ' '){
            swal({
            title: "Thank You!!",
            text: "We will contact you as Soon As Possible",
            icon: "success",
            button: "Done",
        });
        <?php unset($_SESSION['status']) ?>
        }
       
    </script>
</html>