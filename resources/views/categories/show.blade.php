extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">{{ __($category->name) }}</h3>
            </div>
            <div class='col-md-12'>
                <div class="align py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            @each('products.parts.product_view',$products,'products')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                {{$products->links()}}
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
    </div>
@endsection

