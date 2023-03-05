@extends('layouts.admin')


@section('title')
    Категории
@endsection

@section('content')
    <a href="{{route('admin.menu.create')}}" class="btn btn-primary">Создать</a>
    <br><br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имия категории</th>
            <th>Номер отображения</th>
            <th>URL</th>
            <th>Названия для SEO:</th>
            <th>Редактировать</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{$menu->id}}</td>
            <td>{{$menu->title}}</td>
            <td>{{$menu->sort}}</td>
            <td>{{$menu->url}}</td>
            <td>{{$menu->slug}}</td>
            <td style="display: flex; text-align: end">
                <a href="{{route('admin.menu.edit', $menu->id)}}" class="ml-2 text-blue"><i
                            class="fa fa-edit"></i>
                </a>
                @if($menu->id > 9)
                <form action="{{route('admin.menu.delete', $menu->id)}}" method='post'>
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