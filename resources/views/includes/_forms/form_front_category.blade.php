<li>
    <a href="#">  {{$category['category_name']}}</a>
    @isset($category['children'])
            @foreach($category['children'] as $cat)
                @include('includes._forms.form_front_category', ['category' => $cat])
            @endforeach
    @endisset
</li>
