<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">{{$subtitle ?? 'Masthead Subtitle'}}</div>
        <div class="masthead-heading text-uppercase">@yield("page_title", ($title ?? "Masthead Title"))</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{($button_url ?? '#')}}">{{($button_text ?? 'Button text')}}</a>
    </div>
</header>
