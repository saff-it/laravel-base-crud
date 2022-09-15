@extends('layouts.main')

@section('main-content')

<form action="{{ route('comic.store')}}" method="POST" class="row g-3">
    @csrf

    <div class="col-md-6">
      <label for="input-title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="col-md-6">
      <label for="input-description" class="form-label">Description</label>
      <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div class="col-12">
      <label for="input-price" class="form-label">Price</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>

    <div class="col-12">
      <label for="input-series" class="form-label">Series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="col-md-6">
      <label for="input-type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@endsection