//var instaGridArray = [[fdspaContent]]; // this must be in template

var totalCells = Object.keys(instaGridArray).length;
    //console.log(totalCells);

    for(var i=1; i<9; i++) {
        $('#infinite_list').append('<section class="default--box product-container '+instaGridArray[i]["parentslug"]+' '+instaGridArray[i]["category"]+'"><div class="product-tn"><img src="'+instaGridArray[i]["thumbnail"]+'"></div><div class="product-content"><div class="gutter"><h3>'+instaGridArray[i]["pagetitle"]+'</h3><p>'+instaGridArray[i]["introtext"]+'</p><div class="product-base"><div class="product-tags"><span>'+instaGridArray[i]["parentslug"]+'</span> <span>'+instaGridArray[i]["category"]+'</span></div><div class="product-meta"><p><a href="javascript:void(0)" data-id="'+instaGridArray[i]["id"]+'" class="button button-small button-primary js-fdspa-modal">View Details</a></p></div></div></div></div></section>');
        lastCell = i;
    };

    function updateDetails(){
        $("#odDetails").html("( "+(lastCell)+" of "+totalCells+" )");
    }
    updateDetails();

    //console.log(lastCell);
    checkLoadBtn();
    function checkLoadBtn(){
        if(lastCell < totalCells){ $("#loadMoreInstaGrid").fadeIn(); } else { $("#loadMoreInstaGrid").fadeOut(); allowScroll = false; }
    }

    //function to load next 8
    function loadMoreItems(){
        var nextCell = (lastCell)+1;

        for(var i=1; i<9; i++) {
            $('#infinite_list').append('<section class="default--box product-container '+instaGridArray[nextCell]["parentslug"]+' '+instaGridArray[nextCell]["category"]+'"><div class="product-tn"><img src="'+instaGridArray[nextCell]["thumbnail"]+'"></div><div class="product-content"><div class="gutter"><h3>'+instaGridArray[nextCell]["pagetitle"]+'</h3><p>'+instaGridArray[nextCell]["introtext"]+'</p><div class="product-base"><div class="product-tags"><span>'+instaGridArray[nextCell]["parentslug"]+'</span> <span>'+instaGridArray[nextCell]["category"]+'</span></div><div class="product-meta"><p><a href="javascript:void(0)" data-id="'+instaGridArray[nextCell]["id"]+'" class="button button-small button-primary js-fdspa-modal">View Details</a></p></div></div></div></div></section>');
            nextCell++
            lastCell++;
            if(instaGridArray[nextCell] == "undefined"){$("#loadMoreInstaGrid").fadeOut();}
           //console.log(lastCell);
           checkLoadBtn();
           updateDetails();
        }
    }

    $("#loadMoreInstaGrid").on("click", function(){
       loadMoreItems();
    });
//eof InstaGrid


//auto complete Search
function objSearch(obj,val){

    $.each(obj, function(){
		if( this["pagetitle"].indexOf(val) > -1 ){
			$("#searchResults").append('<li><span data-id="'+this["id"]+'" class="js-fdspa-modal">'+this["pagetitle"]+'</span></li>');
		}
		if( this["pagetitle"].toLowerCase().indexOf(val) > -1 ){
			$("#searchResults").append('<li><span data-id="'+this["id"]+'" class="js-fdspa-modal">'+this["pagetitle"]+'</span></li>');
		}

    });

}

$(document).on('keyup', '.tag-field', function() {
	var el = $(this);
	var tagValue = el.val();

	if(tagValue.length > 2){
		//console.log("searching...");
		$("#searchResults").html('');
		objSearch(instaGridArray,tagValue);
    } else {
		$("#searchResults").html('');
	}
});

// eof auto complete search


$(document).ready(function(){

        //slidemenu - activate
	    $("aside").click( function(e){
		    if(e.target == this){ $("aside").toggleClass("active"); }
	    });

        // Infinite Filter
        $('.aside--list li a').click(function() {
            var ourClass = $(this).attr('class');
            //console.log(ourClass);
            $('.aside--list li').removeClass('active');
            $(this).parent().addClass('active');

            if(ourClass == 'all') {
                $('#infinite_list').children('section').show();
            }
            else {
                $('#infinite_list').children('section:not(.' + ourClass + ')').hide();
                $('#infinite_list').children('section.' + ourClass).show();
            }
            return false;
        });

        //modals

        $(document).on('click', '.js-fdspa-modal', function() {
	        $(".modal-bg").fadeIn();
	        $(".modal").fadeIn().animate({scrollTop: 10},'slow');
	        var dataId = $(this).data("id");
	        //console.log(dataId);

	        $.get('/index.php?id=2&fdspaid='+dataId, function( data ) {
			    var returnedData = data;
			    //console.log(returnedData);
			    var parseData = $.parseJSON(returnedData);
			    //console.log(parseData.result);
			    $("#fdspaModalLabel").html(parseData.result.pagetitle);
			    $("#fdspaModalImage").attr("src", parseData.result.image);
			    $("#fdspaModalBody").html(parseData.result.content);

	        });


        });
        $(".js-close-modal").click(function (){
		    $(".modal-bg").fadeOut();
		    $(".modal").fadeOut();
		    $("#fdspaModalLabel").html();
			$("#fdspaModalImage").attr("src", "assets/components/flex-directory/loading_spinner.gif");
			$("#fdspaModalBody").html();
	    });
	    $(".modal-bg").click(function(event) {
		    //close modal-bg if clicked outside of modal-body
	        if(!$(event.target).closest('.modal-body').length) {
	            if($('.modal-bg').is(":visible")) {
	                $(".modal-bg").fadeOut(); $(".modal").hide();
	            }
	        }
	        $("#fdspaModalLabel").html();
			$("#fdspaModalImage").attr("src", "assets/components/flex-directory/loading_spinner.gif");
			$("#fdspaModalBody").html();
	    });
	    //eof modals
});
