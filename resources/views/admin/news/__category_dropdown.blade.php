@foreach($cat as $child)
<<<<<<< HEAD
    <option value="{{$child->id}}" {{(old('category') == $child->id || (isset($post) && ($child->id == $post->category))) ? 'selected' : ''}}>@for($i = 0; $i < $level; $i++)
            <span class="dashed-line"></span> &nbsp;&nbsp; @endfor <sup> - </sup>{{$child->name}}@if(!$child->published)
            [**Unpublished Category] @endif</option>
=======
    <option value="{{$child->id}}" {{(old('category') == $child->id || (isset($news) && ($child->id == $news->category))) ? 'selected' : ''}}>
        @for($i = 0; $i < $level; $i++)
            <span class="dashed-line"></span> &nbsp;&nbsp;
        @endfor
        <sup> - </sup>{{$child->name}}
        @if(!$child->published)
            [**Unpublished Category]
        @endif
    </option>
>>>>>>> 5c792a6c1988be8cccb22420e6f4d62f5dbd908f
    @if(count($child->children_categories))
        @include('admin.news.__category_dropdown', ['cat'=>$child->children_categories, 'level'=>$level + 1])
    @endif
@endforeach