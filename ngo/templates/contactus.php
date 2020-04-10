{%extends "base.html"%}
<!DOCTYPE html>
{%load staticfiles%}

{%block head_block%}
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/a20fa3c5b3.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{%static "contactus.css"%}">
  <title>Contact us</title>
{%endblock%}

{%block body_block%}
<div class="body">
  <div class="jumbotron">
    <h1><span class="double">Contact Us</span></h1>
  </div>
  <div class="container">
    <div class="row-container">
      <div class="row">
        <div class="large-12 columns padd-t-20 padd-b-30">
          <div class="large-6 columns">
            <div class="contact-text">
              <h3> Jayshree Periwal International School </h3>
              <ul id="contact-info">
                <li><span class="contact-info-icon "><i class="fa fa-home"></i> </span> Address : Mahapura - SEZ Road, Ajmer Road, Jaipur</li>
                <li><span class="contact-info-icon "><i class="fa fa-phone" aria-hidden="true"></i> </span>+91-97827-44444/44445 </li>
                <li><span class="contact-info-icon "><i class="fa fa-envelope"></i> </span>
                  <a href="mailto:route.india.team@gmail.com">route.india.team@gmail.com </a>
                </li>
              </ul>
          </div>
          </div>
          <div class="large-6 columns">
            <div class="gen-enq-box">
              <div class="row">
                <div class="large-12 columns">
                  <h3>Or write to us</h3>
                </div>
                <form id="contactform" action="" method="POST">
                  {%csrf_token%}
                    <div class="row">
                      <div class="large-6 columns">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Name" name="name_contact" id="name_contact" class="form-control style_2" value="" required>
                        </div>
                      </div>
                      <div class="large-6 columns">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Last Name" name="lastname_contact" id="lastname_contact" class="form-control style_2" value="" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-6 columns">
                        <div class="form-group">
                          <input type="email" placeholder="Enter Email" class="form-control style_2" name="email_contact" id="email_contact" value="" required>
                          <span class="input-icon"><i class="icon-email"></i></span>
                        </div>
                      </div>
                      <div class="large-6 columns">
                        <div class="form-group">
                          <input type="text" placeholder="Enter Phone number" class="form-control style_2 onlynumber" name="phone_contact" id="phone_contact" value="" required>
                          <span class="input-icon"><i class="icon-phone"></i></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns">
                        <div class="form-group">
                          <textarea style="height:200px;" placeholder="Write your message" class="form-control" name="message_contact" id="message_contact" rows="5" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns">
                        <input type="hidden" value="1" name="contactenquery">
                        <input type="submit" id="submit-contact" class=" button_medium" value="Submit">
                      </div>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

{%endblock%}
