@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">{{ ('Create.Product') }}</h3>
            </div>
            <div class="col-md-12">
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="SKU" class="col-md-4 col-form-label text-md-right">{{ __('SKU') }}</label>

                    <div class="col-md-6">
                        <input id="SKU" type="text" class="form-control @error('SKU') is-invalid @enderror" name="SKU" value="{{ old('SKU') }}" required autocomplete="SKU" autofocus>
                        @error('SKU')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <textarea name="description" id="description" cols="10" class="form-control @error('description') is-invalid @enderror" rows="10"required>{{ old('description') }}</textarea>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('price') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="in_stock" class="col-md-4 col-form-label text-md-right">{{ __('in_stock') }}</label>

                    <div class="col-md-6">
                        <input id="in_stock" type="number" class="form-control @error('in_stock') is-invalid @enderror" name="in_stock" value="{{ old('in_stock') }}" required autocomplete="in_stock" autofocus>
                        @error('in_stock')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('thumbnail') }}</label>

                    <div class="col-md-6">
                        <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') }}" required autocomplete="thumbnail" autofocus>
                        @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <textarea name="short_description" id="description" cols="10" class="form-control @error('short_description') is-invalid @enderror" rows="10"required>{{ old('short_description') }}</textarea>

                        @error('short_description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create product') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection


