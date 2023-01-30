@extends('layouts.admin.master')

@section('content')
    <div class="row-col-xxl-2">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">News</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control" id="basic-default-fullname" value="{{$item->title}}"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Thumbnail</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <div class="input-group">
                            <select class="form-select" name="category_id" id="category">
                                    @if($category->id == $item->category_id)
                                        <option value="{{$category->id}}" selected>{{$category->content}}</option>
                                    @else
                                        <option value="{{$category->id == $item->category_id}}">{{$category->content}}</option>
                                    @endif
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-group">
                            <select class="form-select" name="status" id="status">

                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Content</label>
                        <textarea id="basic-default-message" rows="8" class="form-control">{{$item->content}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection
