@extends('editor::scaffold.base')
@section('title')
Create
@stop
@section('content')
<div class="container">
    <h3>Add New {{ ucfirst($container_type) }}</h3>
    <div>
        <form action="/{{ $container_type }}/create" method="post">
        {{ csrf_field() }}
            <div class="form-group">
            {{--
                <label>Folder &nbsp;&nbsp;</label>
                <input></input>
                <br>
                --}}
                <label>{{ ucfirst($container_type) }} Name &nbsp;&nbsp;</label>
                <input type="text" name="name"></input>
            </div>


            <button class="btn btn btn-primary">Create</button>
        </form>
    </div>
</div>
@stop