<?php 
use yii\helpers\Url;
 ?>
 <base href="http://www.lagouyii.com/backend/public/">
					<ul class="nav nav-list">
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 后台控制台 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 房源管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?=Url::toRoute(['cate/addcate']) ?>">
										<i class="icon-double-angle-right"></i>
										工作分类
									</a>
								</li>

								<li>
									<a href="record.html">
										<i class="icon-double-angle-right"></i>
										发布记录
									</a>
								</li>

								<li>
									<a href="refresh.html">
										<i class="icon-double-angle-right"></i>
										刷新记录
									</a>
								</li>

								<li>
									<a href="copy.html">
										<i class="icon-double-angle-right"></i>
										复制房源
									</a>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										账号设置
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="account.html">
												<i class="icon-leaf"></i>
												账号记录
											</a>
										</li>

										<li>
											<a href="addaccount.html">
												<i class="icon-leaf"></i>
												添加账号
											</a>
										</li>

									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 账户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="money.html">
										<i class="icon-double-angle-right"></i>
										余额充值
									</a>
								</li>

								<li>
									<a href="recharge.html">
										<i class="icon-double-angle-right"></i>
										充值记录
									</a>
								</li>
                                
                                <li>
									<a href="change.html">
										<i class="icon-double-angle-right"></i>
										密码设定
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 论坛管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										发布公告
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										进入论坛
									</a>
								</li>

							</ul>
						</li>

					</ul><!-- /.nav-list -->