<?php



?>

<html>
<head>
	<title>first page</title>
</head>
<body>

<!--
<?php $here= "Johnson & Johnson"; ?>
<a href="link_id_$get2.php?name=<?php echo urlencode($here) ; ?>"> Click to go to the second page</a>
-->

<!-- WORKING WITH urlencode(); -->
<!-- Two types: 
	1. rawurlendcode()  
	2. urlencode()

NOTE:	rawurlencode():  It will make the spaces appear as '%20' sign, which is a hexadecimal for space. This is preferred to use in the url before '?' sign.  because the browser will see it as a space. But if you use urlencode it will produce + sign and the browser will see it as a + sign and not a space. 
urlencode()   :  It will make the space appear as '+' sign. It is preferred to use after the '?' to let it access by a query string. 
-->

<?php 
$page= "Sameer Kumar";
$quote= " is the greatest person.";
$link= "/bio/". rawurlencode($page). "?quote=". urlencode($quote);

echo $link;
?>

</body>
</html>