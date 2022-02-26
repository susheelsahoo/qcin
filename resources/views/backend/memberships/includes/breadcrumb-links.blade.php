<li class="breadcrumb-menu">
    <div class="btn-group" role="group" aria-label="Button group">
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="breadcrumb-dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('labels.backend.access.memberships.all') }}</a>

            <div class="dropdown-menu" aria-labelledby="breadcrumb-dropdown-1">
                <a class="dropdown-item" href="{{ route('admin.memberships.index') }}">@lang('menus.backend.access.memberships.active')</a>
                <a class="dropdown-item" href="{{ route('admin.memberships.create') }}">@lang('menus.backend.access.memberships.create')</a>
            </div>
        </div>
        <!--dropdown-->

        <!--<a class="btn" href="#">Static Link</a>-->
    </div>
    <!--btn-group-->
</li>