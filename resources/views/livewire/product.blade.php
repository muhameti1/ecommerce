<div>
    @foreach ($products as $product )
    <div>hi</div>
    <a href="/products/{{$product->slug}}">click</a>
    <img src="{{url('storage', $product->images[0])}}" alt="">
  @endforeach</div>
