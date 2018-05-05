var my_lti = [];

/************************************************
		Autocomplete Country Search
************************************************/
function initAutocomplete_Search(){
	var options = {
		url: "vacc_map/assets/js/countries.json",
		getValue: "name",
		list: {
			onKeyEnterEvent: function(){
				selectedCountry($("#countries-flags").getSelectedItemData().code);
			},
			onClickEvent: function(){
				selectedCountry($("#countries-flags").getSelectedItemData().code);
			},
			match: { enabled: true },
			maxNumberOfElements: 8
		},
		template: {
			type: "custom",
			method: function(value, item) {
			  	return "<span class='flag flag-" 
			  		+ (item.code).toLowerCase() 
			  		+ "' ></span>" + value;
			}
		},
		theme: "round"
	};
	$("#countries-flags").easyAutocomplete(options);
}

function selectedCountry(countryCode){
	var index = searchTableData(countryCode);
	if(index == -1)
		console.log("Cannot find the country matched in list!");
	else
		vaccShowUpCountry(index);
}

function searchTableData(key){
	return vaccSearchTableData(key);
}

initAutocomplete_Search();

/************************************************
		Colour Sidebar Display
************************************************/
function colorCountryClick(status){
	//  Sidebar
	var curH1 = $('#po_country_info #po_country_colour');
	var curI = $('#po_country_info #po_country_colour i');

	

	//	Color code
    if(status == 'normal safety precautions'){
    	curH1.removeClass();
    	curI.removeClass();
		curH1.addClass('po_safety');
		curI.addClass('fa fa-check-circle');

	} 
	if(status == 'reconsider'){
		curH1.removeClass();
    	curI.removeClass();
		curH1.addClass('po_consider');
		curI.addClass('fa fa-exclamation-circle');
	} 
	if(status == 'do not travel'){
		curH1.removeClass();
    	curI.removeClass();
		curH1.addClass('po_danger');
		curI.addClass('fa fa-times');
	}
	if(status == 'default'){
		curH1.removeClass();
		curI.removeClass();
		curH1.addClass('po_default');
		curI.addClass('fa fa-check-circle');
	}
}

/************************************************
		Toggle Sidebar Display
************************************************/
var emailCounter = 1;

function minusFriendAddress(){
	var cur = document.getElementById('sidebar-ininerary-input');
	cur.removeChild(cur.lastChild);
	if(emailCounter>0)
		emailCounter--;
	document.getElementById('emailCounter').value = emailCounter;
}

function addFriendAddress(){
	var iNode = document.createElement('input');
	iNode.placeholder = 'Please enter an email address...';
	iNode.type = 'email';
	iNode.id = 'ml_sendmail_'+emailCounter;
	emailCounter++;
	document.getElementById('sidebar-ininerary-input').appendChild(iNode);
	document.getElementById('emailCounter').val = emailCounter;
}

function emailBack(){
	$('#po_my_itinerary .sidebar-ininerary-email').animate({
		top: '500px'
	}, 'fast');
	$('#po_my_itinerary .sidebar-ininerary-email').hide();
	$('#po_my_itinerary #sidebar-ininerary').show();

}

function emailDisplay(){
	$('#po_my_itinerary #sidebar-ininerary').slideUp("fast");
	$('#po_my_itinerary .sidebar-ininerary-email').show();
}

function sbCountryClick(){
	//  Sidebar
    document.getElementById('po_instruction').classList.add('hide');
    document.getElementById('po_country_info').classList.remove('hide');
    document.getElementById('po_country_info').classList.add('active');

 	$("ul.toggle-view li h3.tabpanel").click(function() {
        var _this = $(this);
        _this.parent().find('#panel').slideToggle("slow");
    });
 	
}

function insertLtinerary(){
	//	Check whether the country in the quey or not
	var curr_co_name 	= $('#po_nation').text();
	var curr_co_id		= $('#po_nation_id').val();
	var curr_co_vacc	= $('#po_nation_vacc').val();
	for(var i in my_lti){
		if(curr_co_name == my_lti[i]['co_name'])
			return null;
	}

	//	Put the country in the queue
	my_lti.push({'co_name': curr_co_name, 'co_id': curr_co_id, 'co_vacc': curr_co_vacc});
	
	//	Add on Counter
	var counter = Number($('#counter').text());
	$('#counter').text(counter+1);
	$('#counter').show();

	//	Hide the instruction
	$('#po_my_itinerary .sidebar-info').hide();

	//	Put country in the queue
	var iStr = "";
	for(var i in my_lti){
		iStr += '<h4 class="po_nation">'+my_lti[i]['co_name']+'</h4>';
	}
	var h4Node 		= document.createElement('H4');
	var parentNode 	= document.getElementById('sidebar-ininerary-list')
	h4Node.innerHTML = iStr;
	/*while(parentNode.firstChild){
		parentNode.removeChild(parentNode.firstChild);
	}*/
	removeChildNodes(parentNode);
	parentNode.appendChild(h4Node);

	//	Display
	$('#po_my_itinerary .sidebar-ininerary').show();
	// $('#po_my_itinerary #sidebar-ininerary').hide();
};

function removeChildNodes(node){
  while(node.firstChild){
    node.removeChild(node.firstChild);
  }
}

$(document).ready(function(){

    $(".tabpanel").click(function(){
        $("#panel").slideToggle("fast");
    });

    $(function(){
        $('#light_box').show();
        $('.click-instructions-hide').click(function(){
            $('#light_box').hide();
            
        });
    });

    $("#po_resize").click(function(){
    	$(".tab-content").slideToggle(500);
        // $('#sidebar-result a[href="#country"]').tab('show');
    });
});
function openNav() {
    document.getElementById("sidebar-result").style.left = "0px";
}

function closeNav() {
    document.getElementById("sidebar-result").style.left = "-500px";
}

