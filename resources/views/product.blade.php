@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                  @foreach($products as $product)
                   <div data-id='{{ $product->id }}' class="single-product">
                     <img style="width: 50px;" src='/img/{{ $product->img }}'>
                     <p>{{$product->name}}</p>
                     <div>
                       <p>{{ $product->description }}</p>
                     </div>

                   </div>
                 @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
