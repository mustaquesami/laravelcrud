@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <h1>Create New Product</h1>
            <form action="" method="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="pName" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" name="pPrice" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Description</label>
                    <textarea name="pDescription" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input type="file" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection