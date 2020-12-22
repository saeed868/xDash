<?php include("head.php") ?>
<?php include("header.php") ?>
<div id="workstation">
		<div id="workspace">
			<div class="workspace-wrap">

                <div class="user-edit-wrap">

                    <div class="user-right-box dash-box">
                        <div class="user-info-pic">
                            <img src="src/img/avatar.jpg" alt="User Image">
                        </div>
                        <div class="user-info-txt">
                            <h3>متین سازنده</h3>
                            <p>matin.sazande@gmail.com</p>
                        </div>
                        <div class="user-approve">
                            <a class="btn1 waves-effect pulse" onclick="areUsure()">تایید شده</a>
                            <a class="btn1 danger-btn waves-effect">بلاک کردن</a>
                        </div>
                        <div class="user-transactions">
                            <p>تعداد تراکنش های: 26</p>
                            <p>مجموع گردش حساب: 2,600,000T</p>
                        </div>
                    </div>

                    <div class="user-left-box">
                        <div class="user-left-box-title">
                            <ul>
                                <a href="#user-personal-info" class="user-left-box-tab-links waves-effect" onclick="openCity(event, 'user-personal-info')">
                                    <li class="">مشخصات شخصی</li>
                                </a>
                                <a href="#user-personal-docs" class="user-left-box-tab-links waves-effect" onclick="openCity(event, 'user-personal-docs')">
                                    <li>مدارک ارسالی</li>
                                </a>
                                <a href="#user-personal-transactions" class="user-left-box-tab-links waves-effect" onclick="openCity(event, 'user-personal-transactions')">
                                    <li>تراکنش ها</li>
                                </a>
                                <a href="#user-personal-passwords" class="user-left-box-tab-links waves-effect" onclick="openCity(event, 'user-personal-passwords')">
                                    <li>تغییر رمز عبور</li>
                                </a>
                            </ul>
                        </div>
                        
                        <div id="user-personal-info" class="user-left-box-tabs">
                            <form class="user-info-form">
                                <label for="user-name">نام کامل:</label>
                                <input type="text" name="name" id="user-name">
                                <label for="user-mail">ایمیل:</label>
                                <input type="text" name="email" id="user-mail">
                                <label for="user-mail">شماره موبایل:</label>
                                <input type="text" name="phone-number" id="user-phone-number">
                                <label for="user-mail">شماره ثابت:</label>
                                <input type="text" name="static-number" id="user-static-number">
                                <label for="user-mail">کد ملی:</label>
                                <input type="text" name="nat-code" id="user-nat-code">
                                <label for="user-mail">آدرس:</label>
                                <input type="text" name="address" id="user-address">
                                <label for="user-mail">شماره کارت:</label>
                                <input type="text" name="credit-cart-number" id="user-credit-card-number">
                                <label for="user-mail">شماره حساب:</label>
                                <input type="text" name="credit-account" id="user-credit-account">
                                <a href="#" class="btn1 danger-btn">رد صلاحیت</a>
                                <a href="#" class="btn1 danger-btn">بلاک کردن</a>
                            </form>
                        </div>

                        <div id="user-personal-docs" class="user-left-box-tabs">
                            <div class="user-docs">
                                <div class="national-card-doc">
                                    <h4>تصویر کارت ملی</h4>
                                    <a data-src="src/img/national-card.jpg" data-fancybox="gallery" data-caption="کارت ملی کاربر">
                                        <img src="src/img/national-card.jpg" alt="">
                                    </a>
                                </div>
                                <div class="national-card-doc">
                                    <h4>تصویر شناسنامه</h4>
                                    <a href="src/img/national-card.jpg" data-fancybox="gallery" data-caption="کارت ملی کاربر">
                                        <img src="src/img/national-card.jpg" alt="">
                                    </a>
                                </div>
                                <div class="national-card-doc">
                                    <h4>تصویر سلفی</h4>
                                    <a href="src/img/national-card.jpg" data-fancybox="gallery" data-caption="کارت ملی کاربر">
                                        <img src="src/img/national-card.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="user-personal-transactions" class="user-left-box-tabs">
                            <div class="table-wrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>نام کاربر</th>
                                            <th>ایمیل کاربر</th>
                                            <th>تلفن</th>
                                            <th>کد ملی</th>
                                            <th>وضعیت تایید</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>110</td>
                                            <td>متین سازنده</td>
                                            <td>matin@yahoo.com</td>
                                            <td>09124536958</td>
                                            <td>0019985032</td>
                                            <td>تایید شده</td>
                                            <td>
                                                <a class="button td-btn">ویرایش</a>
                                                <a class="button td-btn del-btn">حذف</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>111</td>
                                            <td>علی کشوری</td>
                                            <td>Ali.kesh@gmail.com</td>
                                            <td>09125486358</td>
                                            <td>0018965532</td>
                                            <td>تایید شده</td>
                                            <td>
                                                <a class="button td-btn">ویرایش</a>
                                                <a class="button td-btn del-btn">حذف</a>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>112</td>
                                            <td>محمد سعادت مند</td>
                                            <td>mohammad.sadat@yahoo.com</td>
                                            <td>09351636958</td>
                                            <td>0020086032</td>
                                            <td>تایید شده</td>
                                            <td>
                                                <a class="button td-btn">ویرایش</a>
                                                <a class="button td-btn del-btn">حذف</a>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>113</td>
                                            <td>مهسا ابراهیمی</td>
                                            <td>Mahsa.al@gmail.com</td>
                                            <td>09217566558</td>
                                            <td>0018986032</td>
                                            <td>تایید شده</td>
                                            <td>
                                                <a class="button td-btn">ویرایش</a>
                                                <a class="button td-btn del-btn">حذف</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>114</td>
                                            <td>سارا رسولی</td>
                                            <td>Sara.ras@gmail.com</td>
                                            <td>09124536958</td>
                                            <td>0019985032</td>
                                            <td>تایید شده</td>
                                            <td>
                                                <a class="button td-btn">ویرایش</a>
                                                <a class="button td-btn del-btn">حذف</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>‬</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div id="user-personal-passwords" class="user-left-box-tabs">
                            <form class="user-personal-passwords-form">
                                <label for="user-name">پسورد جدید: </label>
                                <input type="text" name="name" id="user-name">
                                <label for="user-mail">تکرار پسورد جدید: </label>
                                <input type="text" name="email" id="user-mail">
                                <a href="#" class="btn1">ذخیره</a>
                            </form>
                        </div>
                        <!-- docs -->
                    </div>

                </div>
                
			</div>
		</div>

<?php include("sidebar.php") ?>
<?php include("footer.php") ?>