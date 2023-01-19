@extends('layouts.admin.master')

@section('content')
    <div class="card w-50">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">News</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('admin.news.create.process')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" class="form-control" id="title"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="thumbnail">Thumbnail</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="thumbnail" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Category</label>
                    <div class="input-group">
                        <select class="form-select" name="catogory" id="category">
                            <option selected="">Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="content">Content</label>
                    <textarea id="content" rows="6" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
@endsection
