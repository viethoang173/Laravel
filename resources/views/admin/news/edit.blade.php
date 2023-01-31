@extends('layouts.admin.master')

@section('content')
    <div class="row-col-xxl-2">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">News</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('admin.news.edit.process', $item->id)}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Title</label>
                        <input type="text" class="form-control" id="basic-default-fullname" value="{{$item->title}}"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Thumbnail</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile03" value="1" placeholder="sad" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                        <img class="d-block m-auto mt-3" src="{{$item->thumbnail}}" alt="" width="500px">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <div class="input-group">
                            <select class="form-select" name="category_id" id="category">
                                @foreach($listCategory as $category)
                                    @if($category->id == $item->category_id)
                                        <option value="{{$category->id}}" selected>{{$category->content}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->content}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Status</label>
                        <div class="input-group">
                            <select class="form-select" name="status" id="status">
                                @foreach($newsStatus as $status)
                                    @if($status == $item->status)
                                        <option value="{{$status}}" selected>{{\App\Enums\NewsStatus::getStatus($status)}}</option>
                                    @else
                                        <option value="{{$status}}">{{\App\Enums\NewsStatus::getStatus($status)}}</option>
                                    @endif
                                @endforeach
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
