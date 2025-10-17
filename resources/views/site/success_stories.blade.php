    @php
            $pageTitle = isset($href)? "Story Detail" : "Success Stories";
    @endphp
    @include ('site.header')
    @include ('site.navbar')
    @if (isset($href))
        @include('site.success_stories.header')
        @include('site.success_stories.detail')
    @else
        
        @include ('site.success_stories.breadcrumb')
        @include ('site.success_stories.list')
        @include ('site.success_stories.cta')
    @endif
    @include ('site.footer')