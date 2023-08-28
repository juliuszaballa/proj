<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Bato Farmland Geolocation and Mapping System</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
  /* Hide all new fields initially */
  .newField {
    display: none;
  }</style>
</head>
<body>
    <header>  
<div id="icon">
<i  class="bi bi-person-circle"></i>
</div>
    
    <h1>{{ Auth::user()->name }}</h1>
   
    </header>
    <nav>
    <h2>Dashboard</h2>
    
    <a class="showNewFieldLink" data-target="newField1" href="#" >
        <i class="bi bi-database"></i>Register Farmer's</a>
    
    
    <a  href="#" class="showNewFieldLink" data-target="newField2">Farmer Insurance</a>
    <a  href="#" class="showNewFieldLink" data-target="newField3" >Farmland</a>
    <a  href="#" class="showNewFieldLink" data-target="newField4">CropTrack</a>
   
    <x-dropdown-link :href="route('profile.edit')">
      {{ __('Admin Account') }}
                        </x-dropdown-link>
    
   
    <a  href="#">Contact Us</a>
   </nav>

   <div id="newField1" class="newField">
   <div class="table">
   <div class="data">
    <div class="h2btn">
    <h2>Farmer's Data</h2>
    <a href="{{url('AddFarmers')}}"><div id="add"><button class="add-farmer-button">
        <i class="bi bi-person-fill-add"></i> New Farmer's
    </button></div></a>
    </div>
   
    
    <table  border="1">
        <tr>
           <th id="no">No.</th>
           <th id="info">Farmer's Name</th>
           <th id="info">Barangay</th>
           <th id="info">Land Area</th>
           <th id="info">Commodity</th>
           <th id="info">Action</th>
            
        </tr>
        <?php
                    $i=1;
                    ?>
        @foreach($data as $farm)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$farm->name}}</td>
                        <td>{{$farm->address}}</td>
                        <td>{{$farm->Area}} sq. m</td>
                        <td>{{$farm->comodity}}</td>
                        <td><a href="{{url('editAccount/'.$farm->id)}}" style="color:white; text-decoration:none;font-size:9px;">
                        <button class="add-farmer-button" style="color:white; border-radius:5px; text-decoration:none;font-size:9px; 
                         display: inline-block;
    padding:5px 5px;">
                        <i class="bi bi-pencil-square"></i>Edit</a></button>
                        <button styel=" margin-left:15px;">
                        <a href="{{url('deleteAccount/'.$farm->id)}}" style="color:white; border-radius:5px; text-decoration:none;font-size:9px; 
                       margin-left:5px;  display: inline-block;
    padding:5px 5px; background-color:red;" ><i class="bi bi-trash3-fill"></i>Delete</a>
</button></td>              </button>
                    </tr>
                    @endforeach
    </table>
 
</div>
</div>
</div>

<div id="newField2" class="newField">
  <label for="newInput2">New Field 2:</label>
  <input type="text" id="newInput2" name="newInput2">
</div>

<div id="newField3" class="newField">
  <label for="newInput3">New Field 3:</label>
  <input type="text" id="newInput3" name="newInput3">
</div>

<div id="newField4" class="newField">
<div class="table">
    <?php
    $n=1;
    ?><div class="harvest">
        <table  border="1">
        <tr>
           <th>No.</th>
           <th id="info2">Farmer's Name</th>
           <th id="info2">Type of Crop Planted</th>
           <th id="info2">Action</th>
        </tr>
        <?php
                    $i=1;
                    ?>
        @foreach($data as $farm)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$farm->name}}</td>
                        <td style="text-align: center; ">{{$farm->comodity}}</td>
                        <td style="text-align: center; text-decoration: none;"><a href="{{url('harvest/'.$farm->id)}}" >Harvest Profile</a></td>
                        
                    </tr>
                    @endforeach
    </table>
    </div>

</div>
</div>
<div id="newField4" class="newField">
  <label for="newInput3">New Field 4:</label>
  <input type="text" id="newInput4" name="newInput4">
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const showNewFieldLinks = document.querySelectorAll(".showNewFieldLink");
  const newFields = document.querySelectorAll(".newField");

  showNewFieldLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
      event.preventDefault(); // Prevent the default link behavior

      // Get the target field ID from the data attribute
      const targetFieldId = link.getAttribute("data-target");

      // Hide all new fields
      newFields.forEach(function(field) {
        field.style.display = "none";
      });

      // Show the target new field
      const targetField = document.getElementById(targetFieldId);
      targetField.style.display = "block";
    });
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#showNewField').click(function() {
                $('#newField').toggle();
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $(".showNewFieldLink").click(function() {
    // Remove active class from all buttons
    $(".showNewFieldLink").removeClass("active");
    
    // Add active class to the clicked button
    $(this).addClass("active");
  });
});
</script>


</body>
</html>
