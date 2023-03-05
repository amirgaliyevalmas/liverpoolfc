<option value={{$subcategory['id']}}
        {{ $subcategory['id'] == $category->parent_id ? 'selected=selected':''}}
        @if($subcategory['id'] == $category->id)
            disabled=""
                    @isset($subcategory['children'])
                        @php unset($subcategory['children'])@endphp
                    @endif
        @endif
>
    {{$delimiter.' '.$subcategory['category_name'];}}
</option>


@isset($subcategory['children'])
    {{$delimiter = $delimiter.'-'}}
    @foreach($subcategory['children'] as $subcategory)
        @include('includes._forms.category_edit', ['subcategory', 'delimiter'])
    @endforeach
@endisset

