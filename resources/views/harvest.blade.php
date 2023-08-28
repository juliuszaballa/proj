<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Bato Farmland Geolocation and Mapping System</title>
    <link rel="stylesheet" href="css/harveststyle.css">
</head>
<style>
    /* Reset some default browser styles */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

/* Form styles */
.formharvest {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.formharvest p {
    margin: 5px 0;
}

/* Table styles */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f5f5f5;
}

/* Responsive styles */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
}

</style>
<body>
    <!-- If this is a Blade template, use @csrf here if needed -->

    <div class="formharvest">
       NAME: <p>{{$data->name}}</p>
        ADDRESS:<p>{{$data->address}}</p><br>
        LAND AREA:<p>{{$data->Area}}</p>
        Type of Crop Planted:<p>{{$data->comodity}}</p>
    </div>
    <table  border="1">
        <tr>
           <th>No.</th>
           <th id="info">Comodity</th>
           <th id="info">Type of Seeds</th>
           <th id="info">Seeds Planted</th>
           <th id="info">Fertilizer Used</th>
           <th id="info">Harvested</th>
           <th id="info">Date Harvest</th>
</tr>
</table>
</body>
</html>

