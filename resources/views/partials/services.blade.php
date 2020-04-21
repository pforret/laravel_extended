<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{($title ?? 'Services Title')}}</h2>
            <h3 class="section-subheading text-muted">{{($subtitle ?? 'Services Subtitle')}}</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas {{$services[0]['icon'] ?? 'fa-shopping-cart'}} fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">{{($services[0]['title'] ?? 'Service Title 1')}}</h4>
                <p class="text-muted">{{($services[0]['body'] ?? 'Service Body 1')}}</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas {{$services[1]['icon'] ?? 'fa-laptop'}} fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">{{($services[1]['title'] ?? 'Service Title 2')}}</h4>
                <p class="text-muted">{{($services[1]['body'] ?? 'Service Body 2')}}</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas {{$services[2]['icon'] ?? 'fa-lock'}} fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">{{($services[2]['title'] ?? 'Service Title 3')}}</h4>
                <p class="text-muted">{{($services[2]['body'] ?? 'Service Body 3')}}</p>
            </div>
        </div>
    </div>
</section>
