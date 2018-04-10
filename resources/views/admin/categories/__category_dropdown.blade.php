@foreach($cat as $child)
    @if(!(isset($category) && (($child->id == $category->id) || $child->isAnyStepChildOf($category))))
<<<<<<< HEAD
        <option value="{{$child->id}}" {{(old('parent') == $child->id || (isset($category) && ($child->id == $category->parent))) ? 'selected' : ''}}>@for($i = 0; $i < $level; $i++)
                <span class="dashed-line"></span> &nbsp;&nbsp; @endfor <sup> - </sup>{{$child->name}}@if(!$child->published) [**Unpublished Category] @endif</option>
=======
        <option value="{{$child->id}}" {{(old('parent') == $child->id || (isset($category) && ($child->id == $category->parent))) ? 'selected' : ''}}>
            @for($i = 0; $i < $level; $i++)
                <span class="dashed-line"></span> &nbsp;&nbsp;
            @endfor
            <sup> - </sup>{{$child->name}}
            @if(!$child->published)
                [**Unpublished Category]
            @endif
        </option>
>>>>>>> 5c792a6c1988be8cccb22420e6f4d62f5dbd908f
    @endif
    @if(count($child->children_categories))
        @include('admin.categories.__category_dropdown', ['cat'=>$child->children_categories, 'level'=>$level + 1])
    @endif
@endforeach