<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Vendor | Wings Pharma |"> 
  <meta name="description" content="We don't just work with large vendors with a mature footprint in the Indian market. Our commitment to innovation means we also bring on board the next generation vendors who are looking to establish a presence and build demand."/>
  <title>Vendor | Wings Pharma |</title>
</head>


<?php 
    // $con = mysqli_connect("localhost","root","","wingspharma") or die("Connection Failed");
    include 'header.php';
?>

    <div class="text-center">
    <img src="images/inovation/Shake-Hand.jpg" alt="" class="img-fluid w-100">
    </div>

    <section class="pt-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1 class="fw-bold display-4 mece"><span class="ceme">O</span>ur Vendor</h1>
                <h2></h2>
                <p class="text-dark">We don't just work with large vendors with a mature footprint in the Indian market. 
                    Our commitment to innovation means we also bring on board the next generation vendors who 
                    are looking to establish a presence and build demand. Quality and commitment to healthcare
                    is what we look for in our vendors.</p>
                    <br>
                    <!-- <div class="row gx-2 gy-5 justify-content-center text-center align-items-center">

                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="images/gallery/amazon-img.png" alt="" class="img-fluid pt-4 rounded-3">
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="images/gallery/one-img.png" alt="" class="img-fluid p-0 rounded-3">
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="images/gallery/flipkart-img.png" alt="" class="img-fluid p-0 rounded-3">
                        </div>

                        <div class="col-lg-3 col-md-6 col-6">
                            <img src="images/gallery/art-attack-img.png" alt="" class="img-fluid p-0 rounded-3">
                        </div>

                    </div> -->

            </div>
        </div>
    </section>

    <!-- <section class="" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form section-title">
                                
                                <h2 class="text-center mb-lg-3 mb-2 mece"><span class="ceme">V</span>endor Registration Form</h2>
                            
                                <form id="vendorForm" class="mb-3">
                                    <div class="row">

                                        <div class="form-group col-lg-6 col-12" style="margin-top:15px;">
                                            <div class="input-group border border-secondary rounded-3 mb-1">
                                                <input type="tel" name="mobile_number" id="mobile_number" class="form-control mt-0" placeholder="Mobile No*" aria-label="" aria-describedby="mobile_number" maxlength="10">
                                                <button class="btn text-light fw-bold m-2 rounded-3" onclick="sendOTP()" style="background-color:#027992;" type="button" id="send_otp_btn">Send OTP</button>
                                            </div>
                                            <span class="field-error text-danger" id="mobile_number_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12" style="margin-top:15px;">
                                            <div class="input-group border border-secondary rounded-3 mb-1">
                                                <input type="text" name="otp" id="otp" class="form-control mt-0" placeholder="Enter OTP*" aria-label="" aria-describedby="otp" maxlength="6">
                                                <button class="btn text-light fw-bold m-2 rounded-3" onclick="verifyOTP()" style="background-color:#027992;" type="button" id="otp_btn">Verify OTP</button>
                                            </div>
                                            <span class="field-error text-success" id="otp_success"></span>
                                            <span class="field-error text-danger" id="otp_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="company_name" id="company_name" class="form-control border border-secondary rounded-3 mb-1" placeholder="Company Name*" disabled>
                                            <span class="field-error text-danger" id="company_name_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-3">
                                            <select class="form-select border border-secondary rounded" style="padding:12px;" id="company_type"  name="company_type" aria-label="" disabled>
                                                <option value="">Select Company Type *</option>
                                                <option value="Partnership Firm">Partnership Firm</option>
                                                <option value="Private Ltd">Private Ltd</option>
                                                <option value="Public Ltd">Public Ltd</option>
                                                <option value="Proprietor">Proprietor</option>
                                                <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                                                <option value="Society/Trust/Club/AOP">Society/Trust/Club/AOP</option>
                                                <option value="Hindu Undivided Family (HUF)">Hindu Undivided Family (HUF)</option>
                                                <option value="Co-operative">Co-operative</option>
                                                <option value="Non-Government Organization (NGO)">Non-Government Organization (NGO)</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            <span class="field-error text-danger" id="company_type_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="contact_person" id="contact_person" class="form-control border border-secondary rounded-3 mb-1" placeholder="Name of contact Person *" disabled>
                                            <span class="field-error text-danger" id="contact_person_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="email" name="email" id="email" class="form-control border border-secondary rounded-3 mb-1" placeholder="Email ID*" disabled>
                                            <span class="field-error text-danger" id="email_error"></span>
                                            <span class="field-error text-success" id="email_success"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="street1" id="street1" class="form-control border border-secondary rounded-3 mb-1" placeholder="Billing Address Line 1*" disabled>
                                            <span class="field-error text-danger" id="street1_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="street2" id="street2" class="form-control border border-secondary rounded-3 mb-1" placeholder="Billing Address Line 2*" disabled>
                                            <span class="field-error text-danger" id="street2_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="street3" id="street3" class="form-control border border-secondary rounded-3 mb-1" placeholder="Billing Address Line 3*" disabled>
                                            <span class="field-error text-danger" id="street3_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="tel" name="pincode" id="pincode" class="form-control border border-secondary rounded-3 mb-1" placeholder="Pincode*" disabled>
                                            <span class="field-error text-danger" id="pincode_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="city" id="city" class="form-control border border-secondary rounded-3 mb-1" placeholder="City*" disabled>
                                            <span class="field-error text-danger" id="city_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="district" id="district" class="form-control border border-secondary rounded-3 mb-1" placeholder="District*" disabled>
                                            <span class="field-error text-danger" id="district_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-3">
                                            <select class="form-select border border-secondary rounded" style="padding:12px;" id="state" name="state" aria-label="" disabled>
                                                <option value="">Select State *</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttaranchal">Uttaranchal</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            
                                            <span class="field-error text-danger" id="state_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="tel" name="office_mobile_number" id="office_mobile_number" class="form-control border border-secondary rounded-3 mb-1" placeholder="Office Contact No" maxlength="10" disabled>
                                            <span class="field-error text-danger" id="office_mobile_number_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="plant_address" id="plant_address" class="form-control border border-secondary rounded-3 mb-1" placeholder="Plant / HO Address" disabled>
                                            <span class="field-error text-danger" id="plant_address_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="tel" name="plant_pincode" id="plant_pincode" class="form-control border border-secondary rounded-3 mb-1" placeholder="Pincode" disabled>
                                            <span class="field-error text-danger" id="plant_pincode_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="plant_city" id="plant_city" class="form-control border border-secondary rounded-3 mb-1" placeholder="City" disabled>
                                            <span class="field-error text-danger" id="plant_city_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="plant_district" id="plant_district" class="form-control border border-secondary rounded-3 mb-1" placeholder="District" disabled>
                                            <span class="field-error text-danger" id="plant_district_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-3">
                                            <select class="form-select border border-secondary rounded" style="padding:12px;" id="plant_state" name="plant_state" aria-label="" disabled>
                                                <option value="">Select State</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Orissa">Orissa</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttaranchal">Uttaranchal</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            
                                            <span class="field-error text-danger" id="plant_state_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="tel" name="plant_mobile_number" id="plant_mobile_number" class="form-control border border-secondary rounded-3 mb-1" placeholder="Plant Contact No" maxlength="10" disabled>
                                            <span class="field-error text-danger" id="plant_mobile_number_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-3">
                                            <select class="form-select border border-secondary rounded" style="padding:12px;" id="vendor_type" name="vendor_type" aria-label="" disabled>
                                                <option value="">Select Vendor Type *</option>
                                                <option value="Service Provider">Service Provider</option>
                                                <option value="Material Supplier">Material Supplier</option>
                                                <option value="Material Manufacture">Material Manufacture</option>
                                                <option value="Manufacture Cum Supplier">Manufacture Cum Supplier</option>
                                            </select>
                                            
                                            <span class="field-error text-danger" id="vendor_type_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="gst_no" id="gst_no" class="form-control border border-secondary rounded-3 mb-1" placeholder="GST No." disabled>
                                            <span class="field-error text-danger" id="gst_no_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="pan_no" id="pan_no" class="form-control border border-secondary rounded-3 mb-1" placeholder="PAN No.*" disabled maxlength="10">
                                            <span class="field-error text-danger" id="pan_no_error"></span>
                                            <span class="field-error text-success" id="pan_no_success"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="cin_no" id="cin_no" class="form-control border border-secondary rounded-3 mb-1" placeholder="CIN" disabled>
                                            <span class="field-error text-danger" id="cin_no_error"></span>
                                        </div>



                                        <div class="form-group col-lg-12 col-12 my-3">
                                            <div class="row ">
                                                <div class="col-md-7 text-start">
                                                    <label class="input-label label_worked" id="errD1">Have you previously worked with Wings Pharmaceuticals?*</label>
                                                </div>
                                                <div class="col-md-5 text-start">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="worked" id="worked-yes" value="Yes" disabled>
                                                        <label class="form-check-label" for="Yes">YES</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="worked" id="worked-no" value="No" disabled>
                                                        <label class="form-check-label" for="No">NO</label>
                                                    </div>
                                                     
                                                </div>
                                                <span class="field-error text-danger" id="previously_error"></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-lg-12 col-12 my-3">
                                            <div class="row">
                                                <div class="col-md-7 text-start">
                                                    <label class="input-label label_worked" id="errD2">How do you want to Contact us? *</label>
                                                </div>
                                                <div class="col-md-5 text-start">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="contact_by" id="contact_by_phone" value="Phone" disabled>
                                                        <label class="form-check-label" for="inlineRadio3">Phone</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="contact_by" id="contact_by_physical_meeting" value="Physical Meeting" disabled>
                                                        <label class="form-check-label" for="inlineRadio4">Physical Meeting</label>
                                                    </div>
                                                    
                                                </div>
                                                <span class="field-error text-danger" id="contact_error"></span>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <textarea class="form-control border border-secondary rounded-3 mb-1" rows="5" id="message" name="message" placeholder="Message" disabled></textarea>
                                            <span class="field-error text-danger" id="message_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <input type="text" name="reffered_by" id="reffered_by" class="form-control border border-secondary rounded-3 mb-1" placeholder="Reffered by*" disabled>
                                            <span class="field-error text-danger" id="reffered_by_error"></span>
                                        </div>

                                        <div class="form-group col-lg-6 col-12 mt-3">
                                            <select class="form-select border border-secondary rounded" style="padding:12px;" id="department_name" name="department_name" aria-label="" disabled>
                                                <option value="">Select Name Of Department *</option>
                                                <option value="Procurement">Procurement</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Finance & Accounts">Finance & Accounts</option>
                                                <option value="Human Resource">Human Resource</option>
                                                <option value="HR-Admin">HR-Admin</option>
                                                <option value="IT- Infra">IT- Infra</option>
                                                <option value="IT-Services">IT-Services</option>
                                                <option value="Digital Transformation">Digital Transformation</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Supply Chain">Supply Chain</option>
                                                <option value="Management">Management</option>
                                                <option value="Logistics">Logistics</option>
                                                <option value="Legal">Legal</option>
                                                <option value="Others">Others</option>
                                            </select>
                                            
                                            <span class="field-error text-danger" id="department_name_error"></span>
                                        </div>

                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <input type="button" value="submit" name="submit" disabled class="btn btn-lg vendor_submit_form" id="submit-button">
                                        </div>

                                    </div>
                                </form>
                                <span class="field-response bg-success text-dark h5" id="formResponse"></span>
                                <span class="field-error text-danger h5" id="formError"></span>
                            </div>
                        </div>

                    </div>
                </div>
    </section> -->

    <div class="text-center">
        <a href="https://wingsudaan.in/vendors.php" target="_blank" >
            <button class="btn btn-lg rounded-pill px-3 slibtnser">Vendor Registration Form</button>
        </a>
        <p class="mt-2 text-dark">
            ( Please note that you will be redirected to another website. Kindly keep the documents ready for vendor registration. )
        </p>
    </div>

    <input type="textbox" name="" id="mobile_is_verified" hidden>
                    



