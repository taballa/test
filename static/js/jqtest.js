Do.ready(function(){
    var newsArray = [
    '111',
    '222',
    '333',
    '444'
    ]

    var newsInterval = 2000;

    for (var i = 0; i < newsArray.length; i++) {
        $('#news-feed').append('<li>'+newsArray[i]+'</li>');
    };
    // $('.events-list').load('?c=jqtest&a=getevents')

})