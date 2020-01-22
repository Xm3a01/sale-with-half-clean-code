@extends('dashboard.metronic')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{asset('vendor/css/bootstrap-fileinput.css')}}" /> 
@endsection
<!-- END CSS -->

@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('dashboard.index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('products.index')}}">منتجات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل منتج </h3>

<form action="{{ route('products.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الأسم</label>
        <input type="text" name="item_name" class="form-control" placeholder="الأسم" required value="{{$item->item_name}}" >
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="item_name" class="form-control" placeholder="name" required value="{{$item->ar_item_name}}" >
    </div>
    <div class="form-group">
        <label>السعر</label>
        <input type="text" name="price" class="form-control" placeholder="السعر" required value="{{$item->price}}" >
    </div>

    <div class="form-group"> 
        <label>التلفون الاول</label>
        <input type="text" name="phone1" class="form-control" placeholder="التلفون الاول" required value="{{$item->phone1}}" >
    </div>

    <div class="form-group">
        <label>التلفون الثاني</label>
        <input type="text" name="phone2" class="form-control" placeholder="التلفون الثاني" required value="{{$item->phone2}}" >
    </div>

    <div class="form-group">
        <label>الوصف</label>
        <textarea name="ar_description" class="form-control ck_editor">{{$item->ar_description}}</textarea>
    </div>

    <div class="form-group">
        <label>الوصف</label>
        <textarea name="description" class="form-control ck_editor">{{$item->description}}</textarea>
    </div>

    <div class="form-group">
        <!-- IMAGE -->
        <label>صورة</label>
    <div class="fileinput fileinput-product input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-product">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="photo" name="photo" value="{{$item->image->url ?? ''}}">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
    </div>
    <div class="form-group">
        <label>Old Photo</label>
        <img src="{{Storage::url($item->image->url ?? '')}}" alt="" srcset="" height="100" width="100">
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{asset('vendor/js/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script>
    $('.fileinput').fileinput()
</script>
@endsection
<!-- END SCRIPTS --> 