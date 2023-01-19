@extends('layouts.admin.master')

@section('content')
    <div class="card w-50">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">News</h5>
            <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Title</label>
                    <input type="text" class="form-control" id="basic-default-fullname"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Content</label>
                    <input type="text" class="form-control" id="basic-default-company"/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Thumbnail</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Category</label>
                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect02">
                            <option selected="">Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-message">Content</label>
                    <textarea id="basic-default-message" rows="6" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
@endsection
