<!DOCTYPE html>
<html>
<body>

<p>Upload Image</p>
<table>
 <tr>
    <td><img  src="1.png" alt="" width="100" height="200"></td>
    <td><img  src="3.png" alt="" width="100" height="200"></td>
   <td> <img  src="2.png" alt="" width="100" height="200"></td>
</tr>
</table>
<form id="myForm" action="index3.php">
 
  <input type="button" onclick="myFunction()" value="Suffle">
</form>

<script>
function myFunction() {
  document.getElementById("myForm").submit();
}
</script>

</body>
</html>