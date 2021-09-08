<div class="component-breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    {{ $slot }}
                </ul>
            </div>
        </div>
    </div>
</div>