<script type="text/javascript">


    $(document).ready(function(){
            
        $('#email').keyup(function(){
            $('#email_error').html('');
            $('#email_success').html('');
            if(validateEmail()){
                
				// if the email is validated
				// set input email border green
				$("#email").css("box-shadow","0 0 0 0.25rem #27b9758c");
                $('#email_success').html('Valid Email');
                $("#email").css("box-shadow","0 0 0 0 #fff");
                
				// and set label 
				
			}else{
				// if the email is not validated
				// set border red
				$("#email").css("box-shadow","0 0 0 0.25rem #dc35458c");
                $('#email_error').html('Invalid Email');
                
				
			}
        });
        
        
        $('#pan_no').keyup(function(){
            $('#pan_no_error').html('');
            $('#pan_no_success').html('');
            if(validatePan()){
                
				// if the email is validated
				// set input email border green
			    $("#pan_no").css("box-shadow","0 0 0 0.25rem #27b9758c");
                $('#pan_no_success').html('Valid PAN Number');
                $("#pan_no").css("box-shadow","0 0 0 0 #fff");
                
				// and set label 
				
			}else{
				// if the email is not validated
				// set border red
				$("#pan_no").css("box-shadow","0 0 0 0.25rem #dc35458c");
                $('#pan_no_error').html('Invalid PAN Number');
				
                
				
			}
        });
    
    $('#submit-button').click(function(e){
        e.preventDefault();
        
        jQuery('.field-response').html('');
        jQuery('.bg-success').html('');
        jQuery('.field-error').html('');
        var company_name = "";
        var company_type = "";
        var contact_person = "";
        var email = "";
        var mobile_number = "";
        var company_name = "";
        var street1 = "";
        var street2 = "";
        var street3 = "";
        var pincode = "";
        var city = "";
        var district = "";
        var state = "";
        var office_mobile_number = "";
        var plant_address = "";
        var plant_pincode = "";
        var plant_city = "";
        var plant_district = "";
        var plant_state = "";
        var plant_mobile_number = "";
        var vendor_type = "";
        var gst_no = "";
        var pan_no = "";
        var cin_no = "";
        var message = "";
        var reffered_by = "";
        var department_name = "";
        var error_status = 1;

        var company_name = $('#company_name').val();
        var company_type = $('#company_type').val();
        var contact_person = $('#contact_person').val();
        var email = $('#email').val();
        var mobile_number = $('#mobile_number').val();
        var street1 = $('#street1').val();
        var street2 = $('#street2').val();
        var street3 = $('#street3').val();
        var pincode = $('#pincode').val();
        var city = $('#city').val();
        var district = $('#district').val();
        var state = $('#state').val();
        var office_mobile_number = $('#office_mobile_number').val();
        var plant_address = $('#plant_address').val();
        var plant_pincode = $('#plant_pincode').val();
        var plant_city = $('#plant_city').val();
        var plant_district = $('#plant_district').val();
        var plant_state = $('#plant_state').val();
        var plant_mobile_number = $('#plant_mobile_number').val();
        var vendor_type = $('#vendor_type').val();
        var gst_no = $('#gst_no').val();
        var pan_no = $('#pan_no').val();
        var cin_no = $('#cin_no').val();
        var message = $('#message').val();
        var reffered_by = $('#reffered_by').val();
        var department_name = $('#department_name').val();

        if(company_name == "")
        {
            $('#company_name_error').html('Please fill company name');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(company_type == "")
        {
            $('#company_type_error').html('Please select company type');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(contact_person == "")
        {
            $('#contact_person_error').html('Please fill name of contact person');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(email == "")
        {
            $('#email_error').html('Please fill Email Address');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(mobile_number == "")
        {
            $('#mobile_number_error').html('Please fill Contact Number');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(street1 == "")
        {
            $('#street1_error').html('Please fill billing address 1');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(street2 == "")
        {
            $('#street2_error').html('Please fill billing address 2');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(street3 == "")
        {
            $('#street3_error').html('Please fill billing address 3');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(pincode == "")
        {
            $('#pincode_error').html('Please fill pincode');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(city == "")
        {
            $('#city_error').html('Please fill city');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(district == "")
        {
            $('#district_error').html('Please fill district');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(state == "")
        {
            $('#state_error').html('Please select state');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(vendor_type == "")
        {
            $('#vendor_type_error').html('Please select vendor type');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(pan_no == "")
        {
            $('#pan_no_error').html('Please fill PAN Number');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(reffered_by == "")
        {
            $('#reffered_by_error').html('Please fill reffered by');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(!$('input:radio[name=worked]').is(':checked'))
        {
            $('#previously_error').html('Please choose one option');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(!$('input:radio[name=contact_by]').is(':checked'))
        {
            $('#contact_error').html('Please choose one option');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }

        if(department_name == "")
        {
            $('#department_name_error').html('Please select department name');
            $('#formError').html('Kindly fill all required fields *');
            error_status = 0;
        }
        
        
        if(error_status == 1)
        {
            $('#formError').html('');
            $.ajax({
                url : "vendorform-process.php",
                type : "POST",
                data : $('#vendorForm').serialize(),
                beforesend : function(){
                    $('#submit-button').attr(disabled,true);
                    $('#submit-button').html('Submitting Form...');
                },
                success : function(data){
                    
                    if(data == "Invalid Email")
                    {
                        $('#email_error').html('Invalid Email');
                        $('#formError').html('Kindly fill valid email');
                        
                    }
                    if(data == "Invalid PAN"){
                        $('#pan_no_error').html('PAN must be 10 characters');
                        $('#formError').html('Kindly fill valid PAN number');
                    }

                    if(data == "Message has been sent"){
                        $('#vendorForm').trigger("reset");
                        Swal.fire({
                          icon: 'success',
                          title: 'Thank You!',
                          text: 'Form Submitted Successfully',
            
                        })
                    }

                    if(data == "failed"){
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!Please try after sometime',
                        })
                    }
                    
                }
            });
        }
        
        else
        {
            $('#formError').html('Kindly fill all required fields *');
        }

    });
    });
    
    function validateEmail(){
         // get value of input email
		var email = $("#email").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }
    }
    
    function validatePan(){
         // get value of input email
		var pan = $("#pan_no").val();
		
		var regex = /[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
		 if(regex.test(pan)){
		 	return true;
		 }else{
		 	return false;
		 }
    }

    function sendOTP()
  {
    jQuery('#mobile_number_error').html('');
    var mobile_number = jQuery('#mobile_number').val();
    if ( mobile_number == '' )
    {
      jQuery('#mobile_number_error').html("Please Enter Mobile Number");   
    }
    else
    {
      jQuery('#send_otp_btn').html("Please Wait..");
      jQuery('#send_otp_btn').attr('disabled',true); 
      jQuery.ajax({
          url : "send_otp.php",
          type : "POST",
          data : 'mobile_number='+mobile_number,
          success : function(result){
           
            
            if(result == "Message sent")
            {
              jQuery('#mobile_number_error').html("Check your mobile for OTP");
              jQuery('#mobile_number').attr('disabled',true);
              jQuery('#send_otp_btn').html("Send OTP");
            }
            else
            {
              jQuery('#send_otp_btn').html("Send OTP");
              jQuery('#send_otp_btn').attr('disabled',false);
              jQuery('#mobile_number_error').html("Error.. Please try after sometime");
            }
          }
      });
    }
    

  }
  function verifyOTP()
  {
    jQuery('#otp_error').html('');
    var otp = jQuery('#otp').val(); 
    if( otp == '')
    {
      jQuery('#otp_error').html("Please Enter OTP");   
    }
    else
    {
      
      jQuery.ajax({
          url : "verify_otp.php",
          type : "POST",
          data : 'otp='+otp,
          success : function(result){
            if(result == "done")
            {
              // jQuery('#otp_error').html("Check your mobile for OTP");
              jQuery('#otp_success').html("Mobile Number Verified");
              jQuery('#mobile_number_error').html('');
              jQuery('#otp_btn').attr('disabled',true); 
              jQuery('#mobile_is_verified').val("1");
              
              if(jQuery('#mobile_is_verified').val() == 1)
              {
                jQuery('#submit-button').attr('disabled',false); 
                jQuery('#company_name').attr('disabled',false); 
                jQuery('#company_type').attr('disabled',false); 
                jQuery('#contact_person').attr('disabled',false); 
                jQuery('#email').attr('disabled',false); 
                jQuery('#street1').attr('disabled',false); 
                jQuery('#street2').attr('disabled',false); 
                jQuery('#street3').attr('disabled',false); 
                jQuery('#pincode').attr('disabled',false); 
                jQuery('#city').attr('disabled',false); 
                jQuery('#district').attr('disabled',false); 
                jQuery('#state').attr('disabled',false); 
                jQuery('#office_mobile_number').attr('disabled',false); 
                jQuery('#plant_address').attr('disabled',false); 
                jQuery('#plant_pincode').attr('disabled',false); 
                jQuery('#plant_city').attr('disabled',false); 
                jQuery('#plant_district').attr('disabled',false); 
                jQuery('#plant_state').attr('disabled',false); 
                jQuery('#plant_mobile_number').attr('disabled',false); 
                jQuery('#vendor_type').attr('disabled',false); 
                jQuery('#gst_no').attr('disabled',false); 
                jQuery('#pan_no').attr('disabled',false); 
                jQuery('#cin_no').attr('disabled',false); 
                jQuery('#worked-yes').attr('disabled',false); 
                jQuery('#worked-no').attr('disabled',false); 
                jQuery('#contact_by_phone').attr('disabled',false); 
                jQuery('#contact_by_physical_meeting').attr('disabled',false); 
                jQuery('#message').attr('disabled',false); 
                jQuery('#reffered_by').attr('disabled',false); 
                jQuery('#department_name').attr('disabled',false); 
              }
            }
            else
            {
              jQuery('#otp_error').html("Invalid OTP");
            }
          }
      });
       
    }
    
  }
</script>
<?php include 'footer.php';?>