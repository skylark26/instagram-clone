@extends('layouts.main')

@section('content')
<h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Create a post </h1>
<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Файл
        <input type="file" name="image">
    </label>
    @error('image')
        {{$message}}
    @enderror
    <label for="caption">{{__('messages.post_caption')}}</label>
    <textarea name="caption" id="caption">{{old('caption')}}</textarea>
    @error('caption')
        {{$message}}
    @enderror
    <button type="submit" class="button bg-blue-700">{{__('messages.create_post')}}</button>
</form>
@endsection
