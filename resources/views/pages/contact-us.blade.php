@extends('pages.template.layout') @section('customcss')
<link rel="stylesheet" href="https://unpkg.com/tippy.js@1.1.3/dist/tippy.css">
<style type="text/css">
.map-container{padding:3.2rem .8rem;position:relative;display:inline-block}.map-container img{width:100%}.map-container .point{cursor:pointer;position:absolute;width:0.9rem;height:0.9rem;background-color:orange;border-radius:50%;transition:.3s;will-change:transform,box-shadow;transform:translate(-50%,-50%);box-shadow:0 0 0 rgba(0,172,193,.4);animation:3s infinite pulse}.map-container .point:hover{animation:none;transform:translate(-50%,-50%) scale3D(1.35,1.35,1);box-shadow:0 3px 6px rgba(0,0,0,.16),0 3px 6px rgba(0,0,0,.23)}
.map-container .Hubli{top:48%;left:68%}
.map-container .Bengaluru{top:48%;left:69%}
.map-container .Mumbai{top:45%;left:68%}
.map-container .JammuKashmir{top:38%;left:69%}
.map-container .Hyderabad{top:46%;left:69%}
.map-container .Chennai{top:50%;left:70%}
.map-container .DelhiNCR    {top:42%;left:69%}
.map-container .UnitedStates{top:35%;left:15%}
.map-container .SingaporeAPAC{top:55%;left:80%}
.map-container .Dubai{top:48%;left:59%}
.map-container .india{ top:58%;left:68% } @keyframes pulse{0%{box-shadow:0 0 0 0 rgba(0,172,193,.5)}70%{box-shadow:0 0 0 25px rgba(0,172,193,0)}100%{box-shadow:0 0 0 0 rgba(0,172,193,0)}}
.button{--background:#1E2235;--color:#F6F8FF;--shadow:rgba(0, 9, 61, 0.24);--cannon-dark:#A6ACCD;--cannon-light:#F6F8FF;--cannon-shadow:rgba(13, 15, 24, 0.9);--confetti-1:#892AB8;--confetti-2:#EA4C89;--confetti-3:#FFFF04;--confetti-4:#4AF2FD;--z-before:-6;display:block;outline:0;cursor:pointer;position:relative;border:0;background:0 0;padding:9px 22px 9px 16px;line-height:26px;font-family:inherit;font-weight:600;font-size:14px;color:var(--color);-webkit-appearance:none;-webkit-tap-highlight-color:transparent;transition:transform var(--transform-duration, .4s);will-change:transform;transform-style:preserve-3d;transform:perspective(440px) rotateX(calc(var(--rx,0) * 1deg)) rotateY(calc(var(--ry,0) * 1deg)) translateZ(0)}.button:hover{--transform-duration:.16s}.button.success{--confetti-scale:0;--stroke-dashoffset:15}.button:before{content:"";position:absolute;left:0;top:0;right:0;bottom:0;border-radius:12px;transform:translateZ(calc(var(--z-before) * 1px));background:var(--background);box-shadow:0 4px 8px var(--shadow)}.button .icon,.button span{display:inline-block;vertical-align:top;position:relative;z-index:1}.button .icon{--z:2px;width:24px;height:14px;margin:8px 16px 0 0;transform:translate(calc(var(--icon-x,0) * 1px),calc(var(--icon-y,0) * 1px)) translateZ(2px)}.button .icon .confetti{position:absolute;left:17px;bottom:9px}.button .icon .confetti svg{width:18px;height:16px;display:block;stroke-width:1px;fill:none;stroke-linejoin:round;stroke-linecap:round}.button .icon .confetti svg *{transition:stroke-dashoffset .2s;stroke-dasharray:15 20;stroke-dashoffset:var(--stroke-dashoffset,0);stroke:var(--stroke-all,var(--stroke,var(--confetti-2)))}.button .icon .confetti svg :nth-child(2){--stroke:var(--confetti-3)}.button .icon .confetti svg :nth-child(3){--stroke:var(--confetti-1)}.button .icon .confetti .emitter{position:absolute;left:4px;bottom:4px;pointer-events:none}.button .icon .confetti .emitter div{width:4px;height:4px;margin:-2px 0 0 -2px;border-radius:1px;position:absolute;left:0;top:0;transform-style:preserve-3d;background:var(--confetti-all,var(--b,none))}.button .icon .confetti i{width:4px;height:4px;display:block;transform:scale(var(--confetti-scale,.5));position:absolute;transition:transform .25s;left:var(--left,-1px);top:var(--top,3px);border-radius:var(--border-radius,1px);background:var(--confetti-background,var(--confetti-3))}.button .icon .confetti i:nth-child(2){--left:9px;--top:-1px;--border-radius:2px;--confetti-background:var(--confetti-4)}.button .icon .confetti i:nth-child(3){--left:5px;--top:3px;--confetti-background:var(--confetti-1)}.button .icon .confetti i:nth-child(4){--left:10px;--top:14px;--confetti-background:var(--confetti-2)}.button .icon .confetti i:nth-child(5){--left:9px;--top:7px;--confetti-background:var(--confetti-4)}.button .icon .confetti i:nth-child(6){--left:6px;--top:8px;--border-radius:2px;--confetti-background:var(--confetti-2)}.button .icon .cannon{position:relative;width:24px;height:14px;transform:translate(0,3px) rotate(-45deg);filter:drop-shadow(-2px 2px 2px var(--cannon-shadow))}.button .icon .cannon:after,.button .icon .cannon:before{content:"";display:block;height:14px}.button .icon .cannon:before{background:linear-gradient(var(--cannon-dark),var(--cannon-light) 50%,var(--cannon-dark));width:100%;-webkit-clip-path:polygon(25px -1px,0 52%,25px 15px);clip-path:polygon(25px -1px,0 52%,25px 15px)}.button .icon .cannon:after{width:6px;position:absolute;right:-3px;top:0;border-radius:50%;box-shadow:inset 0 0 0 .5px var(--cannon-light);background:linear-gradient(90deg,var(--cannon-dark),var(--cannon-light))}.button.white{--background:#fff;--color:#1E2235;--border:#E1E6F9;--shadow:none;--cannon-dark:#103FC5;--cannon-light:#275EFE;--cannon-shadow:rgba(0, 9, 61, 0.2)}.button.white:before{box-shadow:inset 0 0 0 1px var(--border)}.button.grey{--background:#404660;--cannon-shadow:rgba(13, 15, 24, 0.2);--cannon-dark:#D1D6EE;--cannon-light:#FFFFFF}
</style>
@endsection 
@section('content')
<section>

    <div class="container">
        <div class="map-container">
          <img src="http://res.cloudinary.com/slzr/image/upload/v1500321012/world-map-1500_vvekl5.png">
          @foreach ($locations as $singlelocation)
          <a href="https://www.google.com/maps?q={{ $singlelocation['address'] }}" target="_blank">
            <div class="point {{ str_replace(array('&', '/', '-'), '', str_replace(' ','-', $singlelocation['city']))  }} tippy" title="<b>{{ $singlelocation['company'] }}</b><br>{{ $singlelocation['address'] }}"></div>
          </a>
          @endforeach
        </div>
    </div>
</section>

<!-- ====== Contact Section Start -->
<section class="relative z-10 overflow-hidden bg-white py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap lg:justify-between">
            <div class="w-full px-4 lg:w-1/2 xl:w-6/12" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <span class="text-primary mb-4 block text-base font-semibold">
                        Contact Us
                    </span>
                    <h2 class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        GET IN TOUCH WITH US
                    </h2>
                    <p class="text-body-color mb-9 text-base leading-relaxed">
                        Walk Into Our Office Or Schedule A Visit <br />
                        We Are Open Monday to Saturday <br />
                        From 09:00 to 19:00 <br />
                    </p>
                    <div class="mb-8 flex w-full max-w-[600px]">
                        <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path
                                    d="M21.8182 24H16.5584C15.3896 24 14.4156 23.0256 14.4156 21.8563V17.5688C14.4156 17.1401 14.0649 16.7893 13.6364 16.7893H10.4026C9.97403 16.7893 9.62338 17.1401 9.62338 17.5688V21.8173C9.62338 22.9866 8.64935 23.961 7.48052 23.961H2.14286C0.974026 23.961 0 22.9866 0 21.8173V8.21437C0 7.62972 0.311688 7.08404 0.818182 6.77223L11.1039 0.263094C11.6494 -0.0876979 12.3896 -0.0876979 12.9351 0.263094L23.2208 6.77223C23.7273 7.08404 24 7.62972 24 8.21437V21.7783C24 23.0256 23.026 24 21.8182 24ZM10.3636 15.4251H13.5974C14.7662 15.4251 15.7403 16.3995 15.7403 17.5688V21.8173C15.7403 22.246 16.0909 22.5968 16.5195 22.5968H21.8182C22.2468 22.5968 22.5974 22.246 22.5974 21.8173V8.25335C22.5974 8.13642 22.5195 8.01949 22.4416 7.94153L12.1948 1.4324C12.0779 1.35445 11.9221 1.35445 11.8442 1.4324L1.55844 7.94153C1.44156 8.01949 1.4026 8.13642 1.4026 8.25335V21.8563C1.4026 22.285 1.75325 22.6358 2.18182 22.6358H7.48052C7.90909 22.6358 8.25974 22.285 8.25974 21.8563V17.5688C8.22078 16.3995 9.19481 15.4251 10.3636 15.4251Z"
                                />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-dark mb-1 text-xl font-bold">Our Location</h4>
                            <p class="text-body-color text-base">
                                No. 357, 2nd Floor, San Diego, 6th Main Rd, 1st Block Koramangala, Koramangala Extension, Bengaluru, Karnataka 560034
                            </p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-[600px]">
                        <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="24" height="26" viewBox="0 0 24 26" class="fill-current">
                                <path d="M22.6149 15.1386C22.5307 14.1704 21.7308 13.4968 20.7626 13.4968H2.82869C1.86042 13.4968 1.10265 14.2125 0.97636 15.1386L0.092295 23.9793C0.0501967 24.4845 0.21859 25.0317 0.555377 25.4106C0.892163 25.7895 1.39734 26 1.94462 26H21.6887C22.1939 26 22.6991 25.7895 23.078 25.4106C23.4148 25.0317 23.5832 24.5266 23.5411 23.9793L22.6149 15.1386ZM21.9413 24.4424C21.8992 24.4845 21.815 24.5687 21.6466 24.5687H1.94462C1.81833 24.5687 1.69203 24.4845 1.64993 24.4424C1.60783 24.4003 1.52364 24.3161 1.56574 24.1477L2.4498 15.2649C2.4498 15.0544 2.61819 14.9281 2.82869 14.9281H20.8047C21.0152 14.9281 21.1415 15.0544 21.1835 15.2649L22.0676 24.1477C22.0255 24.274 21.9834 24.4003 21.9413 24.4424Z" />
                                <path d="M11.7965 16.7805C10.1547 16.7805 8.84961 18.0855 8.84961 19.7273C8.84961 21.3692 10.1547 22.6742 11.7965 22.6742C13.4383 22.6742 14.7434 21.3692 14.7434 19.7273C14.7434 18.0855 13.4383 16.7805 11.7965 16.7805ZM11.7965 21.2008C10.9966 21.2008 10.3231 20.5272 10.3231 19.7273C10.3231 18.9275 10.9966 18.2539 11.7965 18.2539C12.5964 18.2539 13.2699 18.9275 13.2699 19.7273C13.2699 20.5272 12.5964 21.2008 11.7965 21.2008Z"                                />
                                <path d="M1.10265 7.85562C1.18684 9.70794 2.82868 10.4657 3.67064 10.4657H6.61752C6.65962 10.4657 6.65962 10.4657 6.65962 10.4657C7.92257 10.3815 9.18552 9.53955 9.18552 7.85562V6.84526C10.5748 6.84526 13.7742 6.84526 15.1635 6.84526V7.85562C15.1635 9.53955 16.4264 10.3815 17.6894 10.4657H17.7315H20.6363C21.4782 10.4657 23.1201 9.70794 23.2043 7.85562C23.2043 7.72932 23.2043 7.26624 23.2043 6.84526C23.2043 6.50847 23.2043 6.21378 23.2043 6.17169C23.2043 6.12959 23.2043 6.08749 23.2043 6.08749C23.078 4.90874 22.657 3.94047 21.9413 3.18271L21.8992 3.14061C20.8468 2.17235 19.5838 1.62507 18.6155 1.28828C15.795 0.193726 12.2587 0.193726 12.0903 0.193726C9.6065 0.235824 8.00677 0.446315 5.60716 1.28828C4.681 1.58297 3.41805 2.13025 2.36559 3.09851L2.3235 3.14061C1.60782 3.89838 1.18684 4.86664 1.06055 6.04539C1.06055 6.08749 1.06055 6.12959 1.06055 6.12959C1.06055 6.21378 1.06055 6.46637 1.06055 6.80316C1.10265 7.18204 1.10265 7.68722 1.10265 7.85562ZM3.37595 4.15097C4.21792 3.3932 5.27038 2.93012 6.15444 2.59333C8.34355 1.79346 9.7749 1.62507 12.1745 1.58297C12.3429 1.58297 15.6266 1.62507 18.1525 2.59333C19.0365 2.93012 20.089 3.3511 20.931 4.15097C21.394 4.65615 21.6887 5.32972 21.7729 6.12959C21.7729 6.25588 21.7729 6.46637 21.7729 6.80316C21.7729 7.22414 21.7729 7.68722 21.7729 7.81352C21.7308 8.78178 20.8047 8.99227 20.6784 8.99227H17.7736C17.3526 8.95017 16.679 8.78178 16.679 7.85562V6.12959C16.679 5.7928 16.4685 5.54021 16.1738 5.41392C15.9213 5.32972 8.55405 5.32972 8.30146 5.41392C8.00677 5.49811 7.79628 5.7928 7.79628 6.12959V7.85562C7.79628 8.78178 7.1227 8.95017 6.70172 8.99227H3.79694C3.67064 8.99227 2.74448 8.78178 2.70238 7.81352C2.70238 7.68722 2.70238 7.22414 2.70238 6.80316C2.70238 6.46637 2.70238 6.29798 2.70238 6.17169C2.61818 5.32972 2.91287 4.65615 3.37595 4.15097Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-dark mb-1 text-xl font-bold">Phone Number</h4>
                            <p class="text-body-color text-base">+91 80 4150 2234</p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div class="bg-primary text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-opacity-5 sm:h-[70px] sm:max-w-[70px]">
                            <svg width="28" height="19" viewBox="0 0 28 19" class="fill-current">
                                <path d="M25.3636 0H2.63636C1.18182 0 0 1.16785 0 2.6052V16.3948C0 17.8322 1.18182 19 2.63636 19H25.3636C26.8182 19 28 17.8322 28 16.3948V2.6052C28 1.16785 26.8182 0 25.3636 0ZM25.3636 1.5721C25.5909 1.5721 25.7727 1.61702 25.9545 1.75177L14.6364 8.53428C14.2273 8.75886 13.7727 8.75886 13.3636 8.53428L2.04545 1.75177C2.22727 1.66194 2.40909 1.5721 2.63636 1.5721H25.3636ZM25.3636 17.383H2.63636C2.09091 17.383 1.59091 16.9338 1.59091 16.3499V3.32388L12.5 9.8818C12.9545 10.1513 13.4545 10.2861 13.9545 10.2861C14.4545 10.2861 14.9545 10.1513 15.4091 9.8818L26.3182 3.32388V16.3499C26.4091 16.9338 25.9091 17.383 25.3636 17.383Z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="text-dark mb-1 text-xl font-bold">Email Address</h4>
                            <p class="text-body-color text-base">info@fidelisgroup.in</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <div class="relative rounded-lg bg-white p-8 shadow-lg sm:p-12">
                    <form>
                        <div class="mb-6">
                            <input type="text" placeholder="Your Name" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" required="true" />
                        </div>
                        <div class="mb-6">
                            <input type="email" placeholder="Your Email" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" required="true" />
                        </div>
                        <div class="mb-6">
                            <input type="text" placeholder="Your Phone" class="text-body-color border-[f0f0f0] focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none" required="true" />
                        </div>
                        <div class="mb-6">
                            <textarea
                                rows="6"
                                placeholder="Your Message"
                                class="text-body-color border-[f0f0f0] focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none focus-visible:shadow-none"
                                required="true"
                            ></textarea>
                        </div>
                        <div>
                            <button class="button grey bg-orange-500 bg-primary border-primary w-full rounded border p-3 text-white transition hover:bg-opacity-90">
                                <div class="icon">
                                    <div class="cannon"></div>
                                    <div class="confetti">
                                        <svg viewBox="0 0 18 16">
                                            <polyline points="1 10 4 7 4 5 6 1" />
                                            <path d="M4,13 C5.33333333,9 7,7 9,7 C11,7 12.3340042,6 13.0020125,4" />
                                            <path d="M6,15 C7.83362334,13.6666667 9.83362334,12.6666667 12,12 C14.1663767,11.3333333 15.8330433,9.66666667 17,7" />
                                        </svg>
                                        <i></i><i></i><i></i><i></i><i></i><i></i>
                                        <div class="emitter"></div>
                                    </div>
                                </div>
                                <span>Send Message</span>
                            </button>

                        </div>
                    </form>
                    <div>
                        <span class="absolute -top-10 -right-9 z-[-1]">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#f97316" />
                            </svg>
                        </span>
                        <span class="absolute -right-10 top-[90px] z-[-1]">
                            <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#f97316" />
                                <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#f97316" />
                                <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#f97316" />
                                <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#f97316" />
                                <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#f97316" />
                                <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#f97316" />
                                <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#f97316" />
                                <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#f97316" />
                                <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#f97316" />
                                <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#f97316" />
                                <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#f97316" />
                                <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#f97316" />
                                <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#f97316" />
                                <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#f97316" />
                                <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#f97316" />
                                <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#f97316" />
                                <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#f97316" />
                                <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#f97316" />
                                <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#f97316" />
                                <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#f97316" />
                                <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#f97316" />
                                <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#f97316" />
                                <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#f97316" />
                                <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#f97316" />
                                <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#f97316" />
                                <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#f97316" />
                                <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#f97316" />
                                <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#f97316" />
                                <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#f97316" />
                                <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#f97316" />
                            </svg>
                        </span>
                        <span class="absolute -left-7 -bottom-7 z-[-1]">
                            <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#f97316" />
                                <circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#f97316" />
                                <circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#f97316" />
                                <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#f97316" />
                                <circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#f97316" />
                                <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#f97316" />
                                <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#f97316" />
                                <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#f97316" />
                                <circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#f97316" />
                                <circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#f97316" />
                                <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#f97316" />
                                <circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#f97316" />
                                <circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#f97316" />
                                <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#f97316" />
                                <circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#f97316" />
                                <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#f97316" />
                                <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#f97316" />
                                <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#f97316" />
                                <circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#f97316" />
                                <circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#f97316" />
                                <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#f97316" />
                                <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#f97316" />
                                <circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#f97316" />
                                <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#f97316" />
                                <circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#f97316" />
                                <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#f97316" />
                                <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#f97316" />
                                <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#f97316" />
                                <circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#f97316" />
                                <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#f97316" />
                                <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#f97316" />
                                <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#f97316" />
                                <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#f97316" />
                                <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#f97316" />
                                <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#f97316" />
                                <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#f97316" />
                                <circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#f97316" />
                                <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#f97316" />
                                <circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#f97316" />
                                <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#f97316" />
                                <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#f97316" />
                                <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#f97316" />
                                <circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#f97316" />
                                <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#f97316" />
                                <circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#f97316" />
                                <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#f97316" />
                                <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#f97316" />
                                <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#f97316" />
                                <circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#f97316" />
                                <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#f97316" />
                                <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#f97316" />
                                <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#f97316" />
                                <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#f97316" />
                                <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#f97316" />
                                <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#f97316" />
                                <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#f97316" />
                                <circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#f97316" />
                                <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#f97316" />
                                <circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#f97316" />
                                <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#f97316" />
                                <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#f97316" />
                                <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#f97316" />
                                <circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#f97316" />
                                <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#f97316" />
                                <circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#f97316" />
                                <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#f97316" />
                                <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#f97316" />
                                <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#f97316" />
                                <circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#f97316" />
                                <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#f97316" />
                                <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#f97316" />
                                <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#f97316" />
                                <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#f97316" />
                                <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#f97316" />
                                <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#f97316" />
                                <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#f97316" />
                                <circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#f97316" />
                                <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#f97316" />
                                <circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#f97316" />
                                <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#f97316" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Contact Section End -->

<section>
    <div class="container mx-auto">
        <h2 class="text-xl font-bold sm:text-2xl">Customer Reviews</h2>

        <div class="mt-4 flex items-center">
            <p class="text-3xl font-medium">
                4.0
                <span class="sr-only"> Average review score </span>
            </p>

            <div class="ml-4">
                <div class="-ml-1 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        />
                    </svg>
                </div>

                <p class="mt-0.5 text-xs text-gray-500">Based on 200 reviews</p>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-x-16 gap-y-12 lg:grid-cols-2">
            <blockquote>
                <header class="sm:flex sm:items-center">
                    <div class="-ml-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>

                    <p class="mt-2 font-medium sm:ml-4 sm:mt-0">
                        The best thing money can buy!
                    </p>
                </header>

                <p class="mt-2 text-gray-700">
                    Fidelis has been a wonderful company starting out. Several things worth pointing out are within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the management team to easily help everyone get acquainted with the overall job feel. My fellow team members and HR have been wonderful. Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring process is easily streamlined. All expectations were made clear throughout the entire process. Looking forward to many more years with this company
                </p>

                <footer class="mt-4">
                    <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                </footer>
            </blockquote>

            <blockquote>
                <header class="sm:flex sm:items-center">
                    <div class="-ml-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>

                    <p class="mt-2 font-medium sm:ml-4 sm:mt-0">
                        The best thing money can buy!
                    </p>
                </header>

                <p class="mt-2 text-gray-700">
                    Close to nature, work culture is optimal for someone like me who came from Pune. People even laugh at my Hindi jokes also.
                    <br>
                    Supportive employer, creative environment and funny people around you.
                </p>

                <footer class="mt-4">
                    <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                </footer>
            </blockquote>

            <blockquote>
                <header class="sm:flex sm:items-center">
                    <div class="-ml-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>

                    <p class="mt-2 font-medium sm:ml-4 sm:mt-0">
                        The best thing money can buy!
                    </p>
                </header>

                <p class="mt-2 text-gray-700">
                    I must say you will get alot of opportunities to grow yourself here. Fidelis is a great organisation to work.
                    A dedicated team of HR personnel to assist in recruitment to IT,Non-IT, Retail and other Sector.
                    Awesome/Supportive Management and on Time salary. :)
                    Good Work Life Balance and No work Pressure.happy to work with fidelis
                </p>

                <footer class="mt-4">
                    <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                </footer>
            </blockquote>

            <blockquote>
                <header class="sm:flex sm:items-center">
                    <div class="-ml-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-200" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>

                    <p class="mt-2 font-medium sm:ml-4 sm:mt-0">
                        The best thing money can buy!
                    </p>
                </header>

                <p class="mt-2 text-gray-700">
                    I think working at Fidelis Technology Services is worth for me, A Wonderful experience was all the help i got from the management. Encouraging the employees to upscale the skills which will be beneficial for one's individual for their career growth.
                </p>

                <footer class="mt-4">
                    <p class="text-xs text-gray-500">John Doe - 12th January, 2024</p>
                </footer>
            </blockquote>
        </div>
    </div>
</section>
@endsection @section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/tippy.js@1.1.3/dist/tippy.min.js"></script>


<script>
    $(document).ready(function(){
        tippy('.tippy', {
        theme: 'light',
        size: 'big',
        arrow: true
        })
    });
</script>
@endsection