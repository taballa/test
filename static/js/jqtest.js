Do.ready(function(){
    // $('#news-feed').load('?c=jqtest&a=getevents')
    function slideHeadline(){
        $('#news-feed li:last').clone().prependTo('#news-feed').hide();
        $('#news-feed li:first').fadeIn(500).slideDown(500);
        $('#news-feed li:last').remove();
    }
    $.getJSON('?c=jqtest&a=getevents', function(json){
        if (json.length != 0) {
            $.each(json, function(index, entry){
                $('#news-feed').append('<li class="newsnum' + index + '">' + entry + '</li>');
            })
            setInterval(slideHeadline, 2000);
        }else{
            $('#news-feed').append('<p>没有内容</p>');
        };
    })
})