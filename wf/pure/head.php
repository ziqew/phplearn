<link rel="stylesheet" href="css/pure-min.css">
<link rel="stylesheet" href="css/rainbow/baby-blue.css">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://use.typekit.net/gis6vng.js"></script>
<script>
    try { Typekit.load(); } catch (e) {}
</script>


<?php
$req_url=$_SERVER['REQUEST_URI'];
$last_path=substr( $req_url, strrpos( $req_url, '/' )+1 );
?>

<script>
$(function (){
    var lastPath = "<?php echo $last_path ?>";
    //console.log("last path:"+lastPath);
    $("#menu li").each(function( index ) {
       //console.log( index + ": " + $(this ).text() );
       var hrefVal=$(this).children("a").attr('href');
       if(hrefVal==lastPath){
          console.log("set css");
          $(this).addClass("pure-menu-selected");
       }
    });
    
});
</script>

