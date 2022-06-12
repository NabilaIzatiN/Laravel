@extends('layouts.app')

@section('title','Groups')

@section('content')
<form action="/groups/addmembers/{{$group->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Teman</label>
      <select class="form-select" Nabi-label="Default select example" name="friend_id">
        <option selected>Pilih Teman Untuk Dimasukkan ke Groups</option>
        @foreach ($friend as $f)
       <option value="{{$f->id}}">{{$f->nama}}</option>
       @endforeach
      </select>
      </div>

    <button type="submit" class="btn btn-primary">Tambah ke Group</button>
  </form>
@endsection
