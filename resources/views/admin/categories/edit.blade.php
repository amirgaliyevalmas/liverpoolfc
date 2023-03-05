@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <form action="{{route('admin.category.update',$category)}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="category_name">Названия категории:</label>
            <input type="text"
                   name="category_name"
                   id="category_name"
                   class="form-control"
                   value="{{old('category_name', $category->category_name)}}">
            <small id="emailHelp" class="form-text text-muted form-group"></small>
        </div>
        <div class="form-group">
            <label for="parent_id">Родительская категория</label>
            <select name="parent_id" id="parent_id" class="form-select form-control">
                <option value = "{{old('parent_id', null)}}"
                        {{$category->parent_id === null ? 'selected=selected':''}} >Без категория</option>

                @foreach($categories as $cat)
                    <option value="{{old('parent_id', $cat['id'])}}"
                            {{ $cat['id'] == $category->parent_id ? 'selected=selected':''}}

                            @if($cat['id'] == $category->id)
                                 disabled = ""
                                @isset($cat['children'])
                                      @php
                                          unset($cat['children'])
                                      @endphp
                                @endif

                            @endif

                    >
                        {{$cat['category_name']}}
                    </option>

                    @isset($cat['children'])
                        @foreach($cat['children'] as $subcategory)
                            @include('includes._forms.category_edit', ['subcategory','delimiter','category'])
                        @endforeach
                    @endisset
                @endforeach
            </select>
        </div>
        <small id="emailHelp" class="form-text text-muted form-group"></small>

        <input type="submit" class="btn btn-primary">
    </form>
@endsection