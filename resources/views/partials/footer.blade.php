<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © {{env('APP_NAME')}} {{date("Y")}}</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="{{env('URL_TWITTER' ,'#twitter')}}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="{{env('URL_FACEBOOK','#facebook')}}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="{{env('URL_LINKEDIN','#linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
            	<a class="mr-3" href="{{env('URL_PRIVACY','#privacy')}}">Privacy Policy</a>
            	<a href="{{env('URL_TERMS','#terms')}}">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
