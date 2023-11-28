<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Careers | Wings Pharma |"> 
  <meta name="description" content="Diclowin Plus, Orasore, Medilice, Wincold, Kufma amongst others. His vision is what drives and motivates every WPPL employee, partner, distributor, vendor and well-wisher.Diclowin Plus, Orasore, Medilice, Wincold, Kufma amongst others. His vision is what drives and motivates every WPPL employee, partner, distributor, vendor and well-wisher."/>
  <title>Careers | Wings Pharma |</title>
</head>

<?php include 'header.php';?>

<section class="py-5 applyformimg">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-8">

        <h1 class="mece mb-4" data-aos="fade-right" data-aos-duration="1000"><span class="ceme">A</span>pply Now</h1>

        <div class="card px-4" style="border-radius: 15px;" data-aos="zoom-in" data-aos-duration="1000">
         <form id="contact" action="send_mail2.php" method="post" enctype="multipart/form-data">
          <div class="card-body">
            <div class="h5 fw-bold fst-italic p-3 ceme">Be a part of our growing team</div>

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3">

                <h6 class="mb-0">Full name</h6>

              </div>
              <div class="col-md-9">

                <input type="text" class="form-control border-dark form-control-lg" id="name" name="name" placeholder="Enter Name*" required/>

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="row align-items-center py-3">
              <div class="col-md-3">

                <h6 class="mb-0">Email address</h6>

              </div>
              <div class="col-md-9">

                <input type="email" class="form-control border-dark form-control-lg" id="email" name="email" placeholder="Enter Email*" required/>

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3">

                <h6 class="mb-0">Contact Number</h6>

              </div>
              <div class="col-md-9">

                <input type="tel" class="form-control border-dark form-control-lg" id="mobile" name="mobile" placeholder="Enter Number*" pattern="[6-9]{1}[0-9]{9}" required/>

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3">

                <h6 class="mb-0">Subject</h6>

              </div>
              <div class="col-md-9">

                <input type="text" class="form-control border-dark form-control-lg" id="subject" name="subject" placeholder="Enter subject" />

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="row align-items-center py-3">
              <div class="col-md-3">

                <h6 class="mb-0">Message</h6>

              </div>
              <div class="col-md-9">

                <textarea class="form-control border-dark" rows="3" id="message" name="message" placeholder="Enter Message" ></textarea>

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="row align-items-center py-3">
              <div class="col-md-3">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9">

                <input type="file" name="resume" class="form-control border-dark form-control-lg" id="formFileLg" required/>
                <div class="small text-muted mt-2">Upload your CV/Resume with your name or any other relevant file. Max file
                  size 12 MB</div>

              </div>
            </div>

            <!-- <hr class="mx-n3"> -->

            <div class="text-center pb-3">
              <button type="submit" class="btn btn-lg px-5 py-1 rounded-3 slibtnser">Submit</button>
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

          </div>
         </form>
        </div>

      </div>
    </div>
  </div>
</section>



<?php include 'footer.php';?>