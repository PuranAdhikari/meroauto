@foreach($cat as $child)
    <option value="{{$child->id}}" {{(old('category') == $child->id || (isset($news) && ($child->id == $news->category))) ? 'selected' : ''}}>
        @for($i = 0; $i < $level; $i++)
            <span class="dashed-line"></span> &nbsp;&nbsp;
        @endfor
        <sup> - </sup>{{$child->name}}
        @if(!$child->published)
            [**Unpublished Category]
        @endif
    </option>
    @if(count($child->children_categories))
        @include('admin.news.__category_dropdown', ['cat'=>$child->children_categories, 'level'=>$level + 1])
    @endif
@endforeach