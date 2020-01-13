@extends("layouts.app")

@section("content")
    <div class="card card-default">
        <div class="card-header">
            {{isset($category) ? "Edit category" : "Create category"}}
        </div>
        <div class="card-body">
            @include("partials.errors")
            <form action="{{isset($category) ? route("categories.update", $category->id) : route("categories.store")}}" method="post">
                @csrf
                @if(isset($category))
                    @method("PUT")
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{isset($category) ? $category->name : ""}}" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">{{isset($category) ? "Update category" : "Add category"}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
