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
<body>
    <div class="container">
        <div class="row">
            <h2>Edit Farmer's Account</h2>
            @if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif
            <form method="post" action="{{url('farmersAccount')}}">
            <div class="md-3">
            @csrf
          
            <input type="hidden" name="id" value="{{$data->id }}">
        <label class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$data->name}}">
                @error ('name')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
            <label class="form-label">Address:</label>
            <select name="address" class="form-control" id="addressSelect">
    <option value="" disabled>Select a barangay</option>
    <option value="Agos" {{ $data->address === 'Agos' ? 'selected' : '' }}>Agos</option>
    <option value="Bacolod" {{ $data->address === 'Bacolod' ? 'selected' : '' }}>Bacolod</option>
    <option value="Buluang" {{ $data->address === 'Buluang' ? 'selected' : '' }}>Buluang</option>
    <option value="Caricot" {{ $data->address === 'Caricot' ? 'selected' : '' }}>Caricot</option>
    <option value="Cawacagan" {{ $data->address === 'Cawacagan' ? 'selected' : '' }}>Cawacagan</option>
    <option value="Cotmon" {{ $data->address === 'Cotmon' ? 'selected' : '' }}>Cotmon</option>
    <option value="Cristo Rey" {{ $data->address === 'Cristo Rey' ? 'selected' : '' }}>Cristo Rey</option>
    <option value="Del Rosario" {{ $data->address === 'Del Rosario' ? 'selected' : '' }}>Del Rosario</option>
    <option value="Divina Pastora" {{ $data->address === 'Divina Pastora' ? 'selected' : '' }}>Divina Pastora</option>
    <option value="Goyudan" {{ $data->address === 'Goyudan' ? 'selected' : '' }}>Goyudan</option>
    <option value="Lobong" {{ $data->address === 'Lobong' ? 'selected' : '' }}>Lobong</option>
    <option value="Lubigan" {{ $data->address === 'Lubigan' ? 'selected' : '' }}>Lubigan</option>
    <option value="Mainit" {{ $data->address === 'Mainit' ? 'selected' : '' }}>Mainit</option>
    <option value="Manga" {{ $data->address === 'Manga' ? 'selected' : '' }}>Manga</option>
    <option value="Masoli" {{ $data->address === 'Masoli' ? 'selected' : '' }}>Masoli</option>
    <option value="Neighborhood" {{ $data->address === 'Neighborhood' ? 'selected' : '' }}>Neighborhood</option>
    <option value="Niño Jesus" {{ $data->address === 'Niño Jesus' ? 'selected' : '' }}>Niño Jesus</option>
    <option value="Pagatpatan" {{ $data->address === 'Pagatpatan' ? 'selected' : '' }}>Pagatpatan</option>
    <option value="Palo" {{ $data->address === 'Palo' ? 'selected' : '' }}>Palo</option>
    <option value="Payak" {{ $data->address === 'Payak' ? 'selected' : '' }}>Payak</option>
    <option value="Sagrada" {{ $data->address === 'Sagrada' ? 'selected' : '' }}>Sagrada</option>
    <option value="Salvacion" {{ $data->address === 'Salvacion' ? 'selected' : '' }}>Salvacion</option>
    <option value="San Isidro" {{ $data->address === 'San Isidro' ? 'selected' : '' }}>San Isidro</option>
    <option value="San Juan" {{ $data->address === 'San Juan' ? 'selected' : '' }}>San Juan</option>
    <option value="San Miguel" {{ $data->address === 'San Miguel' ? 'selected' : '' }}>San Miguel</option>
    <option value="San Rafael" {{ $data->address === 'San Rafael' ? 'selected' : '' }}>San Rafael</option>
    <option value="San Roque" {{ $data->address === 'San Roque' ? 'selected' : '' }}>San Roque</option>
    <option value="San Vicente" {{ $data->address === 'San Vicente' ? 'selected' : '' }}>San Vicente</option>
    <option value="Santa Cruz" {{ $data->address === 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
    <option value="Santiago" {{ $data->address === 'Santiago' ? 'selected' : '' }}>Santiago</option>
    <option value="Sooc" {{ $data->address === 'Sooc' ? 'selected' : '' }}>Sooc</option>
    <option value="Tagpolo" {{ $data->address === 'Tagpolo' ? 'selected' : '' }}>Tagpolo</option>
    <option value="Tres Reyes" {{ $data->address === 'Tres Reyes' ? 'selected' : '' }}>Tres Reyes</option>
</select>


<div class="md-3">
        
    
                @error ('address')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
<div class="md-3">
        <label class="form-label">Land Area:</label>
                <input type="number" name="Area" class="form-control" placeholder="Provide the land area in square meters" value="{{$data->Area}}">
                @error ('Area')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
<div class="md-3">

        <label class="form-label">Commodity:</label>
        <select name="comodity" class="form-control" id="comoditySelect">
    <option value="" disabled>Select a barangay</option>
    <option value="RICE" {{ $data->comodity === 'RICE' ? 'selected' : '' }}>RICE</option>
    <option value="CORN" {{ $data->comodity === 'CORN' ? 'selected' : '' }}>CORN</option>
    </select>
                @error ('comodity')<div class="alert alert-danger" role="alert">
        {{ @$message }}
</div> @enderror
            </div>
            
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('adminpage')}}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</body>
</html>