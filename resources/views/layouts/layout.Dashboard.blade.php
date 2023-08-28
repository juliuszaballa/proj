<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Bato Farmland Geolocation and Mapping System</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
    <header>  
<div id="icon">
<i  class="bi bi-person-circle"></i>
</div>
    
    <h1>Admin</h1>
   
    <div id="out"><button class="add-farmer-button">
    <i class="bi bi-box-arrow-right"></i> log-out
    </button>
    </header>
    <nav>
    <h2>Dashboard</h2>
    <a href="#" id="showNewField"><i class="bi bi-database"></i>Register Farmer's</a>
    <a href="">Farmer Insurance</a>
    <a href="">Farmland</a>
    <a href="">About Us</a>
    <a href="">Contact Us</a>
   </nav>
<div class="data">
    <div class="h2btn">
    <h2>Farmer's Data</h2>
    <div id="add"><button class="add-farmer-button">
        <i class="bi bi-person-fill-add"></i> New Farmer's
    </button></div>
    </div>
   
    
    <table border="1">
        <tr>
           <th>No.</th>
           <th id="info">Farmer's Name</th>
           <th id="info">Barangay</th>
           <th id="info">Land Area</th>
           <th id="info">Commodity</th>
            
        </td>
    </table>
    <div id="newField">
    <label for="newFieldInput">New Field:</label>
    <input type="text" id="newFieldInput" name="new_field">
</div>
</div>

</script>
</body>
</html>
