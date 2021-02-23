<!DOCTYPE html>
<html>
<body>

	
 <h1>ENTER YOUR NAME</h1>


  <form method="post" enctype="multipart/form-data" action="{{route('req')}}" id="form1">
	{{ csrf_field() }}
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" required><br><br>
  <input type="submit" id="submit" value="Submit">
</form>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  $(document).on("click","#submit",function() {
    $('#fname').val('');
  
      });
   
  </script> --}}
</body>
</html>
