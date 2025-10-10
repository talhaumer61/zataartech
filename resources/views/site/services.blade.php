    @php
        $pageTitle = "Services";
    @endphp
    @include ('site.header')
    @include ('site.navbar')
    @if (isset($href))
        @include('site.services.service_header')
        @include('site.services.detail')
    @else
        @include ('site.services.breadcrumb')
        @include ('site.services.list')
        @include ('site.services.solutions')
        @include ('site.services.cta')
    @endif
    @include ('site.footer')