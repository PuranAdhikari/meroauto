@include('admin.layouts.partials.messages.success')
@if(count($errors))
    <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<ul class="nav nav-tabs tabs" role="tablist">
    <li role="presentation" class="active"><a role="tab" href="#cat-basic">Basic</a></li>
    <li><a href="#cat-metadata" class="metadata">Publishing & Metadata</a></li>
</ul>
<br>
<br>
<div class="tab-content">
    <div class="tab-pane fade active in" id="cat-basic" role="tabpanel">
        <div class="form-group">
            <label for="language" class="col-md-2 control-label">Language *</label>
            <div class="col-md-10">
                {!! Form::select('language', language(), null, ['class'=>'form-control', 'id'=>'eng-nep']) !!}
                {!!$errors->first('language', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="english">
            <div class="form-group">
                <label for="english_heading" class="col-md-2 control-label">Heading (English) *</label>
                <div class="col-md-10">
                    {!! Form::text('english_heading', null, ['class'=>'form-control', 'id'=>'news-title']) !!}
                    {!!$errors->first('english_heading', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="nepali">
            <div class="form-group">
                <label for="nepali_heading" class="col-md-2 control-label">Heading (Nepali) *</label>
                <div class="col-md-10">
                    {!! Form::text('nepali_heading', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('nepali_heading', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="english">
            <div class="form-group">
                <label for="english_sub_heading" class="col-md-2 control-label">Sub Heading (English)</label>
                <div class="col-md-10">
                    {!! Form::text('english_sub_heading', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('english_sub_heading', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="nepali">
            <div class="form-group">
                <label for="nepali_sub_heading" class="col-md-2 control-label">Sub Heading (Nepali)</label>
                <div class="col-md-10">
                    {!! Form::text('nepali_sub_heading', null, ['class'=>'form-control']) !!}
                    {!!$errors->first('nepali_sub_heading', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="slug" class="col-md-2 control-label">Slug *</label>
            <div class="col-md-10">
                {!! Form::text('slug', null, ['class'=>'form-control', 'id'=>'news-slug']) !!}
                {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="parent_news" class="col-md-2 control-label">Category *</label>
            <div class="col-md-10">
                <select name="category" class="form-control">
                    <option value="">--Select One--</option>
                    @foreach(\App\Models\Category::whereNull('parent')->get() as $cat)
                        <option value="{{$cat->id}}" {{(old('category') == $cat->id || (isset($news) && ($cat->id == $news->category))) ? 'selected' : ''}}>
                            {{$cat->name}}
                            @if(!$cat->published)
                                [**Unpublished Category]
                            @endif
                        </option>
                        @if(count($cat->children_categories))
                            @include('admin.news.__category_dropdown', ['cat'=>$cat->children_categories, 'level'=>1])
                        @endif
                    @endforeach
                </select>
                {!!$errors->first('category', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="tags" class="col-md-2 control-label">Tags</label>
            <div class="col-md-10">
                {!! Form::text('tags', null, ['class'=>'tagsinput form-control', 'data-role'=>'tagsinput']) !!}
                {!!$errors->first('tags', '<span class="text-danger has-error">:message</span>')!!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="english">
            <div class="form-group">
                <label for="english_content" class="col-md-2 control-label">Content (English) *</label>
                <div class="col-md-10">
                    {!! Form::textarea('english_content', null, ['class'=>'form-control summernote']) !!}
                    {!!$errors->first('english_content', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="nepali">
            <div class="form-group">
                <label for="nepali_content" class="col-md-2 control-label">Content (Nepali) *</label>
                <div class="col-md-10">
                    {!! Form::textarea('nepali_content', null, ['class'=>'form-control summernote']) !!}
                    {!!$errors->first('nepali_content', '<span class="text-danger has-error">:message</span>')!!}
                </div>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="image" class="col-md-2 control-label">Image</label>
            <div class="col-md-10">
                {!! Form::hidden('image', null, ['class'=>'form-control', 'placeholder'=>'Choose Image', 'data-rule-maxlength'=>250]) !!}
                <a class="btn btn-default btn_upload_image {{isset($news) && $news->image ? 'hide' : ''}}"
                   file_type="image"
                   selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
                @if(isset($news) && $news->image)
                    <div class="uploaded_image"><img src="{{\App\Models\Upload::find($news->image)->path()}}"><i
                                title="Remove Image" class="fa fa-times"></i></div>
                @else
                    <div class="uploaded_image hide"><img src=""><i title="Remove Image" class="fa fa-times"></i></div>
                @endif
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="featured" class="col-md-2 control-label">Featured</label>
            <div class="col-md-2">
                {!! Form::checkbox('featured', null, null, ['class'=>'js-switch', 'id'=>'featured']) !!}
            </div>
            <label for="main_news" class="col-md-2 control-label">Main News</label>
            <div class="col-md-2">
                {!! Form::checkbox('main_news', null, null, ['class'=>'js-switch']) !!}
            </div>
            <label for="published" class="col-md-2 control-label">Published</label>
            <div class="col-md-2">
                {!! Form::checkbox('published', null, null, ['class'=>'js-switch']) !!}
            </div>
        </div>
    </div>
    <div class="tab-pane fade" role="tabpanel" id="cat-metadata">
        <div class="form-group">
            <label for="start_publishing" class="col-md-2 control-label">Start Publishing</label>
            <div class="col-md-4">
                {!! Form::text('start_publishing', isset($news) && $news->start_publishing ? $news->start_publishing->format('d/m/Y h:i a') : Carbon\Carbon::now()->format('d/m/Y h:i a'), ['class'=>'form-control datetimepicker']) !!}
            </div>
            <label for="finish_publishing" class="col-md-2 control-label">Finish Publishing</label>
            <div class="col-md-4">
                {!! Form::text('finish_publishing', isset($news) && $news->finish_publishing ? $news->finish_publishing->format('d/m/Y h:i a') : null, ['class'=>'form-control datetimepicker']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
            <div class="col-md-10">
                {!! Form::text('meta_title', null, ['class'=>'form-control', 'id'=>'news-meta-title']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
            <div class="col-md-10">
                {!! Form::textarea('meta_description', null, ['class'=>'form-control', 'rows'=>'2']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="keywords" class="col-md-2 control-label">Keywords</label>
            <div class="col-md-10">
                {!! Form::text('keywords', null, ['class'=>'form-control']) !!}
                <span class="help-block m-b-none">Separated by comma.</span>
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <label for="robots" class="col-md-2 control-label">Robots</label>
            <div class="col-md-10">
                {!! Form::text('robots', null, ['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class="form-group">
    <div class="col-sm-6 col-sm-offset-2">
        <button class="btn btn-primary" type="submit" name="save" value="save">Save</button>
        <button class="btn btn-info" type="submit" name="save_close" value="save">Save & Close</button>
        <a class="btn btn-white" href="/admin/news"
           onclick="return confirm('Are you sure? The unsaved changes will be discarded.')">Cancel</a>
    </div>
</div>

@push('scripts')

<script>
    $(document).ready(function () {
        $("#news-title").change(function () {
            var title = $(this).val();
            $.ajax({
                type: "get",
                url: '/admin/news/slug/' + title,
                cache: false,
                success: function (result) {
                    $('#news-slug').val(result);
                    $('#news-meta-title').val(title);
                }
            });
        });

        languageFilter();
        $('#eng-nep').change(function (e) {
            languageFilter();
        });

        function languageFilter() {
            if ($('#eng-nep').val() === 'English') {
                $('.nepali').hide();
                $('.english').show();
            }
            else if ($('#eng-nep').val() === 'Nepali') {
                $('.english').hide();
                $('.nepali').show();
            }
            else if ($('#eng-nep').val() === 'Both') {
                $('.nepali').show();
                $('.english').show();
            }
        }
        $('.tagsinput').tagsinput({
            tagClass: 'label label-primary'
        });

        var featured = document.querySelector('#featured');
        featured.onchange = function () {
            if (featured.checked) {
                return confirm("Another featured news will be replaced by this !");
            }
        };

    });
</script>

@endpush