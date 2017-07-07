<li class="{{ Request::is('home*') ? 'active' : '' }}">
   <a href="{!! url('/home') !!}">Home</a>
</li>

<li class="{{ Request::is('properties*') ? 'active' : '' }}">
    <a href="{!! route('properties.index') !!}">Properties</a>
</li><li class="{{ Request::is('tests*') ? 'active' : '' }}">
    <a href="{!! route('tests.index') !!}">Tests</a>
</li>

