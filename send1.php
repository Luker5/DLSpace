<?php
	
     $fname =$_POST['fname'];
	 $lname =$_POST['lname'];
	 $email =$_POST['email'];
	 $note=$_POST['note'];
	 
	 

   
  $doc = new DOMDocument(); 
  $doc->formatOutput = true; 
   
  $r = $doc->createElement( "requests" ); 
  $doc->appendChild( $r ); 
   
  
  $b = $doc->createElement( "request" ); 
   
  $namefirst = $doc->createElement( $fname ); 
  $namefirst->appendChild( 
  $doc->createTextNode( $request['firstname'] ) 
  ); 
  $b->appendChild( $namefirst ); 
   
 
   
  echo $doc->saveXML(); 
  $doc->save("content/request.xml") 
  ?> 

