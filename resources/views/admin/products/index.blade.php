@extends('layouts.admin.master')

@section('content')
    <div class="card">
        <div class="text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th class="w-px-30">STT</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th class="w-px-300">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($products as $item)
                        <tr class="text-center">
                            <th class="w-px-30">{{ $loop->index + 1 }}</th>
                            <th>{{$item->name}}</th>
                            <th class="text-start"><div class="text-truncate-3 w-px-600">{{$item->description}}</div></th>
                            <th><img class="d-block w-100 h-100" src="{{$item->thumbnail}}" alt=""></th>
                            <th>{{$item->price }} VND</th>
                            <th>{{$item->amount}}</th>
                            <th>{{$item->category->name}}</th>
                            <th>
                                <a class="btn btn-primary px-12 py-8" href="{{route('admin.news.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
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
