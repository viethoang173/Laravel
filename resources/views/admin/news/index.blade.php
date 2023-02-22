@extends('layouts.admin.master')

@section('content')
    <div class="card">
        <div class="text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr class="text-center">
                    <th class="w-px-30">STT</th>
                    <th class="w-px-800">Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th class="w-px-300">Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($listNews as $item)
                    <tr class="text-center">
                        <th class="w-px-30 w-">{{ $loop->index + 1 }}</th>
                        <th class="text-start w-px-800">{{$item->title}}</th>
                        <th>{{$item->category->content}}</th>
                        <th>
                            <div class="badge {{$item->status == \App\Enums\Status::ACTIVE ? 'bg-success' : 'bg-danger'}}">{{\App\Enums\Status::getStatus($item->status)}}</div>
                        </th>
                        <th>
                            <a class="btn btn-primary px-12 py-8" href="{{route('admin.news.edit', $item->id)}}"><i
                                        class="fas fa-edit"></i></a>
                            <a class="btn btn-secondary px-12 py-8" href=""><i class="fas fa-eye-slash"></i></a>
                            <a class="btn btn-danger px-12 py-8" href=""><i class="fas fa-trash-alt"></i></a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
