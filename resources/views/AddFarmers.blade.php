<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Farmer's Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body><br><br>
    <div class="container">
        <div class="row">
            <h2>Add Farmer's Account</h2>
            @if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
<form method="post" action="{{url('farmersAcc')}}">
    @csrf
    <div class="md-3">
        <label class="form-label">Name:</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter your Name">
        @error ('name')<div class="alert alert-danger"  role="alert" value="{{old('name')}}">
        {{ @$message }}
</div> @enderror
    </div>
            <div class="md-3">
            <label class="form-label">Address:</label>
            <select name="address" class="form-control" id="addressSelect">
    <option value="" disabled selected>Select a barangay</option>
    <option value="Agos">Agos</option>
    <option value="Bacolod">Bacolod</option>
    <option value="Buluang">Buluang</option>
    <option value="Caricot">Caricot</option>
    <option value="Cawacagan">Cawacagan</option>
    <option value="Cotmon">Cotmon</option>
    <option value="Cristo Rey">Cristo Rey</option>
    <option value="Del Rosario">Del Rosario</option>
    <option value="Divina Pastora">Divina Pastora</option>
    <option value="Goyudan">Goyudan</option>
    <option value="Lobong">Lobong</option>
    <option value="Lubigan">Lubigan</option>
    <option value="Mainit">Mainit</option>
    <option value="Manga">Manga</option>
    <option value="Masoli">Masoli</option>
    <option value="Neighborhood">Neighborhood</option>
    <option value="Niño Jesus">Niño Jesus</option>
    <option value="Pagatpatan">Pagatpatan</option>
    <option value="Palo">Palo</option>
    <option value="Payak">Payak</option>
    <option value="Sagrada">Sagrada</option>
    <option value="Salvacion">Salvacion</option>
    <option value="San Isidro">San Isidro</option>
    <option value="San Juan">San Juan</option>
    <option value="San Miguel">San Miguel</option>
    <option value="San Rafael">San Rafael</option>
    <option value="San Roque">San Roque</option>
    <option value="San Vicente">San Vicente</option>
    <option value="Santa Cruz">Santa Cruz</option>
    <option value="Santiago">Santiago</option>
    <option value="Sooc">Sooc</option>
    <option value="Tagpolo">Tagpolo</option>
    <option value="Tres Reyes">Tres Reyes</option>
</select>


        
    
                @error ('address')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
            <div class="md-3">
        <label class="form-label">land Area:</label>
        <input type="number" name="Area" class="form-control" value="{{old('Area')}}" placeholder="Enter your land Area ">
        @error ('landArea')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
    </div>
<div class="md-3">

        <label class="form-label">Comodity:</label>
        <select name="comodity" class="form-control" id="comoditySelect">
    <option value="" disabled selected>Select a Comodity</option>
        <option value="RICE">RICE</option>
    <option value="CORN">CORN</option>
</select>
                @error ('comodity')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
            <br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('adminpage')}}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</body>
</html>