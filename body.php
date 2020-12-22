<?php include_once("head.php"); ?>
<body>
<div id="container">
    <div class="dash-layout">
        <!-- Start Header -->
        <div id="header">
            <div id="top-haeder">
                <div class="top-haeder-info">
                    <div class="user-info">
                        <div class="user-avatar">
                            <a href="#"><img alt="User Avatar" src="src/img/avatar.jpg"></a>
                        </div>
                        <div class="username-badge">
                            <a href="#">سیاوش انزلی مجرد</a>
                            <i class="fas fa-user"></i>
						</div>
						<div class="dash-notifications have_notif">
							<div class="notif-close-overlay"></div>
							<div id="notification">
								<i class="far fa-bell"></i>
							</div>
							<div class="dash-notification-box">
								<div class="notif-box-title">
									<h5>
										<i class="far fa-bell"></i>
										اعلانات
									</h5>
									<div class="notif-box-close">
										<i class="far fa-times"></i>
									</div>
								</div>
								<div class="notif-item">
									<div class="notif-msg">
										<p>
										تراکنش فروش ارز دیجیتال به شناسه 12445 انجام شد.
										</p>
									</div>
									<div class="notif-time">
										<p>08:55</p>
										<p>سه شنبه</p>
									</div>
								</div>
								<div class="notif-item">
									<div class="notif-msg">
										<p>
										تراکنش خرید ارز دیجیتال به شناسه 10550 انجام شد
										</p>
									</div>
									<div class="notif-time">
										<p>12:25</p>
										<p>چهار شنبه</p>
									</div>
								</div>
								<div class="notif-item">
									<div class="notif-msg">
										<p>
										متاسفانه سفارش خرید ارز دیجیتال شما به شناسه 10345 نا موفق بود.
										</p>
									</div>
									<div class="notif-time">
										<p>11:55</p>
										<p>جمعه</p>
									</div>
								</div>
								<div class="notif-footer">
									<a href="#">مشاهده تمامی پیام ها</a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="page-title">
                        <div class="page-title-logo">
                            <a href="#"><img src="src/img/logo-black.png"></a>
                        </div>
                    </div>
                    <div id="sidebar-toggle" class="page-options sidebar-toggle">
                        <i class="far fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Start Sidebar -->
        <div id="sidebar" class="sidebar">
			<div class="sidebar-wrap">
				<!-- <div class="page-title-logo">
					<a href="#"><img src="src/img/logo-black.png"></a>
                </div> -->
				<ul class="sidebar-nav-ul">
					<li class="active">
						<a href="#">
							<i class="far fa-home"></i>
							<p>داشبورد</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-users"></i>
							<p>کاربران</p>
						</a>
					</li>	
					<li>
						<a href="#">
							<i class="fab fa-btc"></i>
							<p>خرید ارز دیجیتال</p>
						</a>
					</li>
					<li class="dropdown">
						<a href="#">
							<i class="far fa-donate"></i>
							<p>فروش ارز دیجیتال</p>
							<i class="far fa-chevron-left"></i>
						</a>
						<div class="subnav">
							<ul>
								<li>
									<a href="#">
										<p>تاریخچه</p>
									</a>
									<a href="#">
										<p>سفارش</p>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="#">
							<i class="far fa-balance-scale"></i>
							<p>اکسچنج ارز دیجیتال</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-cogs"></i>
							<p>تنظیمات سایت</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-question"></i>
							<p>تیکت ها</p>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="far fa-portal-exit"></i>
							<p>خروج</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="sidebar-footer">
				<p>کریپتاینر</p>
				<p>بزرگترین سایت خرید و فروش ارز های دیجیتال</p>
				<a href="#">قوانین و مقررات</a>
			</div>
		</div>
        <div class="sidebar-overlay"></div>
        <!-- end Sidebar  -->
    </div>
    <!-- Workstation Start -->
    <div id="workstation">
		<div id="workspace">
			<div class="workspace-wrap">
				<div class="dashboard-crypto-price">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 crypto-price-item">
							<div class="box-row">
								<div class="crypto-price-info">
									<div>
										<p class="en-lang">BTC</p>
										<span>Bitcoin</span>
									</div>
									<div>
										<p class="en-lang"><i class="far fa-chart-line"></i> +70.43$</p>
									</div>
								</div>
								<div class="crypto-price-chart">
									<canvas id="btc-chart"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 crypto-price-item">
							<div class="box-row">
								<div class="crypto-price-info">
									<div>
										<p>ETH</p>
										<span>Etherium</span>
									</div>
									<div><i class="far fa-chart-line-down"></i>  +70.43$</div>
								</div>
								<div class="crypto-price-chart">
									<canvas id="eth-chart"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 crypto-price-item">
							<div class="box-row">
								<div class="crypto-price-info">
									<div>
										<p>BTC</p>
										<span>Bitcoin</span>
									</div>
									<div>
										<svg class="dashboard__trend-icon" width="24" height="24">
										<use xlink:href="/htmleasydev/styles/img/symbol.svg#dashboards__trending-up">
											<symbol viewBox="0 0 24 24" id="dashboards__trending-up" xmlns="http://www.w3.org/2000/svg"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z"></path></symbol>
										</use>
									  </svg>
									  <p>+ 70.43$</p>
									</div>
								</div>
								<div class="crypto-price-chart">
									<canvas id="btc-chart2"></canvas>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 crypto-price-item">
							<div class="box-row">
								<div class="crypto-price-info">
									<div>
										<p>ETH</p>
										<span>Etherium</span>
									</div>
									<div><i class="far fa-analytics"></i> + 70.43$</div>
								</div>
								<div class="crypto-price-chart">
									<canvas id="eth-chart2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- End Workstation -->
</div>

<script>
	// Sidebar Event Listener
	document.querySelector("#sidebar-toggle").addEventListener("click" , sideBarOpener);

	// Notification box Event Listner 
	document.querySelector("#notification").addEventListener("click" , notif_box_opener);
	document.querySelector(".notif-close-overlay").addEventListener("click" , notif_box_opener);
	document.querySelector(".notif-box-close").addEventListener("click" , notif_box_opener);
</script>
<!-- FancyBox JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="assets/FancyBox/jquery.fancybox.min.js"></script>

<!-- Smooth Scrollbar JS -->
<script src="assets/smooth-scrollbar/dist/smooth-scrollbar.js"></script>
<script>
	var Scrollbar = window.Scrollbar;
	Scrollbar.init(document.querySelector('#sidebar'),[]);
</script>


<script type="text/javascript" src="assets/js/dashchart.js"></script>
</body>
</html>