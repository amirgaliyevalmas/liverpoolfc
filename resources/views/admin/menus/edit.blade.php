@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <form action="{{route('admin.menu.update',$menu)}}" method="POST">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="title">Имя категории:</label>
            <input type="text" name="title"
                   id="title"
                   class="form-control"
                   value="{{old('title', $menu->title)}}">
            <small id="emailHelp" class= "form-text text-muted form-group"></small>
        </div>

        <div class="form-group">
            <label for="url">Имя категории:</label>
            <input type="text" name="url"
                   id="url"
                   class="form-control"
                   value="{{old('url', $menu->url)}}">
            <small id="emailHelp" class= "form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="slug">Имя категории:</label>
            <input type="text" name="slug"
                   id="slug"
                   class="form-control"
                   value="{{old('slug', $menu->slug)}}">
            <small id="emailHelp" class= "form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="sort">Номер отображения</label>
            <select name="sort" id="sort" class="form-select form-control">
                    <option value="{{old('sort', $menu->sort)}}" selected>{{$menu->sort}}</option>
                <option value=9>Не показовать</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
@endsection