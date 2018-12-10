<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Chào mừng: <?php echo $_SESSION["Name"] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Trực tuyến</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="home.php"><em class="fa fa-dashboard">&nbsp;</em> Bảng điều khiển</a></li>
			<li><a href="tintuc"><em class="fa fa-comments">&nbsp;</em> Quản lý tin tức</a></li>
			<li><a href="giaothong"><em class="fa fa-bar-chart">&nbsp;</em> Quản lý danh sách luật giao thông</a></li>
			<li><a href="canhbao"><em class="fa fa-toggle-off">&nbsp;</em>Quản lý cảnh báo</a></li>
				</ul>
	</div>