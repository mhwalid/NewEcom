<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <div class="container  align-items-center mt-4">
        <div class="col-md-12 my-auto">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">{{$item->Caption}}</strong>
                <h5 class="mb-0"> {{ number_format($item->CostPrice,2)}}</h5>
              <div class="mb-1 text-muted">{{ $item->DesComClear}}</div>
                <p class="card-text mb-auto"> le Stoke virul : <em>{{ number_format($item->VirtualStock,0)}} </em> Pice</p>
                <p class="card-text mb-auto"> le Stoke real : <em>{{ number_format($item->RealStock,0)}} </em> Pice</p>
                <p></p>
              
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div>
            </div>
          </div>

    </div>
    
</body>
</html>