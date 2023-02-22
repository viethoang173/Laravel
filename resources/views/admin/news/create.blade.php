@extends('layouts.admin.master')

@section('content')
    <div class="row-cols-xxl-2">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">News</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('admin.news.create.process') }}" enctype="multipart/form-data"
                      autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <div class="input-group">
                            <input type="file" accept="image/*" class="form-control" name="thumbnail" id="thumbnail"
                                   aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <div class="input-group">
                            <select class="form-select" name="category_id" id="category">
                                @foreach($listCategory as $category)
                                    <option value="{{$category->id}}">{{$category->content}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-group">
                            <select class="form-select" name="status" id="status">
                                @foreach($listStatus as $status)
                                    <option value="{{$status}}">{{\App\Enums\Status::getStatus($status)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>
                        <textarea id="content" name="content" rows="6" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Create</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
