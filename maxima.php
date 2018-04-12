<html>
  <head>
  </head>
  <body>
    <form action="maxima.php" method="post">
      <?php
	$input=$_POST["input"];
	?>
      <textarea type="text" name="input" style="width:100em; height:25em;">
<?php    
  echo "$input";
 ?>
      </textarea>
      <br/>
      <input type="submit"/>

      <?php
	echo "\t\t\t<pre>\n";

	$special_characters = ["(",")",";","%","\n"];
	$sanitized_versions = ["\(","\)","\;","\%",""]; 
	$input = str_replace( $special_characters, $sanitized_versions, $input );
	
	try{
	echo `echo $input | maxima  `;
	}
	catch( Exception $e){
	echo "Caught and exception", $e->getMessage(),"\n";
	}
	echo "\t\t\t</pre>\n";
	?>
    </form>
  </body>
</html>
