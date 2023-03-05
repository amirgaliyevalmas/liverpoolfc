@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <form action="{{route('admin.category.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="category_name">Названия категории:</label>
            <input type="text" name="category_name"  id="category_name" class="form-control">
            <small id="emailHelp" class="form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="parent_id">Родительская категория</label>
            <select name="parent_id" id="parent_id" class="form-select form-control">
                <option value = ''>Без категория</option>
                @foreach($categories as $category)
                    <option value={{$category['id']}}>{{$category['category_name']}}</option>
                    @isset($category['children'])
                        @each('includes._forms.category_options', $category['children'], 'category')
                    @endisset
                @endforeach
            </select>
        </div>
            <small id="emailHelp" class="form-text text-muted form-group"></small>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection