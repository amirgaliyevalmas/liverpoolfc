@extends('layouts.admin')


@section('title')
    Главное меню
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="margin-bottom: -25px">
                    <h3 class="card-title">Меню</h3>
                    <a href="{{route('admin.menu.create')}}" class="btn-sm btn-primary"
                       style="float: right;">Создать</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Имя категории</th>
                            <th>Номер отображения</th>
                            <th>URL</th>
                            <th>Названия для SEO:</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$menu->id}}.</td>
                                <td>{{$menu->title}}</td>
                                <td>{{$menu->sort}}</td>
                                <td>{{$menu->url}}</td>
                                <td>{{$menu->slug}}</td>

                                <td style="display: flex; text-align: end">
                                    <a href="{{route('admin.menu.show', $menu->id)}}" class="ml-2 text-orange"><i
                                                class="fa fa-eye"></i>
                                    </a>
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
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer clearfix" style="display: none">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-footer clearfix" style="display: none">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>

@endsection