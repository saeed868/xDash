<?php include("head.php") ?>
<?php include("header.php") ?>
<div id="workstation">
		<div id="workspace">
            <div id="admin-settings-wrap">
                <div class="admin-settings-right">
                    <h3><i class="fad fa-cogs"></i> تنظیمات</h3>
                    <div class="admin-settings-nav">
                        <!-- <i class="settigns-bg fad fa-cogs"></i> -->
                        <ul>
                            <li class="active"><a href="#">تنظیمات سایت</a></li>
                            <li><a href="#">تنظیمات کاربران</a></li>
                            <li><a href="#">تنطیمات محلی</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="admin-settings-left">
                    <div class="admin-settings-form">
                        <form>
                            <label>پیغام تایید کاربران:</label>
                            <input type="text" name="" id="" value="">

                            <label>پیغام رد کاربران:</label>
                            <input type="text" name="" id="" value="">

                            <label>پیغام نیاز به تایید کاربران:</label>
                            <input type="text" name="" id="" value="">

                            <div class="dollar-toggle-switch-wrap clearfix">
                                <p>وارد کردن دستی قیمت دلار</p>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label> 
                            </div>

                            <label>قیمت دلار:</label>
                            <input type="text" name="" id="" value="">

                            <label>ولت BTC:</label>
                            <input type="text" name="" id="" value="">

                            <label>ولت USDT:</label>
                            <input type="text" name="" id="" value="">
                        </form>
                    </div>
                </div>
            </div>
		</div>
<?php include("sidebar.php") ?>
<?php include("footer.php") ?>