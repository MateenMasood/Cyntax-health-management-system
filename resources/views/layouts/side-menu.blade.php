			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{ url('/' . $page='index') }}">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-label">Dashboard</li>
						<li class="nav-item show">
							<a class="nav-link" href="{{ url('/') }}"><i class="fe fe-airplay"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-label">Research</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/' . $page='widgets') }}"><i class="fe fe-database"></i><span class="sidemenu-label">Widgets</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-mail"></i><span class="sidemenu-label">Mail</span><span class="badge badge-primary side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='mail') }}">Mail-Inbox</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='viewmail') }}">View-Mail</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-box"></i><span class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chat') }}">Chat</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='cards') }}">Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='calendar') }}">Calendar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='contacts') }}">Contacts</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/' . $page='icons') }}"><i class="fe fe-award"></i><span class="sidemenu-label">Icons</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-map-pin"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='map-mapel') }}">Mapel Maps</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='map-vector') }}">Vector Maps</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-layout"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='table-basic') }}">Basic Tables</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='table-data') }}">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-label">Mady’Skincare</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-layers"></i><span class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='alerts') }}">Alerts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='avatar') }}">Avatar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='breadcrumbs') }}">Breadcrumbs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='buttons') }}">Buttons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='badge') }}">Badge</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='dropdown') }}">Dropdown</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='thumbnails') }}">Thumbnails</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='list-group') }}">List Group</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='navigation') }}">Navigation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='pagination') }}">Pagination</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='popover') }}">Popover</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='progress') }}">Progress</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='spinners') }}">Spinners</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='media-object') }}">Media Object</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='typography') }}">Typography</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='tooltip') }}">Tooltip</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='toast') }}">Toast</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='tags') }}">Tags</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-package"></i><span class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='accordion') }}">Accordion</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='carousel') }}">Carousel</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='collapse') }}">Collapse</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='modals') }}">Modals</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='timeline') }}">Timeline</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='darggablecards') }}">Darggable-Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='sweet-alert') }}">Sweet Alert</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='rating') }}">Ratings</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='counters') }}">Counters</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='search') }}">Search</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='userlist') }}">Userlist</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='blog') }}">Blog</a>
								</li>
							</ul>
						</li>
						<li class="nav-label">Consultancies </li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-file"></i><span class="sidemenu-label">Forms</span><span class="badge badge-info side-badge">6</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-elements') }}">Form Elements</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-advanced') }}">Advanced Forms</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-layouts') }}">Form Layouts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-validation') }}">Form Validation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-wizards') }}">Form Wizards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='form-editor') }}">WYSIWYG Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-bar-chart-2"></i><span class="sidemenu-label">Charts</span><span class="badge badge-danger side-badge">5</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chart-morris') }}">Morris Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chart-flot') }}">Flot Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chart-chartjs') }}">ChartJS</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chart-spark-peity') }}">Sparkline & Peity</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='chart-echart') }}">Echart</a>
								</li>
							</ul>
						</li>
						<li class="nav-label">CRO</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-compass"></i><span class="sidemenu-label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='profile') }}">Profile</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='invoice') }}">Invoice</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='pricing') }}">Pricing</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='gallery') }}">Gallery</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='faq') }}">Faqs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='empty') }}">Empty Page</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-shopping-cart"></i><span class="sidemenu-label">E-Commerce</span><span class="badge badge-success side-badge">3</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='products') }}">Products</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='product-details') }}">Product-Details</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='product-cart') }}">Cart</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-codepen"></i><span class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='background') }}">Background</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='border') }}">Border</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='display') }}">Display</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='flex') }}">Flex</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='height') }}">Height</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='margin') }}">Margin</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='padding') }}">Padding</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='position') }}">Position</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='width') }}">Width</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='extras') }}">Extras</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="fe fe-aperture"></i><span class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='signin') }}">Sign In</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='signup') }}">Sign Up</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='forgot') }}">Forgot Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='reset') }}">Reset Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='lockscreen') }}">Lockscreen</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='underconstruction') }}">UnderConstruction</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='404') }}">404 Error</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ url('/' . $page='500') }}">500 Error</a>
								</li>
							</ul>
						</li>
						<li class="nav-label">Distribution</li>
						<li class="nav-label">Community Awareness Projects </li>
						<li class="nav-label">Settings </li>
						<li class="mt-3">
							<a class="btn ripple btn-success  btn-block text-white text-icon"><i class="fe fe-rotate-cw mr-1"></i>Upgrade to pro</a>
							<a class="btn ripple btn-success  btn-block text-white iconbtn"><i class="fe fe-rotate-cw mr-1"></i></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->
