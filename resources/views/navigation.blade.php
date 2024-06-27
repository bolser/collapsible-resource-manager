<nav class="sidebar__nav__wrapper">
    @foreach($navigation as $resource)

        <collapsible-resource-manager :data='@json($resource)'
                                      :remember-menu-state="@json($rememberMenuState)">
        </collapsible-resource-manager>

    @endforeach
</nav>
