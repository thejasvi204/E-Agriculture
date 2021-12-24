<html lang="en" >

<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style> 
body html {
  margin:0;
  padding: 0;
} 
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 250px;
    overflow-y: auto;
}
.backgroundimg{
   background-image:url(bw.jpg);
   background-size: cover;
   background-position: center center;
   background-repeat: no-repeat;;
   height: 150vh;
   width: 100% ;

  }

  .backgroundimg1{
   background-image:url(bw.jpg);
   background-size: cover;
   background-position: center center;
   background-repeat: no-repeat;;
   height: auto;
   width: 100% ;

  }


 .border {
    display: inline-block;
    width: 700px;
    height: 220px;
    margin: 2px;
    padding: 10px 50px 10px 50px;
  }

  .text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 10px;
  position: absolute;
  margin-top: -65px;
  border: 2px solid #337ab7;
  border-radius: 20px;
}

</style>

</head>

<body>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  <div class="row backgroundimg">

 <div class="container">
<div class="mx-auto" style="width:150px">
    <li> <div id="google_translate_element"></div></li>
    </div>
  <br><br><br><br>
   <div class="mx-auto bg-warning" style="width:150px">
          <span class="text-on-pannel text-primary float-center">
           <strong class="text-uppercase "> login </strong>
          </span>
        </div>
     <center>
     <span class="border border-warning rounded double  ">
     

            <form role="form" method="POST" action="login.php">
              <div class="form-group">
                           <input type="text" class="form-control input-sm" id="uname" placeholder="enter username" name="uname" required>
                           
                     </div>
             
                  
               <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                         <div class="form-group">
                                  <select class="form-control input-sm " id="occupation" name="occupation" >
                                   <option value="farmer">farmer</option>
                                   <option value="marketer">marketer</option>
                                  </select>
                                </div>
                           
                      </div>

                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                              
                              <select class="form-control input-sm " id="village" name="village" >
                                   <option value="angalakuduru">angalakuduru</option>
                                   <option value="sangamjagarlamudi">sangamjagarlamudi</option>
                                    <option value="vadlamudi">vadlamudi</option>
							        <option value="vadlamudi">tenali</option>
									<option value="vadlamudi">vallabhapuram</option>
									<option value="vadlamudi">vijayawada</option>
                                  </select>
                            </div>
                      </div>
                </div>
                            <div class="row">
                      <div class="col-xs-4 col-sm-4 col-ms-4">
                         <input type="submit" class="btn btn-warning btn-block"  name="submit" value="login">
                      </div>

                      <div class="col-xs-4 col-sm-4 col-ms-4">
                      <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#myModal" >signup for farmer</a>
                      </div>

                       <div class="col-xs-4 col-sm-4 col-ms-4">
                      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal1" >signup for marketer</a>
                      </div>
                </div>


            </form>
            
        </span>
        <center>
   
      </div> 
  </div> 


  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">farmer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
                 <!-- Modal body -->
        <div class="modal-body">
           <form role="form" method="POST" action="signf1.php">
     
              <div class="form-group">
                           <input type="text" class="form-control input-sm" id="uname" placeholder="enter username" name="uname" required>
                     </div>
              <div class="row">
                 <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group">
                            <input type="text" class="form-control input-sm" id="fname" placeholder="Enter  first name" name="fname" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                         </div>
                 </div>

                 <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group">
                            <input type="text" class="form-control input-sm" id="lname" placeholder="Enter  last name" name="lname" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                         </div>
                 </div>

              </div>
                
                  
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="cname1" placeholder="crop name1" name="cname1" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm " id="carea1" placeholder="crop area1" name="carea1" required pattern="[0-9]{1,2,3}" title="please enter only number">
                                </div>
                      </div>
           </div>

          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="cduration1" placeholder="crop duration1" name="cduration1" required pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                          </div> 
                      </div>

                         <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                   <strong class="btn btn-warning btn-block disable"><label  for="qty">days</label></strong>
                          </div> 
                      </div>
              </div>
 <br><br>
           <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="cname2" placeholder="crop name2" name="cname2" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm " id="carea2" placeholder="crop area2" name="carea2" pattern="[0-9]{1,2,3}" title="please enter only number">
                                </div>
                      </div>
           </div>

          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="cduration2" placeholder="crop duration2" name="cduration2" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                          </div> 
                      </div>

                         <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                  <strong class="btn btn-warning btn-block disable"><label  for="qty">days</label></strong>
                          </div> 
                      </div>
              </div>
<br><br>
          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="cname3" placeholder="crop name3" name="cname3" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm " id="carea3" placeholder="crop area3" name="carea3" pattern="[0-9]{1,2,3}" title="please enter only number">
                                </div>
                      </div>
           </div>

          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="cduration3" placeholder="crop duration3" name="cduration3" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                          </div> 
                      </div>

                         <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                           <strong class="btn btn-warning btn-block disable"><label  for="qty">days</label></strong>
                          </div> 
                      </div>
              </div>
