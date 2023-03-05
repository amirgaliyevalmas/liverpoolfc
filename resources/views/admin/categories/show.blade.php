@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <a href="{{route('admin.category.create')}}" class="btn btn-primary">Создать</a>
    <br><br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имия категории</th>
            <th>Родительская категория</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category_name}}</td>
            <td>
                @isset($category->category)
                        {{$category->category->category_name}}
                @endisset
            </td>
            <td style="display: flex; text-align: end">
                <a href="{{route('admin.category.edit', $category->id)}}" class="ml-2 text-blue"><i
                            class="fa fa-edit"></i>
                </a>
                @if($category->id > 9)
                <form action="{{route('admin.category.delete', $category->id)}}" method='post'>
                    @csrf
                    @method('delete')
                    <button type="submit" hidden id="knopka"></button>
                    <label for="knopka"> <i class="fa fa-trash-alt ml-2 text-danger" role="button"></i></label>
                </form>
                @endif
            </td>
        </tr>
        </tbody>
    </table>
@endsection