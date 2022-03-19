@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
                <form action="/videos" method="post">
                    @csrf
                    <div class="row">
                        <div>
                            <label>@lang('videos.name')</label>
                            <input name="name" type="text"  placeholder="@lang('videos.name')">
                        </div>
                        <div>
                            <label>سازنده</label>
                            <input name="director" type="text"  placeholder="سازنده">
                        </div>
                        <div>
                            <label>@lang('videos.length')</label>
                            <input name="length" type="text"  placeholder="@lang('videos.length')">
                        </div>
                        <div class="col-md-6">
                            <label>نام یکتا</label>
                            <input name="slug" type="text"  placeholder="نام یکتا">
                        </div>
                        <div >
                            <label>آدرس ویدیو</label>
                            <input  name="url" type="text"  placeholder="آدرس ویدیو">
                        </div>
                        <div >
                            <label>تصویر بند‌انگشتی</label>
                            <input  name="thumbnail" type="text"  placeholder="تصویر بند انگشتی">
                        </div>
                        <div>
                            <label>توضیحات</label>
                            <textarea name="description"  rows="4" placeholder="توضیح"></textarea>
                        </div>
                        <div>
                            <button type="submit"   style="background-color: aqua">ذخیره</button>
                        </div>
                    </div>
                </form>



@endsection
