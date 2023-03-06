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
                    <a href="{{route('admin.category.create')}}" class="btn-sm btn-primary"
                       style="float: right;">Создать</a>
                </div>

                <div class="card-body mt-3">
                    <table class="table bg-gray">
                        <thead>
                            <tr>
                                <th>Имя категории</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <div class="bg-white p-2" style="display: flex; justify-content: space-between; border-radius: 5px;">
                                        {{$category['category_name']}}
                                        <div style="display: flex; justify-content: space-between;">
                                            <a href="{{route('admin.category.show', $category['id'])}}" class="ml-2 text-dark"><i
                                                        class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{route('admin.category.edit', $category['id'])}}" class="ml-2 text-dark"><i
                                                        class="fa fa-edit"></i>
                                            </a>

                                            <form action="{{route('admin.category.delete',
                                            $category['id'])}}" method='post'>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" hidden id="{{'knopka'.$category['id']}}"></button>
                                                <label for="{{'knopka'.$category['id']}}"> <i class="fa fa-trash-alt ml-2 text-dark" role="button"></i></label>
                                            </form>
                                        </div>

                                    </div>

                                @isset($category['children'])
                                        @each('includes._forms.category', $category['children'], 'category')
                                @endisset
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