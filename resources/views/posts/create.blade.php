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

    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{old('title')}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" class="form-control"  rows="3" value="{{old('description')}}" ></textarea>
        </div>

        <div class="mb-3">
            <label  class="form-label">Post Creator</label>
            <select name="post_creator" type="text" class="form-control">
               @foreach($users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
            </select>
        </div>
        <div class="mb-3">
                            <label>Upload File/Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

        <button class="btn btn-success">Submit</button>
    </form>


@endsection