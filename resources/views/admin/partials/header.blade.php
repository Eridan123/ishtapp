<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a href="{{route('admin.index')}}">
                    <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="logo-default max-h-40px" />
                    <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="logo-sticky max-h-40px" />
                </a>
            </div>
            <!--end::Header Logo-->
            @include('admin.partials.nav')
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline px-2">{{auth()->user()->getFullName()}}</span>
                    </div>
                </div>
                <!--end::Toggle-->
            </div>
            <!--end::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-hover-transparent-white btn-lg mr-1" id="kt_quick_panel_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M7.62302337,5.30262097 C8.08508802,5.000107 8.70490146,5.12944838 9.00741543,5.59151303 C9.3099294,6.05357769 9.18058801,6.67339112 8.71852336,6.97590509 C7.03468892,8.07831239 6,9.95030239 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,9.99549229 17.0108275,8.15969002 15.3875704,7.04698597 C14.9320347,6.73472706 14.8158858,6.11230651 15.1281448,5.65677076 C15.4404037,5.20123501 16.0628242,5.08508618 16.51836,5.39734508 C18.6800181,6.87911023 20,9.32886071 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,9.26852332 5.38056879,6.77075716 7.62302337,5.30262097 Z" fill="#000000" fill-rule="nonzero"/>
                                <rect fill="#000000" opacity="0.3" x="11" y="3" width="2" height="10" rx="1"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </div>
            </div>
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
