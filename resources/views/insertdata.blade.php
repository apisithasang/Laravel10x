@extends('Layouts.app')
@section('title')
    Insert data
@endsection
@section('head')
    <p class="text-center py-2"> Insert Data </p>
@endsection
@section('content')
    <form method="POST" action="/author/insert">
        @csrf
        <div class="">

            <div form-floating>

                <input type="text" name="username" value="" class="form-control" id="floatingInputGroup1"
                    placeholder="ชื่อบทความ">

            </div>
        </div>
        <div class="my-2">
            @error('username')
                <div class="my-2"><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="py-2">

            <textarea name="content" cols="30" rows="20" value="" class="form-control" placeholder="เนื้อหาบทความ" id="content"></textarea>


        </div>


        <input type="submit" name="save" value="บันทึก" class="btn btn-primary">

    </form>


        <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
        </script>



    @foreach ($blogs as $item)
        <hr>
        <p class="fs-4">ชื่อ : {{ $item->username }}</p>
        <p class="fs-4">เนื้อหาบทความ : {!! Str::limit($item->content, 50) !!}</p>
        <a href="{{ route('delete', $item->id) }}" type="submit" name="delete" class="btn btn-danger">ลบ</a>
        <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">แก้ไข</a>
        <hr>
    @endforeach
    {{ $blogs->links() }}
@endsection
