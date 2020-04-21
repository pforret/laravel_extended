<!-- Team-->
@php
switch(true){
case !isset($members):
    $members[]=[
        "name"  =>  "Team member",
        "function"  =>  "Team function",
        "url_image"  =>  "https://gravatar.com/avatar/ebf3ff19e1c49eb15dd83d41d5858319?s=300",
        "url_linkedin"  =>  "#linkedin",
        "url_facebook"  =>  "#facebook",
        "url_instagram"  =>  "#instagram",
        "url_twitter"  =>  "#twitter",
        ];
    $cardwidth='col-lg-4';
    break;

case count($members)<=3:
    $cardwidth='col-lg-4';
    break;

case count($members)==4:
    $cardwidth='col-lg-3';
    break;

default:
    $cardwidth='col-lg-2';
    break;
}
@endphp
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">{{($title ?? 'Team Title')}}</h2>
            <h3 class="section-subheading text-muted">{{($subtitle ?? 'Team Subtitle')}}</h3>
        </div>
        <div class="row">

            @foreach($members as $member)
             <div class="{{$cardwidth}}">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ $member['url_image'] ?? 'https://gravatar.com/avatar/nobody?s=300'}}" alt="" />
                    <h4>{{$member['name'] ?? "John Doe"}}</h4>
                    <p class="text-muted">{{$member['function'] ?? "Head of overhead"}}</p>
                    @foreach(["fa-twitter","fa-facebook-f","fa-instagram","fa-linkedin-in"] as $social_logo)
                        @php
                            $parts=explode("-",$social_logo); 
                            $social_name=$parts[1]; 
                            $field_name= "url_" . $social_name;
                        @endphp
                        @if(isset($member[$field_name]))
                            <a class="btn btn-dark btn-social mx-2" href="{{$member[$field_name]}}"><i class="fab {{$social_logo}}"></i></a>
                        @endif
                    @endforeach
                </div>
            </div>
           @endforeach
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">{{$team_description ?? "Team Description"}}</p></div>
        </div>
    </div>
</section>