<br><br>
               <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="cname4" placeholder="crop name4" name="cname4" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm " id="carea4" placeholder="crop area4" name="carea4" pattern="[0-9]{1,2,3}" title="please enter only number">
                                </div>
                      </div>
           </div>

          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="cduration4" placeholder="crop duration4" name="cduration4" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                          </div> 
                      </div>

                         <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                  <strong class="btn btn-warning btn-block disable"><label  for="qty">days</label></strong>>
                          </div> 
                      </div>
              </div>
<br><br>
        <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="cname5" placeholder="crop name5" name="cname5" pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm " id="carea5" placeholder="crop area5" name="carea5" pattern="[0-9]{1,2,3}" title="please enter only number" >
                                </div>
                      </div>
           </div>

          <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="cduration5" placeholder="crop duration5" name="cduration5" pattern="[0-9]{1,2,3,4,5}" title="please enter only number">
                          </div> 
                      </div>

                         <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                  <strong class="btn btn-warning btn-block disable"><label  for="qty">days</label></strong>
                            </div>
                        </div>
                        </div>


       <br>

                     <div class="form-group">
                           <input type="text" class="form-control input-sm" id="adhaar" placeholder="enter adhaar number" name="adhaar" required pattern="[0-9]{12}" title="please enter only 12 digit ahaar number">
                     </div>
                     <div class="row">
                       <div class="col-xs-6 col-sm-6 col-ms-6">
                           <div class="form-group">
                            <input type="text" class="form-control input-sm" id="phone" placeholder="Enter  phone number" name="phone" required pattern="[0-9]{10,11}" title="please enter only number between 0 to 10 or 11">
                      </div>
                         
                      </div>

                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                  <select class="form-control input-sm" id="occupation" name="occupation">
                                   <option value="farmer">farmer</option>
                                  </select>
                                </div>
                      </div>
                    </div>
               <div class="row">

                      <div class="col-xs-12 col-sm-12 col-ms-12">
                            <div class="form-group">
                              
                              <select class="form-control input-sm " id="village" name="village" >
                                   <option value="angalakuduru">angalakuduru</option>
                                   <option value="sangamjagarlamudi">sangamjagarlamudi</option>
                                    <option value="vadlamudi">vadlamudi</option>
									<option value="vadlamudi">tenali</option>
									<option value="vadlamudi">vallabhapuram</option>
									<option value="vadlamudi">vijayawada</option>
                                  </select>
                            </div>
                      </div>
                </div>
          
                 <!-- Modal footer -->
        <div class="modal-footer">
           <input type="submit" class="btn btn-info btn-block" name="submit" value="signup">
        </div>

                     
            </form>
          </div>
      </div>
    </div>
  
  </div>


      <!-- The Modal 2 -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">marketer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form role="form" method="POST" action="signm1.php">
              <div class="form-group">
                           <input type="text" class="form-control input-sm" id="uname" placeholder="enter username" name="uname" required>
                     </div>

              <div class="row">
                 <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group">
                            <input type="text" class="form-control input-sm" id="name" placeholder="Enter   name" name="name" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                         </div>
                 </div>

                 <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group">
                            <input type="text" class="form-control input-sm" id="sname" placeholder="Enter  shop name" name="sname" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                         </div>
                 </div>

              </div>
          
                 <div class="form-group">
                           <input type="text" class="form-control input-sm" id="adhaar" placeholder="enter adhaar number" name="adhaar" required pattern="[0-9]{12}" title="please enter only 12 digit ahaar number">
                     </div>
                     <div class="form-group">
                            <input type="text" class="form-control input-sm" id="phone" placeholder="Enter  phone number" name="phone" required pattern="[0-9]{10,11}" title="please enter only 10 or 11 digit number">
                      </div>
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                 <input type="text" class="form-control input-sm" id="market" placeholder="market locality" name="market" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15}" title="please enter only alphabets">
                                </div>
                      </div>

                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                               <select class="form-control input-sm " id="mtype" name="mtype">
                                   <option value="fruit">fruit</option>
                                    <option value="vegetable">vegetable</option>
                                    <option value="other">others</option>
                                </select>
                            </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-xs-6 col-sm-6 col-ms-6">
                              <div class="form-group">
                              <input type="text" class="form-control input-sm" id="dis" placeholder=" District" name="dis" required pattern="[a-z]{3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20}" title="please enter only alphabets">
                                </div>  
                      </div>

                      <div class="col-xs-6 col-sm-6 col-ms-6">
                            <div class="form-group">
                                  <select class="form-control input-sm " id="occupation" name="occupation">
                                   <option value="marketer">marketer</option>
                                  </select>
                                </div>
                      </div>
                    </div>
                      <!-- Modal footer -->
        <div class="modal-footer">
           <input type="submit" class="btn btn-info btn-block" name="submit" value="signup">
        </div>
            </form>

        </div>
        
      
        
      </div>
    </div>
  </div>

</body>
</html>
