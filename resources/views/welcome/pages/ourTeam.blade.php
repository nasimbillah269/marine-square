@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->image())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
 @push('css')
 <style>

.breaOverly {
    background: #104b7c !important;
    padding: 0;
}

.team-section {
    padding: 70px 0 80px;
    background: #f4f7fb;
}

.team-intro {
    max-width: 760px;
    margin: 0 auto 50px;
    text-align: center;
}
.team-eyebrow {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #0d4d81;
    margin-bottom: 10px;
}
.team-heading {
    font-size: 34px;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 14px;
}
.team-heading span { color: #0aa7b8; }
.team-intro-text {
    color: #5a6a7a;
    line-height: 1.8;
    font-size: 15px;
}

/* Featured leader */
.team-leader {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 20px 45px -20px rgba(7, 30, 61, 0.25);
    margin-bottom: 50px;
}
.team-leader-img {
    height: 100%;
    min-height: 320px;
    background: linear-gradient(160deg, #0b2d56, #0d4d81);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 30px;
}
.team-leader-img img {
    width: 220px;
    height: 220px;
    object-fit: cover;
    border-radius: 50%;
    border: 6px solid rgba(255, 255, 255, 0.85);
    background: #fff;
}
.team-leader-body { padding: 40px; }
.team-leader-body .role {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
    background: #0d4d81;
    padding: 6px 14px;
    border-radius: 30px;
    margin-bottom: 14px;
}
.team-leader-body h3 {
    font-size: 28px;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 14px;
}
.team-leader-body p {
    color: #444;
    line-height: 1.8;
    margin-bottom: 12px;
}

/* Team grid */
.team-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    height: 100%;
    text-align: center;
    box-shadow: 0 10px 30px -15px rgba(7, 30, 61, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
}
.team-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 40px -18px rgba(7, 30, 61, 0.35);
}
.team-card-img {
    position: relative;
    padding: 30px 30px 0;
    background: linear-gradient(180deg, #e8f0f8 0%, #e8f0f8 60%, #fff 60%);
}
.team-card-img img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #fff;
    box-shadow: 0 8px 20px rgba(7, 30, 61, 0.15);
    background: #fff;
}
.team-card-body { padding: 18px 22px 26px; }
.team-card-body h4 {
    font-size: 18px;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 4px;
}
.team-card-body .role {
    font-size: 13px;
    font-weight: 600;
    color: #0aa7b8;
    margin-bottom: 12px;
}
.team-card-body p {
    font-size: 14px;
    color: #5a6a7a;
    line-height: 1.7;
    margin-bottom: 16px;
}
.team-socials {
    display: flex;
    justify-content: center;
    gap: 10px;
}
.team-socials a {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eef3f8;
    color: #0d4d81;
    font-size: 14px;
    transition: background 0.2s, color 0.2s;
}
.team-socials a:hover {
    background: #0d4d81;
    color: #fff;
}


.team-leader-body .suffix {
    font-size: 15px;
    font-weight: 600;
    color: #0aa7b8;
    margin: -8px 0 16px;
}
.team-leader-img img { object-position: center top; }
.team-group { margin-top: 20px; margin-bottom: 30px; }
.team-group-head {
    text-align: center;
    margin-bottom: 28px;
}
.team-group-head h3 {
    font-size: 24px;
    font-weight: 700;
    color: #0a2540;
    margin-bottom: 6px;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
}
.team-group-head h3::after {
    content: '';
    position: absolute;
    left: 50%; bottom: 0;
    width: 50px; height: 3px;
    transform: translateX(-50%);
    background: linear-gradient(90deg, #0d4d81, #0aa7b8);
    border-radius: 3px;
}
.team-group-head p { color: #5a6a7a; font-size: 14px; margin: 0; }
.team-card-body .suffix {
    font-size: 12.5px;
    color: #5a6a7a;
    margin-bottom: 4px;
}
.team-card-body .role { margin-bottom: 0; }
.team-card-img img { object-position: center top; }
.row-cols-lg-5 .team-card-img img { width: 140px; height: 140px; }

/* Page content from admin editor */
.team-page-content {
    margin-top: 50px;
    background: #fff;
    border-radius: 12px;
    padding: 35px;
    color: #444;
    line-height: 1.8;
}

/* ===== Tablet ===== */
@media (max-width: 991px) {
    .team-leader-img { min-height: 280px; }
    .team-leader-body { padding: 32px; }
}

/* ===== Mobile ===== */
@media (max-width: 767px) {
    .team-section { padding: 40px 0 50px; }
    .team-section > .container { padding-left: 16px; padding-right: 16px; }

    .team-intro { margin-bottom: 30px; }
    .team-eyebrow { font-size: 11px; letter-spacing: 2.5px; margin-bottom: 6px; }
    .team-heading { font-size: 24px; line-height: 1.3; margin-bottom: 10px; }
    .team-intro-text { font-size: 14px; line-height: 1.7; }

    /* Leader card: compact, centered header */
    .team-leader { border-radius: 16px; margin-bottom: 30px; }
    .team-leader-img {
        min-height: 0;
        padding: 30px 20px 60px;
        background:
            radial-gradient(circle at 50% 0%, rgba(10, 167, 184, 0.35), transparent 60%),
            linear-gradient(160deg, #0b2d56, #0d4d81);
    }
    .team-leader-img img {
        width: 150px;
        height: 150px;
        border-width: 5px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }
    .team-leader-body {
        padding: 0 22px 26px;
        margin-top: -36px;
        position: relative;
        text-align: center;
    }
    .team-leader-body .role {
        font-size: 11px;
        letter-spacing: 1.5px;
        padding: 7px 16px;
        box-shadow: 0 6px 16px rgba(13, 77, 129, 0.35);
        border: 3px solid #fff;
    }
    .team-leader-body h3 { font-size: 22px; margin-bottom: 10px; }
    .team-leader-body .suffix { font-size: 13px; margin: -6px 0 14px; }
    .team-leader-body p {
        font-size: 14px;
        line-height: 1.75;
        text-align: left;
        color: #4a5562;
    }

    /* Team grid: 2 compact cards per row */
    .team-group { margin: 0 0 24px; }
    .team-card { border-radius: 14px; }
    .team-card:hover { transform: none; }
    .team-card-img {
        padding: 18px 12px 0;
        background: linear-gradient(180deg, #e3edf7 0%, #e3edf7 55%, #fff 55%);
    }
    .team-card-img img,
    .row-cols-lg-5 .team-card-img img {
        width: 96px;
        height: 96px;
        border-width: 4px;
    }
    .team-card-body { padding: 12px 10px 16px; }
    .team-card-body h4 {
        font-size: 14px;
        line-height: 1.35;
        margin-bottom: 3px;
    }
    .team-card-body .suffix { font-size: 11px; line-height: 1.4; margin-bottom: 3px; }
    .team-card-body .role {
        display: inline-block;
        font-size: 11px;
        font-weight: 600;
        color: #0d4d81;
        background: #eaf4fa;
        padding: 3px 10px;
        border-radius: 20px;
        margin-top: 4px;
    }
}

/* Very small phones */
@media (max-width: 359px) {
    .team-card-img img,
    .row-cols-lg-5 .team-card-img img { width: 80px; height: 80px; }
    .team-card-body h4 { font-size: 13px; }
}

 </style>
@endpush

@section('contents')

@php
    // Team members - edit names, titles, roles and images here.
    // image: path inside the theme folder (public/welcome/images/team/...)
    $leader = [
        'name'   => 'Capt. Zamshed Ali',
        'suffix' => 'psc, BN (Retd.)',
        'role'   => 'Founder & CEO',
        'image'  => 'images/team/zamshed-ali-v3.webp',
        'bio'    => [
            'A naval officer with over three decades of service in the Bangladesh Navy, including hands-on experience in shipbuilding, dockyard operations, and marine engineering.',
            'His background combines operational understanding with technical execution, enabling accurate interpretation of user requirements and effective coordination with global OEMs and service providers.',
        ],
    ];

    $advisors = [
        ['name' => 'Brig. Gen. Abdus Subhan Chy', 'suffix' => '(Retd.)',              'role' => 'Advisor', 'image' => 'images/team/abdus-subhan-chy.jpg'],
        ['name' => 'Dr. Monarul Islam',           'suffix' => '',                     'role' => 'Advisor', 'image' => 'images/team/monarul-islam.jpg'],
        ['name' => 'Capt. Md Moyezuddin',         'suffix' => 'BN (Retd.)',           'role' => 'Advisor', 'image' => 'images/team/md-moyezuddin.jpg'],
        ['name' => 'Cdr. Imtiaz Jamil',           'suffix' => '(E), psc, BN (Retd.)', 'role' => 'Advisor', 'image' => 'images/team/imtiaz-jamil.jpg'],
    ];

    $members = [
        ['name' => 'Shahidullah Shohel',     'suffix' => '', 'role' => 'General Manager',      'image' => 'images/team/shahidullah-shohel.jpg'],
        ['name' => 'Md Montasir Mamun Rony', 'suffix' => '', 'role' => 'Manager (Operations)', 'image' => 'images/team/montasir-mamun-rony.jpg'],
        ['name' => 'Wahid Murad',            'suffix' => '', 'role' => 'IT Consultant',        'image' => 'images/team/wahid-murad.jpg'],
        ['name' => 'Md Munser Ali',          'suffix' => '', 'role' => 'IT Specialist',        'image' => 'images/team/munser-ali.jpg'],
        ['name' => 'Sm Wasak Rocky',         'suffix' => '', 'role' => 'HR & Admin',           'image' => 'images/team/wasak-rocky.jpg'],
    ];

    $groups = [
        ['title' => 'Advisory Board',  'subtitle' => 'Senior defense and maritime experts guiding our strategy', 'items' => $advisors, 'cols' => 'row-cols-lg-4'],
        ['title' => 'Management Team', 'subtitle' => 'The people driving day-to-day execution',                 'items' => $members,  'cols' => 'row-cols-lg-5'],
    ];
@endphp

<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;" @endif>
    <div class="breaOverly">
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
    </div>
</div>


<section class="team-section">
    <div class="container">

        <!-- Intro -->
        <div class="team-intro">
            <span class="team-eyebrow">Our People</span>
            <h2 class="team-heading">Meet the <span>MARINE Square</span> Team</h2>
            <p class="team-intro-text">
                {!! $page->short_description ?: 'A team of naval veterans, engineers and maritime professionals delivering disciplined execution, technical clarity and reliable support across Bangladesh\'s naval and maritime sector.' !!}
            </p>
        </div>

        <!-- Leader -->
        <div class="team-leader">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="team-leader-img">
                        <img src="{{asset(assetLink().'/'.$leader['image'])}}" alt="{{$leader['name']}}">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-leader-body">
                        <span class="role">{{$leader['role']}}</span>
                        <h3>{{$leader['name']}}</h3>
                        <div class="suffix">{{$leader['suffix']}}</div>
                        @foreach($leader['bio'] as $text)
                        <p style="text-align: justify;">{{$text}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Team groups -->
        @foreach($groups as $group)
        <div class="team-group">
            <div class="row g-3 g-md-4 row-cols-2 row-cols-md-3 {{$group['cols']}} justify-content-center">
                @foreach($group['items'] as $member)
                <div class="col">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="{{asset(assetLink().'/'.$member['image'])}}" alt="{{$member['name']}}" loading="lazy">
                        </div>
                        <div class="team-card-body">
                            <h4>{{$member['name']}}</h4>
                            @if($member['suffix'])
                            <div class="suffix">{{$member['suffix']}}</div>
                            @endif
                            <div class="role">{{$member['role']}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

        <!-- Extra content written from Admin > Pages > Description -->
        @if($page->description)
        <div class="team-page-content">
            {!! $page->description !!}
        </div>
        @endif

    </div>
</section>

@endsection

@push('js')

@endpush
