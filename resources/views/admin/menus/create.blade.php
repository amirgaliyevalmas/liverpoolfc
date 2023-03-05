@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <form action="{{route('admin.menu.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Названия меню:</label>
            <input type="text" name="title"  id="title" class="form-control">
            <small id="emailHelp" class="form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="url">URL:</label>
            <input type="text" name="url"  id="url" class="form-control">
            <small id="emailHelp" class="form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="slug">Названия для SEO:</label>
            <input type="text" name="slug"  id="slug" class="form-control">
            <small id="emailHelp" class="form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="sort">Номер отображения</label>
            <select name="sort" id="sort" class="form-select form-control">
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
            <small id="emailHelp" class="form-text text-muted form-group"></small>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection