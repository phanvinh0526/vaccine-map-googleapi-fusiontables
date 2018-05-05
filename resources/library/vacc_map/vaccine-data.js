/********************************************************
	Vaccine Data Initialization
	- Data stored temporary - hard code in javascript file
	- Reference from http://vaccinehub.com.au/travel-vaccination-advice
	- Update Dec 12, 2016
********************************************************/
var gl_vacc_table  		= null;

var VACCD = function (keyApi){

	var tableVaccineId   	= '10_tByh5ND_LxIEcLqzPLsr5dhJORxKSEcipmMfHM';
	var map       			= null;


	/*	Public Class	*/
	this.vaccdLoadVaccData = function (data){ 
		if(data == null)
			gl_vacc_table = null;
		else
			gl_vacc_table = data['rows'];
	}

	this.getVaccines = function (ori_arr){
		var res  = [];
		var arr  = ori_arr.split(',');

		for(var i in arr){
			res.push(getVaccine(arr[i]));
		}
		return res;
	}
	/************************************************
			Request & Download Vaccine Data from GoogleAPI
	*************************************************/
	function initVacc(){
		jsonpRequest_Vacc();
	}

	function jsonpRequest_Vacc(){
	  // Local variables
	  var select = '*';
	  // Initialize JSONP request
	  var script = document.createElement('script');
	  var url = ['https://www.googleapis.com/fusiontables/v1/query?'];
	  url.push('sql=');
	  var query = 'SELECT ' + select + ' FROM ' + tableVaccineId;
	  var encodedQuery = encodeURIComponent(query);
	  url.push(encodedQuery);
	  url.push('&callback=vaccdLoadVaccData');
	  url.push('&key='+keyApi);
	  script.src = url.join('');
	  var body = document.getElementsByTagName('body')[0];
	  body.appendChild(script);
	}


	/***********************************************
			Query Data from Global Table
	************************************************/
	function getVaccine(key){
		if(isNaN(key)){	//	is not a number
			for(var i in gl_vacc_table){
				if(gl_vacc_table[i][1] == key)
					return ArrayToObject(gl_vacc_table[i]);
			}
			console.log('No Response match the Keyword');
			return null;
		}
		else{
			for(var i in gl_vacc_table){
				if(gl_vacc_table[i][0] == key)
					return ArrayToObject(gl_vacc_table[i]);
			}
			return null;
		}
	}

	function ArrayToObject(arr){
		// Must comply the data structure
		return {'vacc_id': arr[0], 'vacc_name': arr[1], 
			'vacc_desc': arr[2], 'vacc_update': arr[3]};
	}

	google.maps.event.addDomListener(window, 'load', initVacc);

};