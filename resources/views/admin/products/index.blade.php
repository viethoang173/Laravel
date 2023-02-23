@extends('layouts.admin.master')

@section('content')
    <div class="justify-content-between d-flex">
        <h4>Danh sách sản phẩm</h4>
    </div>
    <div class="mb-3 justify-content-between align-items-center d-flex">
        <form action="" method="get">
            <div class="wave-group">
                <input required="" type="text" class="input">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">S</span>
                    <span class="label-char" style="--index: 1">e</span>
                    <span class="label-char" style="--index: 2">a</span>
                    <span class="label-char" style="--index: 3">r</span>
                    <span class="label-char" style="--index: 4">c</span>
                    <span class="label-char" style="--index: 3">h</span>
                </label>
            </div>
        </form>
        <div>
            <a class="btn btn-success" href="{{route('admin.products.create')}}">Thêm mới</a>
        </div>
    </div>
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
                                <div class="d-flex justify-content-lg-between">
                                    <a class="btn btn-primary px-12 py-8" href="{{route('admin.news.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-secondary px-12 py-8" href=""><i class="fas fa-eye-slash"></i></a>
                                    <form method="get" action="{{route('admin.products.delete',  $item->id)}}" onsubmit="return confirm('Có không giữ mất đừng tìm!!!')">
                                        <button class="btn btn-danger px-12 py-8" ><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            <div class="text-center">
            </div>
            </table>
        </div>
    </div>
    {!! $products->links() !!}
@endsection
