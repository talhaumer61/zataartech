    @php
            $pageTitle = isset($href)? "Case Study Detail" : "Case Studies";
    @endphp
    @include ('site.header')
    @include ('site.navbar')
    @if (isset($href))
        @include('site.case_studies.header')
        @include('site.case_studies.detail')
    @else
        
        @include ('site.case_studies.breadcrumb')
        @include ('site.case_studies.list')
        @include ('site.case_studies.cta')
    @endif
    @include ('site.footer')