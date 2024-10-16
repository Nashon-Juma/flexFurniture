@extends('admin.layout')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mb-3">
                        <div class="card-header"><h3 class="fs-5 font-weight-bold">Update Product</h3></div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)  
                                <div class="mx-3 alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <div class="card-body">
                            <form id="productForm" method="POST" action="{{ route('admin.show.product-list.update',$products['id']) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $products->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{ $products->price }}" >
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount:</label>
                                    <input type="number" class="form-control" id="discount" name="discount" value="{{ $products->discount }}" >
                                </div>
                                <div class='form-group'> 
                                    <label for="">Category Product:</label>
                                    <select name="category_id" class="form-control">
                                        <option value="-1">Select Category</option>
                                        @foreach( $categories as $category)
                                        <option {{$category->id === $products->category_id ? 'selected' : ''}} value="{{ $category->id  }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <div class="my-2 rounded">
                                        <img class="thumbnail w-25 h-25" src="{{ asset($products->thumbnail) }}" alt="" srcset="">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="thumbnail">
                                        <label class="custom-file-label" for="thumbnail"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ $products->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-dark">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Xử lý sự kiện khi nhấn nút "Cancel"
        document.querySelector('.btn-danger').addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của nút "Cancel"
            document.getElementById('productForm').reset(); // Xóa dữ liệu đã điền trên form
        });
    </script>
@endsection
