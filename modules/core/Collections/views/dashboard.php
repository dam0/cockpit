@if(count($collections))

<span class="uk-text-small uk-text-uppercase uk-text-muted">@lang('Latest')</span>
<ul class="uk-list uk-list-line">
    @foreach($collections as $collection)
    <li><a href="@route('/collections/entries/'.$collection['_id'])">{{ $collection["name"] }}</a></li>
    @endforeach
</ul>

<a class="uk-button uk-button-success uk-button-small" href="@route('/collections/collection')" title="@lang('Add collection')" data-uk-tooltip="{pos:'bottom'}"><i class="uk-icon-plus-circle"></i></a>

@else

<div class="uk-text-center">
    <h2><i class="uk-icon-list"></i></h2>
    <p class="uk-text-muted">
        @lang('You don\'t have any collections created.')
    </p>

    <a href="@route('/collections/collection')" class="uk-button uk-button-success">@lang('Create a collection')</a>
</div>

@endif