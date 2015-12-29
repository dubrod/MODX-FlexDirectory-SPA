//var instaGridArray = [[fdspaContent]]; // this must be in template

var totalCells = Object.keys(instaGridArray).length;
    //console.log(totalCells);

    for(var i=1; i<7; i++) {
        $('#infinite_list').append('<section class="default--box product-container '+instaGridArray[i]["parentslug"]+' '+instaGridArray[i]["category"]+'"><div class="product-tn"><img src="'+instaGridArray[i]["thumbnail"]+'"></div><div class="product-content"><h3>'+instaGridArray[i]["pagetitle"]+'</h3><p>'+instaGridArray[i]["introtext"]+'</p><div class="product-tags"><span>'+instaGridArray[i]["parentslug"]+'</span> <span>'+instaGridArray[i]["category"]+'</span></div></div></section>');
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

    //function to load next 6
    function loadMoreItems(){
        var nextCell = (lastCell)+1;

        for(var i=1; i<7; i++) {
            $('#infinite_list').append('<section class="default--box product-container '+instaGridArray[nextCell]["parentslug"]+' '+instaGridArray[nextCell]["category"]+'"><div class="product-tn"><img src="'+instaGridArray[nextCell]["thumbnail"]+'"></div><div class="product-content"><h3>'+instaGridArray[nextCell]["pagetitle"]+'</h3><p>'+instaGridArray[nextCell]["introtext"]+'</p><div class="product-tags"><span>'+instaGridArray[nextCell]["parentslug"]+'</span> <span>'+instaGridArray[nextCell]["category"]+'</span></div></div></section>');
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



$(document).ready(function(){

        // Infinite Filter
        $('.category_list li a').click(function() {
            var ourClass = $(this).attr('class');
            //console.log(ourClass);
            $('.category_list li').removeClass('active');
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
});
