<!DOCTYPE html>
<html lang="en">

<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="A simple slide down menu using jQuery and CSS" />
<title>Slide Down Menu With jQuery</title>
    
<!-- css -->
<link rel="stylesheet" href="css/dropdown.css">
    
<!-- js -->
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    }); // end ready
</script>

</head>

<body>

<div id="wrapper">

<div id="top-bar">
    <div class="content clearfix">
        <span class="all-labs"><a href="http://www.callmenick.com/category/tutorials/">&larr; all labs</a></span>
        <span class="back-to-tutorial"><a href="http://www.callmenick.com/labs/slide-down-menu-with-jquery-and-css">back to the tutorial</a></span>
    </div>
</div>

<header>
    <div id="title" class="content">
        <h1>Slide Down Menu</h1>
        <h2>This is a simple slide down nav menu using jQuery and CSS</h2>
    </div>
</header>

<nav>
    <ul class="content clearfix">
        <li><a href="#">Nav 1</a></li>
        <li><a href="#">Nav 2</a></li>
        <li class="dropdown">
            <a href="#">Nav 3</a>
            <ul class="sub-menu">
                <li><a href="#">Nav 3.1</a></li>
                <li><a href="#">Nav 3.2</a></li>
                <li><a href="#">Nav 3.3</a></li>
                <li class="dropdown">
                    <a href="#">Nav 3.4</a>
                    <ul class="sub-menu">
                        <li><a href="#">Nav 3.4.1</a></li>
                        <li class="dropdown">
                            <a href="#">Nav 3.4.2</a>
                            <ul class="sub-menu">
                                <li><a href="#">Nav 3.4.2.1</a></li>
                                <li><a href="#">Nav 3.4.2.2</a></li>
                                <li><a href="#">Nav 3.4.2.3</a></li>
                                <li><a href="#">Nav 3.4.2.4</a></li>
                                <li><a href="#">Nav 3.4.2.5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nav 3.4.3</a></li>
                        <li><a href="#">Nav 3.4.4</a></li>
                        <li><a href="#">Nav 3.4.5</a></li>
                    </ul>
                </li>
                <li><a href="#">Nav 3.5</a></li>
            </ul>
        </li>
        <li><a href="#">Nav 4</a></li>
        <li><a href="#">Nav 5</a></li>
    </ul>
</nav>

<div id="main">
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;</p>
    </div>
</div>


<footer>
</footer>



</div>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34160351-1']);
_gaq.push(['_trackPageview']);
(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<script type="text/javascript" src="//cdn.fusionads.net/fusion.js?zoneid=1332&serve=C6SDP2Y&placement=callmenickcom" id="_fusionads_js"></script>
<script>
var interval = setInterval(function(){
  
  // check for when fusionads shows up in DOM
  var fusionad = document.getElementById("fusionads");

  if (fusionad){

    // clear the interval so we stop looping
    clearInterval(interval);
    
    // add the close ad button
    var closead = document.createElement("a");
    closead.id = "close-fusionad";
    closead.innerHTML = "x";
    closead.href = "#";
    document.body.appendChild(closead);

    // close the ad
    document.getElementById("close-fusionad").addEventListener("click", function(e) {
      e.preventDefault();
      this.remove();
      fusionad.remove();
    });

  }

},100); // check every 100ms
</script>

</body>
</html>
