/*****************************************
  The javascript for vaccine map
  - initMap
  - create Sidebar to display vaccine, advice & description
  - generate a layer to wrap the map
******************************************/
var VACC = function() {


var tableCountryId   = '1PM9LKnQWP0fb7Hwlw6OUiZu7pTpmEgKIEj2uk7y6';
var keyApi    = 'AIzaSyD9Ajk9CA-BBWKrD3M3Wsjj64rSv8AD9TA';
var map       = null;
var gl_table  = null;
var colour    = {'green': '#8fdb48', 'red': '#f40000', 'orange': '#f27100'};
var sb_colour = {'danger': '#CC0000', 'safety': '#73A348', 'consider': '#E87B1E'};

var vaccd     = new VACCD(keyApi);

/*  Public class  */
this.searchCountriesVaccines = function(countries){

}

this.vaccdLoadVaccData = function(data){
    vaccd.vaccdLoadVaccData(data);
};

this.vaccSearchTableData = function(key){
  console.log(key);
    for(var i in gl_table){
      if(gl_table[i][3] == key)
        return i;
    }
    return -1;
};

this.vaccShowUpCountry = function(index){
  showUpCountry(index);
}
/********************
    Initialization
*********************/
function initVaccMap(){
  // Create Map
  var myOptions = {
    zoom: 2,
    minZoom: 2,
    center: new google.maps.LatLng(10, -10),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    // backgroundColor: '#A6BFDD',
    clickableIcons: false,
    streetViewControl: false,
    signInControl: false,
    scaleControl: true,
    zoomControl: true,
    rotateControl: true,
    mapTypeControl: false,
    disableDefaultUI: true,
    panControl: false,
    gestureHandling: 'cooperative'
  };
  map = new google.maps.Map(document.getElementById('map'), myOptions);

  // Navigation
  //initAutocomplete();
  initFusionTable();
  initSidebar();

}

function initSidebar(){

}

function initFusionTable(){
  
  jsonpRequest();
}

/**********************************************
    JSONP Request to GoogleAPI & drawing Map
 *********************************************/
function jsonpRequest(){
  // Local variables
  var select = '*';

  // Initialize JSONP request
  var script = document.createElement('script');
  var url = ['https://www.googleapis.com/fusiontables/v1/query?'];
  url.push('sql=');
  var query = 'SELECT '+select+' FROM ' + tableCountryId;
  var encodedQuery = encodeURIComponent(query);
  url.push(encodedQuery);
  url.push('&callback=vaccdrawMap');
  url.push('&key='+keyApi);
  script.src = url.join('');
  var body = document.getElementsByTagName('body')[0];
  body.appendChild(script);
}

this.vaccdrawMap = function(data) {
  gl_table = data['rows'];

  for (var i in gl_table) {
    if (gl_table[i][0] != 'Antarctica') {
      //  init data
      var newCoordinates = [];
      var geometries  = gl_table[i][0]['geometries'];
      

      if (geometries) {
        for (var j in geometries) {
          newCoordinates.push(constructNewCoordinates(geometries[j]));
        }
      } else {
        newCoordinates = constructNewCoordinates(gl_table[i][0]['geometry']);
      }
      // Colour changing animation
      // var randomnumber = Math.floor(Math.random() * 4);
      var country = new google.maps.Polygon({
          paths: newCoordinates,
          /*strokeColor: getCountry_Colour(co_status),
          strokeOpacity: 0.8,
          strokeWeight: 1,
          fillColor: getCountry_Colour(co_status),
          fillOpacity: 0.4,*/

          strokeOpacity: 0.0,
          strokeWeight: 1,
          fillOpacity: 0.0,
          visible: true,
          // Country Index from the list
          country_index: i
      });

      // Pop up window / Diaglog Init
      var infowindow = new google.maps.InfoWindow();

      /*********************************************************
          Event Listener
       ********************************************************/
      google.maps.event.addListener(country, 'mouseover', function(e) {
        /*this.setOptions({fillOpacity: 0.7});
        infoWindowSetup(this, infowindow, e);*/

        this.setOptions({strokeOpacity: 1, strokeWeight: 2, strokeColor: '#009999'});
        infoWindowSetup(this.country_index, infowindow, e);        
      });
      google.maps.event.addListener(country, 'mouseout', function() {
        /*this.setOptions({fillOpacity: 0.4});
        infowindow.close();*/

        this.setOptions({strokeColor: '#ffffff', strokeWeight: 1, strokeOpacity: 0.0});
        infowindow.close();
      });
      google.maps.event.addListener(country, 'click', function(){
        showUpCountry(this.country_index);
      });
      country.setMap(map);
    }
  }
}

function showUpCountry(i){
  var co_id       = i;
  var co_name     = gl_table[i][6];
  // var co_status   = gl_table[i][9];
  var co_status   = 'default';
  var co_advice   = gl_table[i][10];
  var vc_info     = gl_table[i][11];

  //  Colour Control
  colorCountryClick(co_status);
  //  Pop up Sidebar
  popSidebarInfo(co_id, co_name, co_status, co_advice, vc_info);
  //  Sidebar Control
  sbCountryClick();
  document.getElementById("sidebar-result").style.left = "0px";
}

function constructNewCoordinates(polygon) {
  var newCoordinates = [];
  var coordinates = polygon['coordinates'][0];
  for (var i in coordinates) {
    newCoordinates.push(
        new google.maps.LatLng(coordinates[i][1], coordinates[i][0]));
  }
  return newCoordinates;
}

function getCountry_Colour(flag){
  if(flag=='reconsider'){
    return colour['orange'];
  } else if(flag=='do not travel'){
    return colour['red'];
  } else if(flag=='normal safety precautions'){
    return colour['green'];
  }

  return '#edeae1';
}

/****************************************
    Information Window / Pop-up Window
*****************************************/
function infoWindowSetup(index, infowindow, event){
  // Information Window Initialize
  var colour = "";
  //var status = gl_table[index][9];
  var status = 'default';
  var country= gl_table[index][6];;
  var contentString;

  if(status=='normal safety precautions'){
    contentString = '<div class="country_map country_map_color_safety"><h2 class="country_name_map">'+country+'</h2><div class="status_travel"><i class="fa fa-check-circle" aria-hidden="true"></i><p>'+status+'</p></div></div>';
  }
  if(status=='reconsider'){
    contentString = '<div class="country_map country_map_color_consider"><h2 class="country_name_map">'+country+'</h2><div class="status_travel"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><p>'+status+'</p></div></div>';

  }
  if(status=='do not travel'){
    contentString = '<div class="country_map country_map_color_danger"><h2 class="country_name_map">'+country+'</h2><div class="status_travel"><i class="fa fa-times" aria-hidden="true"></i><p>'+status+'</p></div></div>';
  }
  if(status=='default'){
   contentString = '<div class="country_map country_map_color_default"><h2 class="country_name_map">'+country+'</h2><div class="status_travel"><i></i><p></p></div></div>'; 
  }

  infowindow.setContent(contentString);
  infowindow.setPosition(event.latLng);
  infowindow.open(map, null);
}

/*****************************************
    Sidebar Pop-up Request
// ******************************************/
function popSidebarInfo(co_id, co_name, co_status, co_advice, vc_info){
  // Loading Data
  var vacc_arr = vaccd.getVaccines(vc_info);
  // Presenting Data
  document.getElementById('po_nation').innerHTML    = co_name;
  document.getElementById('po_nation_id').value     = co_id;
  document.getElementById('po_nation_vacc').value   = vc_info;
  /*document.getElementById('po_status').innerHTML    = co_status;
  document.getElementById('po_body_text').innerHTML = co_advice;*/
  removeRow_Vacc();

  for(var i in vacc_arr){
    addRow_Vacc(vacc_arr[i]['vacc_name'], vacc_arr[i]['vacc_desc']);
  }
  $(".tab-content").slideDown(500);
  $('#sidebar-result a[href="#country"]').tab('show');
}

function addRow_Vacc(vacc_name, vacc_desc){
  var liNode    = document.createElement('LI');
  liNode.innerHTML = '<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span><h3 class="tabpanel">'
          +vacc_name+'</h3><div class="panel" id="panel"><p>'
          +vacc_desc+'</p></div>';

  document.getElementById('vacc_recommend').appendChild(liNode); 
}

function removeRow_Vacc(){
  var vaccNode = document.getElementById('vacc_recommend');
  /*while(vaccNode.firstChild){
    vaccNode.removeChild(vaccNode.firstChild);
  }*/
  removeChildNodes(vaccNode);
}

function removeChildNodes(node){
  while(node.firstChild){
    node.removeChild(node.firstChild);
  }
}
//  Active the map
google.maps.event.addDomListener(window, 'load', initVaccMap);

}();