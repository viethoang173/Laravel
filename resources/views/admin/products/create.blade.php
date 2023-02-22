@extends('layouts.admin.master')

@section('content')
    <div id="admin-products">
        <div class="row-cols-xxl-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Thêm mới sản phẩm</h5>
                    <a href="">Thêm danh mục sản phẩm</a>
                </div>
                <div class="card-body">
                    <form id="formProducts" method="post" action="{{ route('admin.products.create.process') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Tên sản phẩm</label>
                            <input type="text" name="name" class="form-control" id="name"/>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label" for="name">Giá bán</label>
                            <div class="input-group input-group-merge">
                                <input type="number" name="price" class="form-control" placeholder="100">
                                <span class="input-group-text">VND</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Số lượng</label>
                            <input type="number" name="amount" class="form-control" placeholder="Lớn hơn hoặc bằng 0" id="name"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail</label>
                            <div class="input-group">
                                <input type="file" id="readUrl" accept="image/*" class="form-control" name="thumbnail" id="thumbnail" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                            <img id="uploadedImage" class="mt-3 thumbnail" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Category</label>
                            <div class="input-group">
                                <select class="form-select" name="category_id" id="category">
                                    @foreach($category as $cate)
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
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
                            <label class="form-label" for="description">Mô tả</label>
                            <textarea id="description" name="description" rows="6" class="form-control"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-primary">Create</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customScript')
   <script>
       document.getElementById('readUrl').addEventListener('change', function(){
           if (this.files[0] ) {
               var picture = new FileReader();
               picture.readAsDataURL(this.files[0]);
               picture.addEventListener('load', function(event) {
                   document.getElementById('uploadedImage').setAttribute('src', event.target.result);
                   document.getElementById('uploadedImage').style.display = 'block';
               });
           }
       });
   </script>
@endsection
