<?php
$no_of_symptoms=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Q-Wellbeing | Chatbot</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="src/js/jquery.convform.css">
    <!-- use bootstrap version 3.3.7  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="src/css/chatbot.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<script src= "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<!--Navbar-->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 0px; border-radius: 0px; height: 10%;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.html">
                    <a class="navbar-brand" href="index.html" style="padding: 15px 5px 0px;">Q-<span style="color:#007AF3 ;">WELLBEING</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"  href="./index.html">Guide</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./virtual_chatbot.html">Virtual Chatbot</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Emergency
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="https://covidrelief.glideapp.io/">Resources</a></li>
                      <li><a class="dropdown-item" href="https://covidrelief.glideapp.io/dl/ewAiAHQAIgA6ADAALAAiAHMAIgA6ACIAbQBlAG4AdQAtADAAOABhADAAOQA1ADUAYwAtADMAMwAyADUALQA0ADIAMgAwAC0AOAA4AGMAOAAtADEANgA0ADcAMgBlADEAMAA3ADcAYQAwAC0ANAAwADQAYwBjADIAOABkADAAMgAxADEAZQA4AGMAYQBkADUAMwBhAGMAMgA3ADgAZAAzADgAZgBiAGMAMQAxACIALAAiAHIAIgA6ACIAMABuAHYAegBEAGUAVgB3AFQAaABPADcAVgBuADMAMQA4AFAANgAxAHYAZwAiACwAIgBuACIAOgAiAFMAdABhAHQAZQB3AGkAcwBlACAAQwBvAHYAaQBkACAASABlAGwAcABsAGkAbgBlAHMAIgB9AA%3D%3D">Contact numbers</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="login.php">Covid Tracker</a></li>
                      <li><a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#loginModal">Login</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>   
<!--End of navbar-->

