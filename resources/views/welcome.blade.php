@extends('Layouts.app')
@section('title')
    Welcome
@endsection

@section('head')
    Welcome
@endsection

@section('content')
    <h4 class="text-center">ล่าสุด<h4>
    @foreach($blogs as $item)

       <hr>
        <p>ชื่อบทความ : {{Str::limit($item->username,50)}}</p>
        <p>เนื้อหาบทความ : {!!Str::limit($item->content,70)!!}</p>
       <hr>
  
    @endforeach
    {{$blogs->links()}}
@endsection