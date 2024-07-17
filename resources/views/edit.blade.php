@extends('Layouts.app')
@section('title')
    Edit
@endsection
@section('head')
   <p class="text-center py-2"> Edit </p> 
@endsection
@section('content')

            <h3 class="text-center py-1">Edit</h3>
            <form method="POST" action="{{route('update',$logins->id)}}" >
                @csrf
                <div class="">
                    <div form-floating>
       
                        <input type="text"  name="username" value="{{$logins->username}}" class="form-control" id="floatingInputGroup1" >
                
                    </div>
                </div>
                <div class="my-2">
                    @error('username')
                    <div class="my-2"><span class="text-danger">{{$message}}</span></div>
                    @enderror
                </div>
                <div class="input-group mb-3">
          
                        <textarea type="text"  name="content" clos="30" rows="20"  class="form-control" id="floatingInputGroup1" >{{$logins->content}}</textarea>
  
                    
                </div>
                

                    <input type="submit" name="save" value="บันทึก" class="btn btn-primary">
                   
                </form>
          


@endsection