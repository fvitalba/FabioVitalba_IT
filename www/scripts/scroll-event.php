<script>
	// Copyright 2014 Fabio Vitalba

	window.onscroll = function (e) {
		document.getElementById("header").style.WebkitTransition = "all 0.5s";
		document.getElementById("header").style.MozTransition = "all 0.5s";
		if ($(window).scrollTop())	{
			document.getElementById("header").style.boxShadow = "2px 2px 0.8em black";
		}	else	{
			document.getElementById("header").style.boxShadow = "";
		}
	}
	
</script>