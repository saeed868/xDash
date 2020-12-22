<?php include("head.php") ?>
<?php include("header.php") ?>
<div id="workstation">
		<div id="workspace">
			<div class="workspace-wrap">
                <div class="sell-wrap">
                    <div class="sell-progress-step">
                        <ul>
                            <a href="#">
                                <li>
                                   <p class="progress-step-icon step-icon-active">1</p> 
                                   <p class="progress-step-txt">مقدار ارز</p>
                                </li>
                            </a>
                            <i class="fas fa-horizontal-rule"></i>
                            <a href="#">
                                <li>
                                   <p class="progress-step-icon">2</p> 
                                   <p class="progress-step-txt">تایید فاکتور</p>
                                </li>
                            </a>
                            <i class="fas fa-horizontal-rule"></i>
                            <a href="#">
                                <li>
                                   <p class="progress-step-icon">3</p> 
                                   <p class="progress-step-txt">افزودن TXiD</p>
                                </li>
                            </a>
                            <i class="fas fa-horizontal-rule"></i>
                            <a href="#">
                                <li>
                                   <p class="progress-step-icon">4</p> 
                                   <p class="progress-step-txt">تایید و پرداخت</p>
                                </li>
                            </a>
                        </ul>  
                        <div class="sell-progress-bar-wrap">
                            <div class="sell-progress-bar sell-progress-bar-1"></div>
                        </div>
                    </div>
                </div>
                
                <div id="sell-step-1">
                    <div class="sell-tutorial-wrap">
                        <h3>راهنمای فروش ارز دیجیتال به سایت</h3>
                        <p>
                            1. ابتدا نوع و مقدار ارز مورد نظر خود را برای فروش مشخص کنید
                            <br>
                            2. سپس میزان دریافتی شما بر حسب قیمت روز ارز مربوطه به شما نمایش داده میشود.
                            <br>
                            3. در صورت تایید شما به مرحله بعد می روید که فاکتور تراکنش شما صادر خواهد شد
                            <br>
                            4. پس از تایید فاکتور در مرحله بعد شما باید TxID مربوط به انتقال خود را در سایت وارد کنید
                            5. در انتها پس از Confirm تراکنش شما و همچنین تایید اپراتو سایت مبلغ مورد نظر به حساب شما واریز خواهد شد.
                        </p>
                    </div>
                    <div class="sell-options">
                        <div class="sell-options-title">
                            <h3>فروش به سایت</h3>
                        </div>
                        <div class="sell-input">
                            <h4>مقدار</h4>
                            <form id="sale-value">
                                <input type="text" name="coin-value" id="coin-value" placeholder="0.01">
                            </form>
                        </div>
                        <div class="sell-coin-select">
                            <form>
                                <select class="wide">
                                    <option value="1">Bitcoin / BTC</option>
                                    <option value="2">Ethereum / ETH</option>
                                    <option value="3" disabled="">Tether / USDT</option>
                                    <option value="4">Potato</option>
                                </select>
                            </form>
                        </div>
                        <div class="sale-details-wrap">
                            <div>
                                <span>قیمت دلار: </span>
                                <span>23,480 T</span>
                            </div>
                            <div>
                                <span>قیمت ارز: </span>
                                <span>11,340 $</span>
                            </div>
                            <div class="sell-output">
                                <span>مبلغی دریافتی شما: </span>
                                <span>230,480,000 T</span>
                            </div>
                        </div>
                        <div class="sell-confirm">
                            <input form="sale-value" type="submit" class="btn1" value="تایید تراکنش">
                        </div>
                    </div>
                </div>

                <div id="sell-step-2">
                    <div class="sell-invoice-accept">
                        <form action="">
                            <input form="sale-value" type="submit" class="btn1" value="تایید فاکتور">
                        </form>
                    </div>
                    <div class="sell-invoice-wrap">
                        <div class="sell-invoice">
                            <div class="sell-invoice-title">
                                <h3>صورت حساب</h3>
                            </div>
                            <div class="sell-invoice-info clearfix">
                                <div class="row clearfix">
                                    <div>
                                        <p class="invoice-info-title">صورت حساب برای:</p>
                                        <p>متین سازنده</p>
                                        <p>تهران - خیابان شریعنی - روبروی حسینیه ارشاد</p>
                                    </div>
                                    <div>
                                        <p class="invoice-info-title">پرداخت به:</p>
                                        <p>متین سازنده</p>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div>
                                        <p class="invoice-info-title">روش پرداخت:</p>
                                        <p>انتقال به حساب</p>
                                    </div>
                                    <div>
                                       <p class="invoice-info-title">تاریخ صورت حساب:</p>
                                       <p>1399/05/10 - 22:10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-invoice-table-wrap">
                                <div class="sell-invoice-table-title">
                                    <h3>اقلام صورت حساب</h3>
                                </div>
                                <div class="sell-invoice-table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td>توضیحات</td>
                                                <td>مقدار</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>خرید بیتکوین</td>
                                                <td>0.01 BTC</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>جمع کل:</td>
                                                <td>0.01 BTC</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="sell-invoice-payment">
                                    <p>میزان پرداختی به فروشنده</p>
                                    <p>256,000,000 تومان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sell-step-3">
                    <div class="site-wallet">
                        <h3>آدرس ولت سایت:</h3>
                        <span>
                        1BvBMSEYstWetqTFn5Au4m4GFg7xJaNVN2
                        </span>
                    </div>
                    <div class="txid-wrap">
                        <form action="" class="txid-form">
                            <label for="txid">TxID مربوط به تراکنش: </label>
                            <input type="text" name="txid" id="txid">
                            <input type="submit" name="txid" id="txid" class="btn1" value="ثبت تراکنش">
                        </form>
                    </div>
                </div>

			</div>
		</div>

<?php include("sidebar.php") ?>
<?php include("footer.php") ?>