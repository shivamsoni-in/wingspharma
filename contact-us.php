<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Contact Us | Wings Pharma"> 
  <meta name="description" content="Please contact us with any questions or comments you may have about Wings Pharma products. Your comments and suggestions are important to us."/>
  <title>Contact Us | Wings Pharma</title>
</head>
<?php include 'header.php';?>


<br><br>

<section id="services" class="services section-bg mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1 class="mece mb-0"><span class="ceme">C</span>ontact US</h1>
          <h2></h2>
          <p class="text-dark fw-bold">Please contact us with any questions or comments you may have about Wings Pharma products. 
            Your comments and suggestions are important to us.</p>
        </div>
      </div>
  </section>

<div class="container">

        <!-- <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 class="mece mb-0"><span class="ceme">G</span>ET IN TOUCH</h3>
            </div>
        </div> -->

  <div class="row gx-1 justify-content-center align-items-center">

    <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">

        <div class="container px-lg-5 px-2 my-5">
            <form id="contact" action="send_mail.php" method="post">
                <div class="form-floating mb-3 border border-dark rounded">
                    <select class="form-select" id="selectone" name="selectone" aria-label="Select Any One">
                        <!-- <option value="Select Any One">Select Any One</option> -->
                        <!-- <option value="I Am">I am</option> -->
                        <!-- <option value="Partner">Partner</option> -->
                        <option value="Distributor">Distributor</option>
                        <option value="Job Seeker">Job Seeker</option>
                        <option value="Retailer">Retailer</option>
                    </select>
                    <label for="name">Select Any One</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control border border-dark" id="name" name="name" type="text" placeholder="Name" required>
                    <label for="newField6">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control border border-dark" id="mobile" name="mobile" type="tel" placeholder="mobile" pattern="[6-9]{1}[0-9]{9}" required>
                    <label for="mobile">Mobile</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control border border-dark" id="email" name="email" type="email" placeholder="Email Address" required>
                    <label for="emailAddress">Email Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control border border-dark" id="city" name="city" type="text" placeholder="City">
                    <label for="city">City</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control border border-dark" id="pincode" name="pincode" type="text" placeholder="Pincode" required>
                    <label for="pincode">Pincode</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control border border-dark" id="comment" name="comment" type="text" placeholder="Comments" style="height: 10rem;" required></textarea>
                    <label for="comment">Comments</label>
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Send</button>
                </div>
            <!-- <script type="text/javascript">
              function sweet(){
                const Toast = Swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })

                Toast.fire({
                icon: 'success',
                title: 'Submitting Form'
                }) 
              }
            </script> -->

            </form>
        </div>
    </div>

    <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
        <div class="container">
            <div class="">
                <h3 class="">How Can We Help ?</h3>
                <p class="h6 fw-bold text-dark">Please select a topic below related to your inquiry. If you don't find what you need, fill out our contact form.</p>
            </div>
        </div>
        <hr>

        <a href="careers.php">
            <h4 class="h5 fw-bold">Join Our Team <i class="fa fa-arrow-right"></i></h6>
            <hr>
        </a>
        <a href="vendor.php">
            <h5 class="h5 fw-bold">Became Our Partner <i class="fa fa-arrow-right"></i></h6>
            <hr>
        </a>

        <a href="https://shop.wingspharma.com/" target="_blank">
            <h6 class="h5 fw-bold">Check Our Product <i class="fa fa-arrow-right"></i></h6>
            <hr>
        </a>

    </div>

  </div>
</div>


<section id="services" class="services2 mb-3">
      <div class="container text-center">

        <div class="section-title">
          <h2 class="mece"><span class="ceme">G</span>ET IN TOUCH</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
            <div class="icon-box w-100 border py-4">
              <a href="mailto:care@wingspharma.com">
                <div class="icon"><i class="fa fa-envelope"></i></div>
                <p class="description fw-bold">
                    care@wingspharma.com
                </p>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="1000">
            <div class="icon-box w-100 border py-4">
              <a href="tel:1800 120 5251">
                <div class="icon"><i class="fa fa-phone-square"></i></div>
                <p class="description fw-bold">
                    1800 120 5251
                </p>
              </a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
            <div class="icon-box w-100 border py-4">
                <div class="icon"><i class="fa fa-map-marker"></i></div>
                <p class="description fw-bold">
                    Registered Office <br><hr>
                </p>
                <p class="description fw-bold">
                  D-6 Udyog Nagar Industrial Area, 
                  Near Peera Garhi Metro Station, Delhi-110041
                </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
            <div class="icon-box w-100 border py-4">
                <div class="icon"><i class="fa fa-map-marker"></i></div>
                <p class="description fw-bold">
                    Corporate Office <br><hr>
                </p>
                <p class="description fw-bold">
                  14th Floor, KLJ Tower, Netaji Subhash Place,
                  Pitampura, Delhi-110034
                </p>
                
                <a href="https://maps.app.goo.gl/sKbko66336depGNu5" target="_blank">
                    <p class="description fw-bold">
                        <button class="btn  btn-outline-dark fw-bold mt-3" type="submit">Get Direction</button>
                    </p>
                </a>
            </div>
          </div>

        </div>

      </div>
</section>


<?php include 'footer.php';?>