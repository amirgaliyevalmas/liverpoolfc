<div class="bg-white mt-2 mb-2 p-2 ml-3" style="display: flex; justify-content: space-between; border-radius: 5px">
    {{$category['category_name'];}}
    <div style="display: flex">
        <a href="{{route('admin.category.show', $category['id'])}}" class="ml-2 text-orange"><i
                    class="fa fa-eye"></i>
        </a>
        <a href="{{route('admin.category.edit', $category['id'])}}" class="ml-2 text-blue"><i
                    class="fa fa-edit"></i>
        </a>
        <form action="{{route('admin.category.delete', $category['id'])}}" method='post'>
            @csrf
            @method('delete')
            <button type="submit" hidden id="knopka"></button>
            <label for="knopka"> <i class="fa fa-trash-alt ml-2 text-dark" role="button"></i></label>
        </form>
    </div>

</div>
    @isset($category['children'])
      <div class="ml-3">
          @each('includes._forms.category', $category['children'], 'category')

      </div>
    @endisset



