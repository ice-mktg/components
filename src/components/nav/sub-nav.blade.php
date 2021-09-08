<div id="sub-nav">
    <div class="container">
        <div class="row align-items-center gx-0">
            <div class="col-auto">
                <div class="me-n6">
                    {{ $root??'' }}
                </div>
            </div>

            <div class="col">
                <div class="px-6">
                    <div class="subnav-carousel">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>