@extends('layouts.app')

  @section('content')
    <div class="row mb-2 mt-4">
        @foreach ($items as $item)
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">{{$item->Caption}}</strong>
              <h5 class="mb-0"> {{ number_format($item->CostPrice,2)}}</h5>
            <div class="mb-1 text-muted">{{ $item->sysCreatedUser}}</div>
              <p class="card-text mb-auto">{{$item->BarCode}}</p>
            <a href="{{ route('product.show',$item->Id)}}" class="btn btn-success stretched-link">Voir le produit</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $items->links( "pagination::bootstrap-4") }}


      @endsection