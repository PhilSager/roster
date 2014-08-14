<!doctype html public 
  "-//w3c//dtd html 4.01 transitional//en"
  "http://www.w3.org/tr/1999/rec-html401-19991224/loose.dtd">
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
<title>1812 War Roster Search</title>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.2.12/jquery.jgrowl.min.css" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.2.12/jquery.jgrowl.min.js"></script>

<script type="text/javascript" src="formly/formly.js"></script>
<link rel="stylesheet" href="formly/formly.css" type="text/css" />

<script type="text/javascript">
	
	$(document).ready(function() {		
		$('#rosterform').formly(); 
	});
	
	function validateForm() {

		var searchtermExists = /[A-Na-n]/.test(document.forms["rosterform"]["searchterm"].value);
		
		if (!searchtermExists) {
			$.jGrowl("Need something to search", { theme: 'validation', header: 'Search Error', live: 10000 });
			return false;
		}
		
	}
</script>
<style type="text/css">
body {
	font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}
.heading {
	text-align:center;
	font-size:120%;padding:20px;
}
.backto {
	text-align:center;
	padding:10px;
}
a.navlinks {
	text-decoration: none;
}
a.navlinks:hover {
	color: red;
	text-decoration: underline;
}
div.jGrowl div.validation {
	background-color: #808080;
	width: 200px;
	min-height: 0px;
	border: 1px solid #000;
}

</style>
</head> 
<body>
		
	<div class="backto"><a class="navlinks" href="http://www.ohiohistory.org/collections--archives/archives-library">Library/Archives Home</a></div>
	<div class="heading">1812 War Roster Search</div>
	
	<div style="width:100%">
	
	<form id="rosterform" name="rosterform" action="results.php" method="POST" onsubmit="return validateForm()"  style="width: 500px;margin: 0 auto">
	
		<br/>Search a name or keyword: <input type="search" name="searchterm" size="25" maxsize="50">

		<br/><input type="submit" value="Search" />
		
	</form>

<div style="width:500px;margin: 0 auto;">
<p>Search the full text of the roster from the Adjutant General records. Ohio furnished 1,759 Officers and 24,521 enlisted men for the War of 1812.</p>

<p>Brought to you by the Ohio Vital Information for Libraries Center (OVIL), a grant-funded project of OHS supported by the State Library of Ohio and OPLIN.</p>

<p>Citations: Sources for the online searchable text 
<br/><i>Roster of Ohio Soldiers in the War of 1812</i>. Adjutant General of Ohio. Transcription, 1916. R973.524471 A2. </p>

</div>

</div>


</body>
</html>