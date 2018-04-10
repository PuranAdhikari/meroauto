@foreach($cat as $child)
    @if(!(isset($category) && (($child->id == $category->id) || $child->isAnyStepChildOf($category))))
        <option value="{{$child->id}}" {{(old('parent') == $child->id ||request('parent') == $child->id || (isset($category) && ($child->id == $category->parent))) ? 'selected' : ''}}>
            @for($i = 0; $i < $level; $i++)
                <span class="dashed-line"></span> &nbsp;&nbsp;
            @endfor
            <sup> - </sup>{{$child->name}}
            @if(!$child->published)
                [**Unpublished Category]
            @endif
        </option>
    @endif
    @if(count($child->children_categories))
        @include('admin.categories.__category_dropdown', ['cat'=>$child->children_categories, 'level'=>$level + 1])
    @endif
@endforeach