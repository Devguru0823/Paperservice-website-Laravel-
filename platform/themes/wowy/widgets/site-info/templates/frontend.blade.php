<div class="col-lg-2 col-md-6 col-sm-6">
    <div class="widget-about font-md mb-md-5 mb-lg-0">
        @if (theme_option('logo'))
            <div class="logo logo-width-1 wow fadeIn animated">
                <a href="{{ route('public.index') }}">
                    <img src="http://127.0.0.1:8000/storage/home-images/logo1.png">
                   
                </a>
            </div>
        @endif
        <div class="site-info" id="site-info1"> 
            @if (theme_option('address'))
                <p class="wow fadeIn animated " style="margin-bottom: 24px;
                    margin-top: 29px;font-size:16px;color: #18327a;" >                  
                        Hauptstraße 9 </br>
                        2763 Pernitz </br>
                        Austria               
                </p>
            @endif
            <a style="text-decoration: underline;font-size:14px;color: #18327a;margin-top:32px;" href="https://www.google.com/maps/place/Papier-Service+Reixenartner+%26+Spiwak+OHG/@47.8961025,15.9669037,17z/data=!3m1!4b1!4m6!3m5!1s0x476dc0f613f7adef:0x8973cecffe0a5076!8m2!3d47.8961025!4d15.9690924!16s%2Fg%2F1txnn82d">
                Auf Karte anzeigen
            </a>      
            @if (theme_option('social_links'))

                <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0" style="display:flex !important;">
                    @foreach(json_decode(theme_option('social_links'), true) as $socialLink)
                        @if (count($socialLink) == 4)
                            <a href="{{ $socialLink[2]['value'] }}"
                               title="{{ $socialLink[0]['value'] }}" style="color:#18327a; text-align:left;" border: 1px solid {{ $socialLink[3]['value'] }};">
                                <i class="{{ $socialLink[1]['value'] }}"></i>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 ">
   <div class="siteinfo-padding">
        <p style="font-size:18px;color:  #18327a; padding-top:10px"><strong>Brauchen Sie Hilfe?</strong></p>
        <div style="margin-top:40px; margin-bottom:21px">
        <strong style="color:green; font-size:28px;"><i class="fa fa-phone"style="padding-right:15px"></i>{{ theme_option('phone') }}</strong>
        </div>
    
    @if (theme_option('working_hours'))
                    <p class="wow fadeIn animated" style="font-size:16px;padding-left:47px">
                        Montag-Freitag</br>
                         07:00-16 Uhr
                    </p>
    @endif
    <div id="orign-mail">
        <div style="border-bottom: 1px solid #b9c1d7; margin:10px 0; width: 80%;"></div>
        <div style="color: #18327a;">
                <i
                    class="fa-regular fa-envelope"
                    style="font-size: 14px; color: #18327a; margin-right: 10px"
                ></i
                    >&nbsp; thomas.schartner@papierservice.at
        </div>
    </div>
    <div id="modify-mail">
        
        <div style="color: #18327a;">
                <i
                    class="fa-regular fa-envelope"
                    style="font-size: 14px; color: #18327a; margin-right: 10px"
                ></i
                    >&nbsp; thomas.schartner@papierservice.at
        </div>
        <div style="border-bottom: 1px solid #b9c1d7; margin:30px 0; width: 100%;"></div>
    </div>
    </div>
</div>