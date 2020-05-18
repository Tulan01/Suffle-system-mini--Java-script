<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="node_modules\sweetalert2\dist\sweetalert2.css">

<body>

<p>Upload Image</p>
<table>
 <tr>
    <td><img  src="1.png" alt="" width="100" height="200"></td>
    <td><img  src="2.png" alt="" width="100" height="200"></td>
   <td> <img  src="3.png" alt="" width="100" height="200"></td>
</tr>
</table>
<form id="myForm" action="index2.php">
 
  <input type="button" onclick="myFunction()" value="Suffle">
</form>
<script src="node_modules\sweetalert2\dist\sweetalert2.all.min.js"></script>

<script>
   	  function myFunction(){
   	  	if (Swal.fire('Hello world!')){
   	  		  document.getElementById("myForm").submit();
   	  	}
   	  	else{
          
   	  	}

   	  	
   	  }
   </script>

</body>
</html>