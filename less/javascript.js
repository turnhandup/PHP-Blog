$(document).on('click', '.button', function(){
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.open("GET","process.php",true);
    new PJStreamer(xmlhttp,function(info){
        info = JSON.parse(info);
      if(info.count == 1) $('.loader').hide();
        var desc = '';
        desc += '<b>'+info.author+'-</b><br>';
        desc += ''+info.proverb;
        desc += '<hr>';
        $('.holder').prepend(desc);
    }).start();
});
