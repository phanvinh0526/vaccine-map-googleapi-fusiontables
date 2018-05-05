<!-- Travel Vaccine Map -->
<?php error_reporting(-1); ?>
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
                        <input type="hidden" id="po_nation_id" name="po_nation_id" value="" />
                        <input type="hidden" id="po_nation_vacc" name="po_nation_vacc" value="" />
                        <!-- <i class="fa fa-times" aria-hidden="true"></i>
                        <h2 id="po_status" class="po_status_consider"></h2>
                        <div class="po_body_text">
                            <p id="po_body_text"></p>
                        </div> -->
                    </div>
                    <h2 class="po_title_sub">RECOMMENDED VACCINES</h2>
                    <p>For further information please talk to your <a href="http://doctorsatknox.com.au/appointments.html">Healthcare Professional</a></p>
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
                        <a target="_blank" href="" class="l_external_sanofi">Click here</a> for more information on the disease(s) listed above.heal
                        <br/>
                        <!-- http://www.vaccinehub.com.au/diseases -->
                    </p>
                    <div class="bt-sidebar-result">
                    <div class="bt-sidebar-result">
                        <div class="col-sm-6">
                        <button type="button" class="btn po_button click-add" id="btn_add" onClick="insertLtinerary()">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Add To Itinerary
                        </button>
                        </div>
                        <div class="col-sm-6">
                        <!-- <button type="button" class="btn po_button click-add" id="Appointment">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i> Make Appointment
                        </button> -->
                        <div align="center" class="" >
                            <script data-he-id="26881" data-he-button="true" 
                                data-he-button-class="btn po_button click-add" 
                                data-he-text="Book Appointment"
                                src="https://healthengine.com.au/webplugin/appointments.js"></script>
                      </div></div>
                    </div>
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
                <button type="button" id="click-print" class="btn ITCAvantGardeBld click-print">
                    <i class="fa fa-print" aria-hidden="true"></i>View/Print
                </button>
            </div>
            <div class="sidebar-ininerary-email" style="display: none">
                <a class="click-email-back" href="#sidebar-ininerary" onClick="emailBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                <form class="form-inline" action="#" method="post">
                    <fieldset>
                    <legend class="ITCAvantGardeStd">Email my travel vaccination<br>requirements to my inbox.</legend>
                    <div id="sidebar-ininerary-input">
                        <input type="email" placeholder="Please enter an email address..." id='ml_sendmail_0'>
                    </div>
                    <button type="button" class="btn add ITCAvantGardeBld click-email-add" onclick="addFriendAddress()"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add an email address</button>
                    <div class="clearfix"></div>
                    <button type="button" class="btn remove ITCAvantGardeBld click-email-remove" onclick="minusFriendAddress()"><i class="fa fa-times" aria-hidden="true"></i> Remove an email address</button>
                    <p class="email_msg ITCAvantGardeDemi" style="display:none;"></p>
                    <input type="hidden" id="emailCounter" name="emailCounter" value="1">
                    <div id="email_message" class="form-group has-success has-feedback" style="display: none">
                        <label class="control-label" for="inputSuccess4">Email has been sent successfully!</label>
                    </div>
                    <div class="clearfix"></div>
                    <button type="button" id="send_mail" class="btn ITCAvantGardeBld click-email-send"><i class="fa fa-envelope" aria-hidden="true"></i> Send</button>
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
                <i class="fa fa-info-circle" aria-hidden="true"></i>
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

<?php
    /*if(isset($_REQUEST['emailCounter'])){

        echo "<h1>Get In</h1>";
        require_once(LIBRARY_PATH . "/mail.php");

        $counter = (int)$_REQUEST['emailCounter'];
        $emails = array();
       for($i = 0; $i < $counter; $i++){
            $emails.push($_POST['ml_sendmai_'.$i]);
        }

        // Prepare email content
        prepareContent($counter, $emails);

        // Send emails
    }*/

?>
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
    $('#click-print').on('click', function(e){
        window.print();
    });

    $('#send_mail').on('click', function(e){
        e.preventDefault();
        // Send To
        var len     = $('#emailCounter').val();
        var emails  = [];
        for(var i=0; i<len; i++){

            emails.push($('#ml_sendmail_'+i).val());
        }

        // Prepare content
        var countries   = '';
        var vaccines    = '';
        for(var i in my_lti){
            vaccines    += my_lti[i]['co_vacc'];
            vaccines    += ',';
            countries   += my_lti[i]['co_name'];
            countries   += ',';
        }
        vaccines = vaccines.split(",");
        for(var i=0; i<vaccines.length-1; i++){
            for(var j=i+1; j<vaccines.length; j++){
                if(vaccines[j] == vaccines[i])
                    vaccines.splice(j, 1);
            }
        }

        //  Get Vaccine Info
        var vaccd   = new VACCD();
        vaccines    = vaccd.getVaccines(vaccines.toString());
        /*console.log(vaccines);
        console.log(countries);*/

        //  Send AJAX
        $.ajax({
            url: 'resources/library/mail.php',
            type: 'post',
            data: {'vaccines': JSON.stringify(vaccines), 'countries': countries, 'email': emails},
            success: function(data, status){
                if(data == "success"){
                    $('#email_message').show();
                }
            },
            error: function(xhr, desc, err){
                console.log(xhr);
                console.log("Details: "+desc+"\nError: "+err);
            }
        });
    });
</script>