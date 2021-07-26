<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <textarea name="{{$name}}" rows="10" id="{{ $id }}-tinymce" placeholder="{{ $placeholder }}" {!! $attributes !!} >
            {{ old($column, $value) }}
        </textarea>

        @include('admin::form.help-block')

    </div>
</div>
