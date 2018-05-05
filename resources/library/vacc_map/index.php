<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/easy-autocomplete.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flags.css">
</head>

<body>
    <div id="map" style="background-color: #f1ecec;width:100%; height:100%; position: absolute;"></div>
    <span class="close-sidebar-result" onclick="openNav()"><i class="fa fa-search" aria-hidden="true"></i></span>
    <div id="sidebar-result" class="sidebar-result">
        <ul class="nav nav-tabs">
            <!-- <li class="active">
                <a data-toggle="tab" href="#po_instruction"></a>
            </li> -->
            <li class="active"><a data-toggle="tab" href="#country">Country Info</a></li>
            <li>
                <a data-toggle="tab" href="#po_my_itinerary">My Itinerary</a>
                <span id="counter" class="counter" style="display: block;">0</span>
            </li>
            <li><a data-toggle="tab" href="#po_search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li class="hidemb">
                <a data-toggle="tab" id="po_resize">
                    <i class="fa fa-compress" aria-hidden="true"></i>
                    <!-- <i class="fa fa-expand" aria-hidden="true"></i> -->
                </a>
            </li>
            <li class="hidedt">
                <a class="click-mb-hide" 
                onclick="closeNav()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content">
<!-- New -->
            <!-- <button type="button" class="btn white remove click-tabcont-hide">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button> -->
            <div class="tab-pane fade in active" id="country">
                <div id="po_instruction">
                    <div class="des-po-instruction">
                        <p>Keep up-to-date with the lastest in travel health by learning more about your travel destination.</p>
                    </div>
                    <div class="">
                        <h2 class="success"><a>SELECT A COUNTRY <br>TO LEARN MORE</a></h2>
                    </div>
                </div>
                <!-- TAB COUNTRY INFO -->
                <div id="po_country_info" class="hide">
                    <div class="po_country_info_top">
                        <div id="po_country_colour" class="po_danger">
                            <h1 id="po_nation" class="po_nation"></h1>
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <h2 id="po_status" class="po_status_consider"></h2>
                            <div class="po_body_text">
                                <p id="po_body_text"></p>
                            </div>
                        </div>
                        <h2 class="po_title_sub">RECOMMENDED VACCINES</h2>
                        <p>For further information please talk to your H<a href="#">ealthcare Professional</a></p>
                        <div id="po_re_vaccines_content" style="">
                            <ul id="vacc_recommend" class="toggle-view" style="zoom: 1;">
                                <!-- <li>
                                        <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                        <h3>Hepatitis A</h3>
                                        <div class="panel" id="panel">
                                            <p>CDC recommends this vaccine because you can get hepatitis A through contaminated food or water in Algeria, regardless of where you are eating or staying.</p>
                                        </div>
                                    </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="po_country_info_bottom">
                        <p class="moreInfoDisease">
                            <a target="_blank" href="http://www.vaccinehub.com.au/diseases" class="l_external_sanofi">Click here</a> for more information on the disease(s) listed above.
                            <br/>
                        </p>
                        <div class="bt-sidebar-result">
                            <button type="button" class="btn po_button click-add" id="btn_add" onClick="insertLtinerary()">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Add To My Itinerary
                            </button>
                            <button type="button" class="btn po_button click-add" id="Appointment">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Make an Appointment
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TAB MY ITINERARY -->
            <div id="po_my_itinerary" class="tab-pane fade">
                <div class="sidebar-info">
                    <p class="ITCAvantGardeStd">Click the countries you're thinking of visiting to add to your itinerary.</p>
                </div>
                <div id="sidebar-ininerary" class="sidebar-ininerary" style="display: none">
                    <!-- <h1 class="po_nation">Algeria</h1> -->
                    <div id="sidebar-ininerary-list"></div>
                    <p class="ITCAvantGardeStd">Email or print your travel vaccination<br>requirements to discuss with your GP.</p>
                    <button type="button" class="btn ITCAvantGardeBld click-email" onClick="emailDisplay()">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i></i> Email
                    </button>
                    <button type="button" class="btn ITCAvantGardeBld click-print">
                        <i class="fa fa-print" aria-hidden="true"></i>View/Print
                    </button>
                </div>
                <div class="sidebar-ininerary-email" style="display: none">
                    <a class="click-email-back" href="#sidebar-ininerary" onClick="emailBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <form class="form-inline">
                        <fieldset>
                        <legend class="ITCAvantGardeStd">Email my travel vaccination<br>requirements to my inbox.</legend>
                        <div id="sidebar-ininerary-input">
                            <!-- <input type="email" placeholder="Please enter an email address..."> -->
                        </div>
                        <button type="button" class="btn add ITCAvantGardeBld click-email-add" onclick="addFriendAddress()"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add a friend's email address</button>
                        <div class="clearfix"></div>
                        <button type="button" class="btn remove ITCAvantGardeBld click-email-remove" onclick="minusFriendAddress()"><i class="fa fa-times" aria-hidden="true"></i>Remove an email address</button>
                        <p class="email_msg ITCAvantGardeDemi" style="display:none;"></p>
                        <button type="submit" class="btn ITCAvantGardeBld click-email-send" name="email"><i class="fa fa-envelope" aria-hidden="true"></i> Send</button>
                        </fieldset>
                    </form>
            </div>
            </div>
            <!-- TAB SEARCH -->
            <div id="po_search" class="tab-pane fade">
                
                <div class="cnt-po-search">
                    <input id="countries-flags" />
                    <a data-toggle="tab" href="#country">
                       <button onClick="selectedCountry()" type="button" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </a>
                </div>
            </div>
            <!-- TAB RESIZE -->
            <!-- <div id="po_resize" class="tab-pane fade hide">
                TAB RESIZE
            </div> -->
        </div>
    </div>
    <div class="full-page-loader" id="light_box">
        <div class="info">
            <button type="button" class="btn white remove click-instructions-hide" >
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="info-desktop">
                <div class="heading">LET'S START PLANNING YOUR TRIP!</div>
                <div class="media clearfix">
                    <div class="pull-left">
                    <i class="icon-nav"></i>
                    </div>
                    <div class="media-body">
                        Navigate around the map to view current travel alerts
                    </div>
                </div>
                <div class="media clearfix">
                    <div class="pull-left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-body clearfix">Click a country to view recommended vaccinations for travel
                    </div>
                </div>
                <div class="media clearfix">
                    <div class="pull-left">
                    
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">Click "Add To My Itinerary" to create a list of countries you plan to visit &amp; corresponding vaccinations recommended for your trip                                            
                    </div>
                </div>
                <button type="button" class="btn  ITCAvantGardeStd click-instructions-hide"> CLOSE  &amp; VIEW MAP</button>
            </div>

        </div> 

        <div class="bg"></div>
    </div>
    <!-- <script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyD9Ajk9CA-BBWKrD3M3Wsjj64rSv8AD9TA&libraries=places&sensor=false"></script>
    <script type="text/javascript" src="assets/js/jquery.easy-autocomplete.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="vaccine-sidebar.js"></script>
    <script type="text/javascript" src="vaccine-data.js"></script>
    <script type="text/javascript" src="vaccine-map.js"></script>
    
</body>

</html>