<!--Chatobt-->
	<section id="demo" style="padding-top: -80px; margin: 0px; padding: 0px;">
	    <div class="vertical-align" style="padding: top -200px;">
	        <div class="container">
	            <div class="row">
	                <div class=" col-lg-12 col-xl-12 col-md-12 col-sm-12 ">
	                    <div class="card no-border">
                            
	                        <div id="chat" class="">
                                <!-- conv-form-wrapper -->
	                            <form action="" method="GET" class="hidden">

                                    <input type="text" data-conv-question="Hello! Welcome to qwellbeing chatbot." data-no-answer="true">

                                    <select data-conv-question="would you like to take covid symptoms checkup?" name="first-question">
	                                    <option value="yes">Yes</option>
	                                    <option value="no">No</option>
	                                </select>

                                    <!-- asking serious symptoms -->
                                    <div data-conv-fork="first-question">
                                        <div data-conv-case="yes">
                                            <select name="serious_symptoms[]" data-conv-question="select the problems you faced recently" >
                                                <option value="Breathing problem">Breathing problem</option>
                                                <option value="Speaking problem">Speaking problem</option>
                                                <option value="Chest pain">Chest pain</option>
                                                <option value="none">None</option>
                                            </select>
                                        </div>
                                        <div data-conv-case="no">
                                            <select name="p_measures" data-conv-question="Okay. Have a look at this precautionary measures to protect yourself from coronavirus." >
                                                <option value="yes" data-callback="index_page">Ok</option>
		                                    	
                                            </select>

                                        </div>
                                    </div>

                                    <!-- response to serious symptoms -->
                                    <div data-conv-fork="serious_symptoms[]">

                                        <div data-conv-case="Breathing problem">
                                            <input type="text" data-conv-question="Your health is our utmost priority. Consulting a doctor would help to get proper guidance" data-no-answer="true">
                                            <select name="doctor_consultancy_extreme" data-conv-question="Would you like to consult doctor?" >
                                                <option value="yes" data-callback="DoctorContact">Yes</option>
	                                            <option value="no">No</option>
                                            </select>

                                        </div>
                                        <div data-conv-case="Speaking problem">
                                            <input type="text" data-conv-question="Your health is our utmost priority. Consulting a doctor would help to get proper guidance" data-no-answer="true">
                                            <select name="doctor_consultancy_extreme" data-conv-question="Would you like to consult doctor?" >
                                                <option value="yes" data-callback="DoctorContact">Yes</option>
	                                            <option value="no">No</option>
                                            </select>

                                        </div>
                                        <div data-conv-case="Chest pain">
                                            <input type="text" data-conv-question="Your health is our utmost priority. Consulting a doctor would help to get proper guidance" data-no-answer="true">
                                            <select name="doctor_consultancy_extreme" data-conv-question="Would you like to consult doctor?" >
                                                <option value="yes" data-callback="DoctorContact">Yes</option>
	                                            <option value="no">No</option>
                                            </select>

                                        </div>

                                        <div data-conv-case="none">
                                            <select name="oximeter[]" data-conv-question="What is your Oximeter pulse rating?" >
                                                <option value="below90">Below 90</option>
                                                <option value="90-94">90 - 94</option>
                                                <option value="95">95</option>
                                                <option value="96above">96 - above</option>
                                                <option value="none">I don't have an oximeter</option>

                                            </select>

                                        </div>
                                    </div>

                                    <!-- no consultancy for serious symptoms -->
                                    <div data-conv-fork="doctor_consultancy_extreme">
                                        <div data-conv-case="no">
                                            <?php 
                                            $no_of_symptoms+=1;
                                            ?>
                                            <select name="oximeter[]" data-conv-question="What is your Oximeter pulse rating?" >
                                                <option value="below90">Below 90</option>
                                                <option value="90-94">90 - 94</option>
                                                <option value="95">95</option>
                                                <option value="96above">96 - above</option>
                                                <option value="none">I don't have an oximeter</option>

                                            </select>

                                        </div>

                                    </div>


                                       

                                    <!-- response to oximeter -->
                                    <div data-conv-fork="oximeter[]">

                                        <div data-conv-case="below90">
                                            <input type="text" data-conv-question="Your health is our utmost priority. Consulting a doctor would help to get proper guidance" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to consult doctor?" >
                                                <option value="yes" data-callback="DoctorContact">Yes</option>
	                                            <option value="no">No</option>
                                            </select>

                                        </div>
                                        <div data-conv-case="90-94">
                                            <input type="text" data-conv-question="Your health is our utmost priority. Consulting a doctor would help to get proper guidance" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to consult doctor?" >
                                                <option value="yes" data-callback="DoctorContact">Yes</option>
	                                            <option value="no">No</option>
                                            </select>

                                        </div>
                                       
                                            

                                        <div data-conv-case="95">
                                            <select name="less_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="sore throat">sore throat</option>
                                                <option value="loss of taste or smell">loss of taste or smell</option>
                                                <option value="conjunctivitis">conjunctivitis</option>
                                                <option value="discolouration of fingers">discolouration of fingers</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>
                                        </div>
                                        <div data-conv-case="96above">
                                            <select name="less_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="sore throat">sore throat</option>
                                                <option value="loss of taste or smell">loss of taste or smell</option>
                                                <option value="conjunctivitis">conjunctivitis</option>
                                                <option value="discolouration of fingers">discolouration of fingers</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>
                                        </div>
                                        




                                        <!-- asking for less common symptoms -->
                                        <div data-conv-case="none">
                                            <input type="text" data-conv-question="Okay, cool!" data-no-answer="true">
                                            <select name="less_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="sore throat">sore throat</option>
                                                <option value="loss of taste or smell">loss of taste or smell</option>
                                                <option value="conjunctivitis">conjunctivitis</option>
                                                <option value="discolouration of fingers">discolouration of fingers</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>
                                        </div>
                                        
                                    </div>


                                    <div data-conv-fork="doctor_consultancy">
                                        <div data-conv-case="no">
                                            <?php 
                                                $no_of_symptoms+=1;
                                            ?>
                                            <select name="less_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="sore throat">sore throat</option>
                                                <option value="loss of taste or smell">loss of taste or smell</option>
                                                <option value="conjunctivitis">conjunctivitis</option>
                                                <option value="discolouration of fingers">discolouration of fingers</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>
                                        </div>

                                    </div>
                                    


                                    <!-- response to less common symptoms -->
                                    <div data-conv-fork="less_common[]">

                                        <div data-conv-case="sore throat">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>

                                        <div data-conv-case="loss of taste or smell">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>

                                        <div data-conv-case="conjunctivitis">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>
                                        <div data-conv-case="discolouration of fingers">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>
                                        
                                        <!-- asking for most common symptoms -->
                                        <div data-conv-case="none">
                                            <select name="most_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="fever">fever</option>
                                                <option value="dry cough">dry cough</option>
                                                <option value="tiredness">tiredness</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div data-conv-fork="doctor_consultancy">
                                        <div data-conv-case="no">
                                            <?php 
                                                $no_of_symptoms+=1;
                                            ?>
                                            <select name="most_common[]" data-conv-question="Did you faced any of the following problem?" >
                                                <option value="fever">fever</option>
                                                <option value="dry cough">dry cough</option>
                                                <option value="tiredness">tiredness</option>
                                                <option value="none">None</option>
                                                
                                                
                                            </select>

                                        </div>

                                    </div>

                                    <!-- response to most comon symptoms -->
                                    <div data-conv-fork="most_common[]">

                                        <div data-conv-case="fever">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>

                                        <div data-conv-case="dry cough">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>

                                        <div data-conv-case="tiredness">
                                            <input type="text" data-conv-question="We would like you to login into your dashboard before  consulting  a doctor" data-no-answer="true">
                                            <select name="doctor_consultancy" data-conv-question="Would you like to login?" >
                                                <option value="yes" data-callback="login">Yes</option>
                                                <option value="no">No</option>
                                            </select>
    
                                        </div>

                                        <div data-conv-fork="doctor_consultancy">
                                        <div data-conv-case="no">
                                            <?php 
                                                $no_of_symptoms+=1;
                                                if($no_of_symptoms>1){
                                                    ?>
                                                    
                                                    <input type="text" data-conv-question="Looks like you have some of prominent covid-19 symptoms" data-no-answer="true">
                                                    <select name="doctor_consultancy_2" data-conv-question="Would you like to login?" >
                                                        <option value="yes" data-callback="login">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                    <?php
                                                }//end if
                                            ?>
                                            

                                        </div>

                                    </div>
                                        

                                        <!-- precautionary measures -->
                                        <div data-conv-case="none">
                                            <?php
                                            if($no_of_symptoms==0){
                                            ?>

                                            <input type="text" data-conv-question="Looks like you are safe from covid-19" data-no-answer="true">
                                            <select name="p_measures" data-conv-question="Have a look at this precautionary measures to protect yourself." >
                                                <option value="yes" data-callback="index_page">Ok</option>
		                                    	
                                            </select>
                                            <?php
                                            }
                                            ?>
                                            <!-- <input type="text" data-conv-question="Looks like you are safe from covid-19" data-no-answer="true">
                                            <select name="p_measures" data-conv-question="Have a look at this precautionary measures to protect yourself." >
                                                <option value="yes" data-callback="index_page">Ok</option>
		                                    	
                                            </select> -->
                                            
                                            
                                        </div>
                                    </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<!--End of chatbot-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="src/js/jquery.convform.js"></script>

	<script>
		
        function login(stateWrapper, ready) {
			window.open("login.php");
			ready();
		}
        function index_page(stateWrapper, ready) {
			window.open("index.html");
			ready();
		}
        function DoctorContact(stateWrapper, ready) {
			window.open("doctors.html");
			ready();
		}
        
        
	
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>

<!--login moadal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Covid tracker - Daily Update</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form action="login.php" method="POST">
                <div class="form-group row">
                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-mail address: </label>
                    <div class="col-md-6">
                        <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                    </div>
                </div>
  
            <br>
  
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password: </label>
                    <div class="col-md-6">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                </div><br>
  
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox">
                            <label>
                                Don't have an account? <a href="register.php">Register</a>
                            </label>
                        </div>
                    </div>
                </div><br>
  
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                    <a href="#" class="btn btn-link">
                        Forgot Your Password?
                    </a>
                </div>
        </div>
        </form>
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
</body>
</html>