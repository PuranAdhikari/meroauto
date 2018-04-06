@foreach($children as $child)
    <tr>
        <td>
            <input type="checkbox" name="select[{{$child->id}}]" class="individual-select">
        </td>
        <td class="project-status">
            <a data-toggle="tooltip" data-placement="top"
               title="{{$child->published ? 'Unpublish Item' : 'Publish Item'}}"
               href="/admin/menu-items/update-status/{{$child->id}}"
               class="label label-{!! $child->published ? 'primary' : 'danger' !!}">
                {!! $child->published ? 'Active' : 'Inactive' !!}
            </a>
        </td>
        <td class="project-title">
            <a href="/admin/menu-items/{{$child->id}}/edit"> @for($i = 0; $i < $level; $i++)
                    <span class="dashed-line"></span> @endfor - {!! $child->name !!}</a>
            <br>
            <small> @for($i = 0; $i < $level; $i++)
                    <span class="dashed-line"></span> @endfor Created
                on: {!! $child->created_at->format('d.m.Y') !!}</small>
        </td>

        <td class="project-title">
            @if($child->image)
                <a href="{{\App\Models\Upload::findOrFail($child->image)->path()}}" data-fancybox="gallery">
                    <img src="{{\App\Models\Upload::findOrFail($child->image)->path()}}"
                         alt="{{$child->name}}" width="50">
                </a>
            @endif        </td>
        <td class="project-actions">
            <a href="/admin/menu-items/{{$child->id}}/edit"
               class="btn btn-white btn-sm"><i class="fa fa-edit"></i> Edit
            </a>
        </td>
    </tr>
    @if(count($child->children_items))
        @include('admin.menu_items._child_tree',['children' => $child->children_items, 'level'=> $level + 1])
    @endif
@endforeach