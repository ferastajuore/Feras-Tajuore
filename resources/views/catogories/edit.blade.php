@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Edit Catogory</strong></div>

                <div class="card-body">
                  <form action="{{ route('catogory.update',['id' => $catogory->id]) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{ $catogory->name }}" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                  </form>
                  @include('errors')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
