<?php
/**
 * Created by PhpStorm.
 * User: Joel Mekonnen
 * Date: 3/21/2019
 * Time: 2:39 AM
 */
?>
<!DOCTYPE html>
<html>
     <head>
         <title>My School website</title>
         <meta name="viewport" content="width=device-width  initial-scale=1">
         <meta name="description" content="My School website">
         <link rel = "stylesheet" href = "CSS/all.css">
         <link rel = "stylesheet" href = "CSS/Config.css">
         <link rel = "stylesheet" href = "CSS/bootstrap.min.css">
         <link rel = "stylesheet" href = "CSS/animate.css">
     </head>
     <body>
        <header>
            <!--This is the header section of our site-->
            <div class = "container-fluid">
                <div class = "row justify-content-center">
                    <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 headerImage" style = "padding:0px;margin:0px;">
                        <style>
                            body {
                                background-color: white;
                                overflow-x:hidden;
                            }
                            .headerImage {
                                width: 100% !important;
                                height: auto;
                                background-size: cover;
                                background-position: center;
                                background-repeat: no-repeat;

                            }
                        </style>
                   <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
                       <nav class = "navbar navbar-light bg-light navbar-expand-md class myNav">
                           <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#menu">
                               <span class = "far fa-align-right fa-2x"></span>
                           </button>
                           <div class = "navbar-brand myBrand"><h1 class = "h1">YTA Schools</h1></div>
                           <div class = "collapse navbar-collapse" id = "menu">
                               <ul class = "navbar-nav ml-auto">
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#">  <i class = "far fa-home"style="padding-right:3px;"></i> Home </a>
                                   </li>
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#"> <i class = "far fa-code-branch" style="padding-right:3px;"></i>Branches</a>
                                   </li>
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#"> <i class = "far fa-share" style="padding-right:3px;"></i>Share </a>
                                   </li>
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#"> <i class = "far fa-school" style="padding-right:3px;"></i>Education </a>
                                   </li>
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#"><i class = "far fa-address-card" style="padding-right:3px;"></i> about us</a>
                                   </li>
                                   <li class = "nav-item">
                                       <a class = "nav-link myLink" href = "#"><i class = "fab fa-telegram-plane" style="padding-right:3px;"></i> contact us </a>
                                   </li>
                               </ul>
                               <style>
                                   .myLink {
                                       margin-left: 20px;
                                       font-family: "Josefin sans" !important;
                                       font-weight: 300;
                                       color: white !important;
                                   }
                                   .myLink:hover{
                                       color: black !important;
                                   }
                                   .myNav {
                                       background-color:#5888b9 !important;
                                   }
                                   .myBrand {
                                       color: white !important;
                                       margin-left: 20px;
                                   }
                               </style>
                           </div>
                       </nav>
                    </header>
                   </div>
                   <div class = "firstShowCase container-fluid">
                       <div class = "row justify-content-center firstContent">
                           <div class = "col-lg-8 col-md-8 col-sm-8 col-xs-8 my-auto">
                               <div class = "row justify-content-center">
                                 <div class = "h1 headerWelcome">Welcome To YTA Schools</div>
                               </div>
                               <div class = "row justify-content-center">
                                    <div class = "CTA1">
                                            <button type = "button" class = "btn btn-primary" id = "btn1"><i class = "fas fa-play-circle" style="margin-right:10px;"></i>Get Started</button>
                                            <button type = "button" class = "btn btn-danger" id = "btn2"><i class = "fas fa-arrow-alt-right" style="margin-right:10px;"></i>Log in</button>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class = "container-fluid">
                        <div class = "row justify-content-center" style = "background-color:#f4f4f6; color:balck;">
                            <div class = "myPgh col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class = "h1 justify-content-center" style="text-align:center;">
                                    Message From the director
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class = "container-fluid">
                        <div class = "row justify-content-center" style = "background-color: #f4f4f6; color: black; height: auto">
                            <div class = "myPgh col-lg-8 col-md-8 col-sm-12 col-xs-12 textContent">
                                <img src = "Image/Director.jpg" class = "img-fluid rounded-circle float-left" style="margin-right:20px; margin-top:20px;" width="20%" height="15%">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus lobortis, tempus mi non, vestibulum orci. Vivamus sit amet dapibus justo. Pellentesque maximus a purus vitae tincidunt. Praesent rutrum ligula nibh, eu aliquet orci dignissim eu. In scelerisque eros nec euismod pharetra. Curabitur mollis, lorem et venenatis auctor, eros magna ornare metus, vitae bibendum est elit ut justo. Mauris commodo at nisi vel consectetur. Nam sapien ligula, tincidunt a vulputate sed, imperdiet in ligula. Integer at malesuada orci. Curabitur dui mi, sodales eu molestie fringilla, blandit et erat. Aliquam at tempus justo. Fusce aliquam massa velit, at consectetur nisi malesuada vel. Vivamus vel feugiat diam.
            
                                    In sit amet faucibus ex. Nunc molestie augue viverra tortor facilisis bibendum. Nunc pellentesque dapibus porttitor. Praesent nec nulla vel enim ornare maximus. Donec luctus justo dolor, sed sodales dolor pellentesque ac. Pellentesque vitae consequat lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer consequat, orci quis vehicula imperdiet, odio elit euismod odio, quis volutpat arcu sapien ultricies lorem. Quisque ut augue sed lacus tincidunt volutpat at non nibh. Maecenas venenatis, lacus ac vehicula venenatis, diam ipsum laoreet velit, sed ultricies eros dui eget urna. Vestibulum faucibus dapibus elit
                                maximus eget. Pellentesque orci purus, posuere id ultricies et, tempor eget lectus. Phasellus sagittis, odio in eleifend finibus, turpis magna pulvinar quam, quis dignissim risus felis at turpis. Fusce pretium augue enim, ut sollicitudin eros dictum sed.
                                </p>
                                  </div>
                     </div>
                   <!--This section is going to contain-->
                    <div class = "row justify-content-center h1Row" style="color:black;">
                        <div class = "h1">
                            Enroll for winter courses
                        </div>
                        <style>
                            .h1Row {
                                font-family: "Gabriola" !important;
                                font-style: italic;
                            }
                        </style>
                    </div>
                   <div class = "row">
                       <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12 space">
                           <div class = "RectInfo">
                                 <img src = "Image/Paris.jpg" class = "img-fluid"><br>
                               <div id = "france" class = "com">
                                   <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;">paris Camp</h3>
                                   <ul>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>paris<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>5-star<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                       </li>
                                   </ul>
                                   <style>
                                       #france {
                                           background-color: #0363c5;
                                           color: white;
                                           margin: 0px;
                                           border-bottom-left-radius: 53px;
                                           border-bottom-right-radius: 53px;
                                       }

                                   </style>
                               </div>


                           </div>
                       </div>
                           <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12 space">
                               <div class = "RectInfo">
                                   <img src = "Image/London.jpg" class = "img-fluid"><br>
                                    <div id = "addis" class = "com">
                                      <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;"> London Camp</h3>
                                         <ul>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>London<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>4-star<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                       </li>
                                   </ul>
                                   <style>
                                       #addis {
                                           background-color: #005282;
                                           color: white;
                                           margin: 0px;
                                           border-bottom-left-radius: 53px;
                                           border-bottom-right-radius: 53px;
                                       }

                                   </style>
                                    </div>
                               </div>
                          </div>
                           <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12  space">
                               <div class = "RectInfo">
                                   <img src = "Image/Hawaii.jpg" class = "img-fluid"><br>
                                   <div  id = "Hawaii" class = "com">
                                       <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;">Hawaii Camp</h3>
                                       <ul>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>Hawaii<br>
                                           </li>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>5-star<br>
                                           </li>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                           </li>
                                       </ul>
                                       <style>
                                           #Hawaii {
                                               background-color: #0c76b5;
                                               color: white;
                                               margin: 0px;
                                               border-bottom-left-radius: 53px;
                                               border-bottom-right-radius: 53px;
                                           }

                                       </style>
                                   </div>
                               </div>
                   </div>
                </div>
            </div>
            </div>
            <div class = "row">
                       <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12 space">
                           <div class = "RectInfo">
                                 <img src = "Image/Paris.jpg" class = "img-fluid"><br>
                               <div id = "france" class = "com">
                                   <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;">paris Camp</h3>
                                   <ul>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>paris<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>5-star<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                       </li>
                                   </ul>
                                   <style>
                                       #france {
                                           background-color: #0363c5;
                                           color: white;
                                           margin: 0px;
                                           border-bottom-left-radius: 53px;
                                           border-bottom-right-radius: 53px;
                                       }

                                   </style>
                               </div>


                           </div>
                       </div>
                           <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12 space">
                               <div class = "RectInfo">
                                   <img src = "Image/London.jpg" class = "img-fluid"><br>
                                    <div id = "addis" class = "com">
                                      <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;"> London Camp</h3>
                                         <ul>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>London<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>4-star<br>
                                       </li>
                                       <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                           <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                       </li>
                                   </ul>
                                   <style>
                                       #addis {
                                           background-color: #005282;
                                           color: white;
                                           margin: 0px;
                                           border-bottom-left-radius: 53px;
                                           border-bottom-right-radius: 53px;
                                       }

                                   </style>
                                    </div>
                               </div>
                          </div>
                           <div class = "col-lg-4 col-md-4 col-sm-6 col-md-6 col-xs-12  space">
                               <div class = "RectInfo">
                                   <img src = "Image/Hawaii.jpg" class = "img-fluid"><br>
                                   <div  id = "Hawaii" class = "com">
                                       <h3 class = "h3" style="text-align: center; font-family:'source sans pro extralight';font-style:italic;">Hawaii Camp</h3>
                                       <ul>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "far fa-map-marker-check fa-1x"  style="margin-right: 10px;"></i>Hawaii<br>
                                           </li>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "fas fa-star fa-1x"  style="margin-right: 10px;"></i>5-star<br>
                                           </li>
                                           <li style="list-style-type:none; font-family: 'source sans pro extralight' !important; font-style:italic !important;">
                                               <i class = "far fa-plus-circle fa-1x" style="margin-right: 10px;"></i>Add to wishlist<br>
                                           </li>
                                       </ul>
                                       <style>
                                           #Hawaii {
                                               background-color: #0c76b5;
                                               color: white;
                                               margin: 0px;
                                               border-bottom-left-radius: 53px;
                                           border-bottom-right-radius: 53px;
                                           }

                                       </style>
                                   </div>
                               </div>
                   </div>
                </div>
            </div>
            </div>
        
            <div class = "row justify-content-center">
                <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:100vh; background-color:white; color: black;">
                     <!-- next we are going  to add the Courses -->
                     <div class = "row justify-content-center">
                         <h1 class = "h1" style='font-family:"roboto material black"; font-style:italic; font-weight:bold;'>
                             Schools Facilities and Services
                         </h1>
                     </div>
                     <div class = "row">
                        <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 parallax-window" data-parallax="scroll" data-image-src="../Image/Education2.jpg" id = "showCaseDiv" style="background-color:#3a89b7;height:70vh;padding:0px !important;margin:0px;">
                    
                        </div>
                     </div>
                     <div class = "row">
                         <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-6" style="background-color:#296d80; color: white;">
                             <div class = "row justify-content-center" style="padding:5%; margin-left:5%;">
                                    <div class = "fas fa-building fa-3x" style="display:block; width:100%; margin-left:43%;"></div><br>
                                    <div class = "h5 headerFont" style="text-align:center; width:100%;">Administration and student services</div>
                                    <ul class = "myListStyle">
                                        <li>universities adminstration</li>
                                        <li>provides appropriate information</li>
                                        <li>the universties president</li>
                                        <li>academic staff</li>
                                        <li>external affairs office</li>
                                        <button type = "button"  onclick='myshowCaseDiv("admin")' class = "btn btn-outline-dark mybtn"><i class = "fas fa-arrow-alt-circle-right" style="margin-right:10px;"></i>Connect</button>
                                    </ul>
                             </div>
                         </div>
                         <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-6" style="background-color:#0889ad; color: white;">
                                <div class = "row justify-content-center" style="padding:5%; margin-left:5%;">
                                       <div class = "fas fa-book fa-3x" style="display:block; width:100%; margin-left:43%;"></div><br>
                                       <div class = "h5 headerFont" style="text-align:center; width:100%;">Library and doucmentation</div>
                                       <ul class = "myListStyle">
                                           <li>Provide resources </li>
                                           <li>provide counciling</li>
                                           <li>provide researches</li>
                                           <li>provide clearances</li>
                                           <li>provide informations</li>
                                           <button type = "button"  onclick='myshowCaseDiv("library")' class = "btn btn-outline-dark mybtn"><i class = "fas fa-arrow-alt-circle-right" style="margin-right:10px;"></i>Connect</button>
                                       </ul>
                        </div>
                     </div>
                     <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-6" style="background-color:#1171a9; color: white;">
                            <div class = "row justify-content-center" style="padding:5%; margin-left:5%;">
                                   <div class = "fas fa-user-graduate fa-3x" style="display:block; width:100%; margin-left:43%;"></div><br>
                                   <div class = "h5 headerFont" style="text-align:center;width:100%;">student council and leadership</div>
                                   <ul class = "myListStyle">
                                       <li>represent students</li>
                                       <li>host events</li>
                                       <li>host competition</li>
                                       <li>make decisions</li>
                                       <li>external affairs office</li>
                                       <button type = "button" onclick='myshowCaseDiv("student")' class = "btn btn-outline-dark mybtn"><i class = "fas fa-arrow-alt-circle-right" style="margin-right:10px;"></i>Connect</button>
                                   </ul>
                    </div>
                </div>
                <div class = "col-lg-3 col-md-3 col-sm-6 col-xs-6" style="background-color:#32afd2; color:white;">
                        <div class = "row justify-content-center" style="padding:5%; margin-left:5%;">
                               <div class = "fas fa-shield-alt fa-3x" style="display:block; width:100%; margin-left:43%;"></div><br>
                               <div class = "h5 headerFont" style="text-align:center;width:100%;">Security and other services</div>
                               <div style = "display:block;">
                                <ul  class = "myListStyle">
                                    <li>handle security</li>
                                    <li>provide lookout</li>
                                    <li>work at events</li>
                                    <li>Help students</li>
                                    <li>Community service</li>
                                    <button type = "button" onclick='myshowCaseDiv("security")' class = "btn btn-outline mybtn"><i class = "fas fa-arrow-alt-circle-right" style="margin-right:10px;"></i>Connect</button>
                                 </ul>
                               </div> 
                               <br>       
                 </div>
            </div>
            <!-- The next section is going to be a creative section Here I am going to introduce Networks and Hubs With Icons-->
        </div>
        <div class = "row justify-content-center" style="color:black; height:auto;">
            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class = "row justify-content-center" style="margin-top: 20px;">
                        <h1 class = "h1" style ='font-family:"roboto material black"; font-style:italic; font-weight:bold;'>Networks and hubs</h1>
                </div>
                <div class = "row justify-content-center imgShowcase">
                        <div class = "col-lg-6 col-md-6 col-sm-8 col-xs-8">
                            <div class = "row justify-content-center">
                                    <div id = "formContainer">
                                            <form>
                                                    <div class = "form-group">
                                                        <label for = "username" style="margin-left:40%; margin-top: 20px;"> <i class = "fas fa-user-circle fa-3x"></i></label>   
                                                        <input type = "text" id = "username" class = "form-control">
                                                        <label for = "Email" style="margin-left:40%;margin-top: 20px;"><i class = "fas fa-at fa-3x"></i></label>
                                                        <input type = "email" class = "form-control">
                                                        <label for = "password" style="margin-left:40%; margin-top: 20px;"><i class = "fas fa-lock fa-3x"></i>  </label>
                                                        <input type = "password" id ="password" class = "form-control">
                                                        <button type = "button" class = "btn btn-primary">Submit</button>
                                                    </div>
                                            </form>
                                       </div>
                                       <div class = "row justify-content-center">
                                            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: white;">
                                                 <div class = "row justify-content-center">
                                                        <h1 class = "h1 headerWelcome">Join our Student Live network</h1>
                                                 </div>
                                                 <div class = "row justify-content-center" id = "listShowCase">
                                                     <ul>
                                                         <li style="list-style-type:none; margin-top: 10px;"><i class="fas fa-user-circle" aria-hidden="true" style="margin-right: 10px;"></i> Find online mentors, find professional</li>
                                                         <li style="list-style-type:none; margin-top: 10px;"><i class = "fas fa-compass fa" style="margin-right: 10px;"></i> We provide online resources</li>
                                                         <li style="list-style-type:none; margin-top: 10px;"><i class = "fas fa-crown fa" style="margin-right: 10px;"></i> premium serivices, online live tutorials</li>
                                                         <li style="list-style-type:none; margin-top: 10px;"><i class = "fas fa-file-certificate fa" style="margin-right: 10px;"></i> We provide valid certification</li>
                                                     </ul>
                                                 </div>
                
                                            </div>
                                        </div>
                            </div>
                        </div>
                       
                </div>

        </div>
     <script src = "JS/jquery.min.js"></script>
     <script src = "JS/bootstrap.min.js"></script>
     <script src = "JS/parallax.js"></script>
     <script src = "JS/myJs.js"></script>
     </body>
</html>
