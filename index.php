<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <?php include 'dbcon.php'; ?>
    
</head>
<body>
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> 
    </ul>
  </div>
</nav>

<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="images/together.gif" width="400" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-2">
            <div class="right_side w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe and Fight Together Against Corona Virus </h1>
            </div>
        </div>
    </div>
</div>





<section class="corona_update">
    <div class="mb-3">
        <h3 class="text-uppercase text-center"> covid-19 updates</h3>
    </div>
    <div class = "d-flex justify-content-around align-items-center">
        <div >
            <h1 class="count">701,162</h1>
            <p>Passengers screened at airport</p>
        </div>
        <div>
            <h1 class="count">233</h1>
            <p>Active COVID-19 cases</p>
        </div>
        <div>
            <h1 class="count">18</h1>
            <p>Cured/discharged cases</p>
        </div>
        <div>
            <h1 class="count">4</h1>
            <p>Death cases</p>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid sub_section pt-5" id="about">
        <div class="section_header text-center mb-5 mt-5">
            <h1>About COVID-19</h1>
        </div>
        
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5">
                <img src="images/c5.jpg" class="img-fluid ">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <h2>What COVID-19(Corona-Virus)</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio dignissimos sequi a mollitia eius ipsam illo. Impedit minus atque tempore veniam velit, ipsam magnam dolorum quisquam esse maiores, accusantium possimus ipsum laborum.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis provident animi temporibus! Sapiente deserunt saepe fugit. Consectetur natus voluptate iure quasi quas blanditiis ut minus, deserunt maiores officia voluptatum neque?</p>
            </div>
        </div>

    </div>
</section>

<section>
<div class="container-fluid pt-5" id="about">
        <div class="section_header text-center mb-5 mt-5">
            <h1>Contact-Us ASAP</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                <form action="" method="POST">
 
                
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" 
    placeholder="Enter Your Name" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile No</label>
    <input type="text" class="form-control" name="mobile" 
    placeholder="Enter Your Mobile No" autocomplete="off" required >
  </div>

  <div class="form-group">
    <label> Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasymp[]" value="cold">
        <label for="customcheckbox1" class="custom-control-label">Cold</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasymp[]" value="fever">
        <label for="customcheckbox2" class="custom-control-label">Fever</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasymp[]" value="Difficulty in breathing">
        <label for="customcheckbox3" class="custom-control-label">breath</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
        <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasymp[]" value="Feeling weak">
        <label for="customcheckbox4" class="custom-control-label">tired</label>
    </div>
  </div>

  <div class="form-group">
    <label >Message</label>
    <textarea class="form-control" rows="3" name = "msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
                </div>
            </div>
        </div>

</section>

<footer class="mt-5 foot">
    <div class="footer_style text-white text-center container-fluid">
        <p>Copyright by XYZ</p>
    </div>
</footer>

</body>
</html>


<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasymp'];
    $msg = $_POST['msg'];
    
    
    $chk = "";
    foreach($symp as $chk1){
        $chk .= $chk1.",";
    }

    $insertquery = " insert into coronacase(username, email, mobile, symptoms, message) values('$username', '$email', '$mobile', '$chk', '$msg') ";
    
    $query = mysqli_query($con, $insertquery);

    if($query){
        ?>
        <script>
            alert("inserted Successful");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Not inserted");
        </script>
        <?php
    }

}


?>




