<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{asset('/')}}admin/assets/images/logo-dark.png" height="22" class="logo-light-mode" alt="">
                <img src="{{asset('/')}}admin/assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                <span class="sidebar-colored">
                                <img src="{{asset('/')}}admin/assets/images/logo-light.png" height="22" alt="">
                            </span>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li><a href="index.html"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-browser me-2"></i>Layouts <span class="badge bg-danger rounded-pill ms-2">New</span></a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="index-dark.html">Dark Dashboard</a></li>
                        <li><a href="index-rtl.html">RTL Dashboard</a></li>
                        <li><a href="index-rtl-dark.html">Dark RTL Dashboard</a></li>
                        <li><a href="index-sidebar-dark.html">Dark Sidebar</a></li>
                        <li><a href="index-sidebar-colored.html">Colored Sidebar</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><i class="uil uil-stethoscope me-2 d-inline-block"></i>Appointment</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-user me-2 d-inline-block"></i>Doctors</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('doctor-department.create')}}">Doctors Add Department</a></li>
                        <li><a href="{{route('doctor-department.index')}}">Doctors Departments</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Add Doctor</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="patients.html">All Patients</a></li>
                        <li><a href="add-patient.html">Add Patients</a></li>
                        <li><a href="patient-profile.html">Profile</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-apps me-2 d-inline-block"></i>Apps</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="chat.html">Chat</a></li>
                        <li><a href="email.html">Email</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-shopping-cart me-2 d-inline-block"></i>Pharmacy</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="product-detail.html">Shop Detail</a></li>
                        <li><a href="shopcart.html">Shopcart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-flip-h me-2 d-inline-block"></i>Blogs</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="blogs.html">Blogs</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-file me-2 d-inline-block"></i>Pages</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="review.html">Reviews</a></li>
                        <li><a href="invoice-list.html">Invoice List</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="terms.html">Terms & Policy</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="blank-page.html">Blank Page</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-envelope-open me-2 d-inline-block"></i>Email Template </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="email-confirmation.html">Confirmation</a></li>
                        <li><a href="email-password-reset.html">Reset Password</a></li>
                        <li><a href="email-alert.html">Alert</a></li>
                        <li><a href="email-invoice.html">Invoice</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-sign-in-alt me-2 d-inline-block"></i>Authentication</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="lock-screen.html">Lock Screen</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-file-info-alt me-2 d-inline-block"></i>UI Components </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="ui-button.html">Buttons</a></li>
                        <li><a href="ui-badges.html">Badges</a></li>
                        <li><a href="ui-alert.html">Alert</a></li>
                        <li><a href="ui-dropdown.html">Dropdowns</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-background.html">Background</a></li>
                        <li><a href="ui-text.html">Text Color</a></li>
                        <li><a href="ui-tooltip-popover.html">Tooltips & Popovers</a></li>
                        <li><a href="ui-shadow.html">Shadows</a></li>
                        <li><a href="ui-border.html">Border</a></li>
                        <li><a href="ui-form.html">Form Elements</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-avatar.html">Avatars</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-icons.html">Icons</a></li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-postcard me-2 d-inline-block"></i>Miscellaneous </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="comingsoon.html">Comingsoon</a></li>
                        <li><a href="maintenance.html">Maintenance</a></li>
                        <li><a href="error.html">404 !</a></li>
                        <li><a href="thankyou.html">Thank you...!</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="https://shreethemes.in/doctris/layouts/landing/index-two.html" target="_blank"><i class="uil uil-window me-2 d-inline-block"></i>Landing page</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- Sidebar Footer -->
    <ul class="sidebar-footer list-unstyled mb-0">
        <li class="list-inline-item mb-0 ms-1">
            <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                <i class="uil uil-comment"></i>
            </a>
        </li>
    </ul>
    <!-- Sidebar Footer -->
</nav>
