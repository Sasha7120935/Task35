<div class ="col-md-4">
    <div class="card mb-4 shadow-sm">
        @if(Storage::has($product->thumbnail))
            <img src="{{Storage::url($product->thumbnail)}}" height="225" class="card-img-top" alt="">
            @endif
        <div class="card-body">
            <p class="card-title">{{ __ ($product->title)}}</p>
            <hr>
            <p class="card-text">{{ __ ($product->short_description)}}</p>
            <div class="d-flex flex-column justify-content-center align-items-start">
                <small class="text-muted">Categories: </small>
                <div class="btn-group align-self-end">
                    @if(!empty($product->categories))
                        @each('categories.parts.product_category',$product->categories,'category')
                    @endif
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <div class="bth-group">
                    <a href="{{route('products.show',$product->id)}}"
                       class="btn btn-sm btn-outline-dark">{{__('Show') }}</a>
                </div>
                <span class="text-muted">{{$product->price}}$</span>
            </div>
        </div>
    </div>
</div>
