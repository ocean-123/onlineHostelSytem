












<?php
require "header.php";?>








 <!-- form open -->
 <form action="save.php" method="post">

<h3 class="mb-5 text-uppercase" style="background-color: #b0f7ef;">Student registration form</h3>


<div class="row">
  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="formname" class="form-control form-control-lg" name="fname" />
      <label class="form-label" for="formname">First name</label>
    </div>
  </div>
  <div class="col-md-6 mb-4">
    <div class="form-outline">
      <input type="text" id="formlast" class="form-control form-control-lg" name="lname"/>
      <label class="form-label" for="formlast">Last name</label>
    </div>
  </div>
</div>

<div class="form-outline mb-4">
  <input type="text" id="formaddress" class="form-control form-control-lg" name="address" />
  <label class="form-label" for="formaddress">Address</label>
</div>


<div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
  
  <h6 class="mb-0 me-4" name="inlineRadioOptions">Gender: </h6>
  
  <div class="form-check form-check-inline mb-0 me-4">
    <input
    class="form-check-input"
      type="radio"
      name="inlineRadioOptions"
      id="femaleGender"
      value="option1"
    />
    <label class="form-check-label" for="femaleGender">Female</label>
  </div>

  <div class="form-check form-check-inline mb-0 me-4">
    <input
    class="form-check-input"
      type="radio"
      name="inlineRadioOptions"
      id="maleGender"
      value="option2"
    />
    <label class="form-check-label" for="maleGender">Male</label>
  </div>
  
  <div class="form-check form-check-inline mb-0">
    <input
    class="form-check-input"
      type="radio"
      name="inlineRadioOptions"
      id="otherGender"
      value="option3"
    />
    <label class="form-check-label" for="otherGender">Other</label>
  </div>
  
</div>

<div class="form-outline mb-4">
  <input type="phone" id="fornumber" class="form-control form-control-lg" name="contact" value="+977 " />
  <label class="form-label" for="fornumber">Contact No.</label>
</div>



<div class="form-outline mb-4">
  <input type="text" id="formemail" class="form-control form-control-lg" name="email"/>
  <label class="form-label" for="formemail">Email ID</label>
</div>

 <div class="form-outline mb-4">
  <input type="password" id="formpass" class="form-control form-control-lg" name="pass"/>
  <label class="form-label" for="formpass">Password</label>
</div> 

<div class="form-outline mb-4">
  <input type="passeord" id="forcpass" class="form-control form-control-lg" name="cpass"/>
  <label class="form-label" for="forcpass" >Confirm Password</label>
</div> 


<div class="d-flex justify-content-end pt-3">
  <button type="submit" class="btn btn-warning btn-lg ms-2"name="submit">SAVE</button>
</div>



</div>
</form>













<?php
require "footer.php";?>