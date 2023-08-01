@extends('layouts.main')

@section('content')
<h2>Create a post</h2>
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Файл
        <input type="file" name="image">
    </label>
    <label for="caption">{{__('messages.post_caption')}}</label>
    <textarea name="caption" id="caption">{{old('caption')}}</textarea>
    <button type="submit">{{__('messages.create_post')}}</button>
</form>
@endsection
