if(location.host.length > 0 && location.host.indexOf("127.0.0.1") == -1 && location.host.indexOf("file:///") == -1) {
    console.log("load GoogleAnalyticsObject");

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-51652340-1', 'free.fr');
	ga('send', 'pageview');
}