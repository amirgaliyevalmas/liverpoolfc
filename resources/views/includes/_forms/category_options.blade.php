<option value={{$category['id']}}>
    --{{$category['category_name'];}}
</option>
@isset($category['children'])
        @each('includes._forms.category_options', $category['children'], 'category')
@endisset
