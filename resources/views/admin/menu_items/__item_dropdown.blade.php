@foreach($item as $child)
    @if(!(isset($menu_item) && (($child->id == $menu_item->id) || $child->isAnyStepChildOf($menu_item))))
        <option value="{{$child->id}}" {{(old('parent') == $child->id || (isset($menu_item) && ($child->id == $menu_item->parent))) ? 'selected' : ''}}>@for($i = 0; $i < $level; $i++)
                <span class="dashed-line"></span> &nbsp;&nbsp; @endfor <sup> - </sup>{{$child->name}}@if(!$child->published) [**Unpublished Category] @endif</option>
    @endif
    @if(count($child->children_categories))
        @include('admin.menu_items.__item_dropdown', ['item'=>$child->children_items, 'level'=>$level + 1])
    @endif
@endforeach