@extends('layouts.admin')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Create Detailed Product
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="{{ route('products.details', $product->product_id) }}" class="btn">Back</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <form id="create-detailed-product-form"
                    action="{{ route('products.create_detailed_product', $product->product_id) }}" method="POST"
                    class="card">
                    @csrf
                    <div class="card-body">
                        <div class="row row-cards">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="sku" class="form-label">SKU</label>
                                    <input id="sku" name="sku" type="text" class="form-control" placeholder="123123123"
                                        value="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Detailed Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        placeholder="High quality plastic chairs - Blue - Small" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="size" class="form-label">Size</label>
                                    <input id="size" name="size" type="text" class="form-control"
                                        placeholder="255cm x 255cm x 125cm" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="original_price" class="form-label">Original Price</label>
                                    <input id="original_price" name="original_price" type="number" class="form-control"
                                        placeholder="1200000" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="quantities" class="form-label">Quantities</label>
                                    <input id="quantities" name="quantities" type="number" class="form-control"
                                        placeholder="10" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="warranty_month" class="form-label">Warranty Month</label>
                                    <input id="warranty_month" name="warranty_month" type="number" class="form-control"
                                        placeholder="6" value="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Color</label>
                                    <div class="row g-2">
                                        @foreach ($colors as $color)
                                        <div class="col-auto">
                                            <label class="form-colorinput">
                                                <input name="color_id" type="radio" value="{{ $color->color_id }}"
                                                    class="form-colorinput-input" />
                                                <span class="form-colorinput-color"
                                                    style="background-color: {{ $color->code }}"
                                                    title="{{ $color->name }}"></span>
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Upload images</label>
                                    <div class="col-12">
                                        <div class="d-flex align-items-center justify-content-center"
                                            style="width: 80px; height: 80px;">
                                            <label for="image-picker"
                                                class="d-flex align-items-center justify-content-center rounded-circle border"
                                                style="width: 100%; height: 100%; background-color: #f8f9fa; cursor: pointer; border-style: dashed;">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="50"
                                                    height="50" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 5l0 14" />
                                                    <path d="M5 12l14 0" />
                                                </svg>
                                            </label>
                                            <input class="d-none" type="file" id="image-picker" accept="image/*"
                                                multiple>

                                        </div>
                                    </div>
                                </div>
                                <div id="preview-list" class="row g-2 g-md-3">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">Detailed description</label>
                                    <textarea id="editor" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div id="js-error" class="alert alert-danger d-none">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.components.footer')
</div>
{{-- Script --}}
<script src="{{ asset('js/product_api.js') }}" defer></script>
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
@endsection
