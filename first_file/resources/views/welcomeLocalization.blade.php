<h2>
    <!-- Hello, how are you.. -->
     {{__('welcome.heading1')}}
</h2>

<h3>{{__('welcome.subheading')}}</h3>

<a href="/aboutLocalization">{{__('welcome.about')}}</a>
<a href="/aboutLocalization">{{__('welcome.home')}}</a>
<a href="/aboutLocalization">{{__('welcome.contact')}}</a>

<!-- for passing name -->
<h1>{{ __('welcome.aboutName', ['name' => 'nb nill']) }}</h1>

<h1>choose your lang</h1>
<a href="/setLang/en">English</a>
<a href="/setLang/ko">Korean</a>
<a href="/setLang/bengali">Bengali</a>