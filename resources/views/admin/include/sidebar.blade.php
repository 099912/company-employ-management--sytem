<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('admin.view')}}">
            <img src="{{asset('vendors/images/deskapp-logo.svgc')}}" alt="" class="dark-logo">
            <img src="{{asset('vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                    <li>
                        <a href="{{route('admin.view')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                        </a>
                    </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Company</span>
                    </a>

                    <ul class="submenu">
                        <li><a href="{{route('company.create')}}">Add Company</a></li>
                        <li><a href="{{route('company.show')}}">View Company</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Employe</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('employ.create')}}">Add Employe</a></li>
                        <li><a href="{{route('employ.show')}}">View Employe</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Blog Details</span>
                    </a>
                </li> --}}
                {{-- <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-timeline.html">Timeline</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-list-group.html">List group</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                        <li><a href="foundation.html">Foundation Icons</a></li>
                        <li><a href="ionicons.html">Ionicons Icons</a></li>
                        <li><a href="themify.html">Themify Icons</a></li>
                        <li><a href="custom-icon.html">Custom Icons</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">Highchart</a></li>
                        <li><a href="knob-chart.html">jQuery Knob</a></li>
                        <li><a href="jvectormap.html">jvectormap</a></li>
                        <li><a href="apexcharts.html">Apexcharts</a></li>
                    </ul>
                </li>--}}

            </ul>
        </div>
    </div>
</div>
