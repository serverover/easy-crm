<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>蔷薇</title>
		<link rel="stylesheet" href="/src/assets/css/amazeui.css" />
		<link rel="stylesheet" href="/src/assets/css/core.css" />
		<link rel="stylesheet" href="/src/assets/css/menu.css" />
		<link rel="stylesheet" href="/src/assets/css/index.css" />
		<link rel="stylesheet" href="/src/assets/css/admin.css" />
		<link rel="stylesheet" href="/src/assets/css/page/typography.css" />
		<link rel="stylesheet" href="/src/assets/css/page/form.css" />
		<link rel="stylesheet" href="/src/assets/css/component.css" />
	</head>
	<body>
		<!-- Begin page -->
		<header class="am-topbar am-topbar-fixed-top">
			@if(Session::has('flash_message_warning'))
					 <message message="{{ Session::get('flash_message_warning') }}" type="warning"></message>
			@endif
			@if(Session::has('flash_message'))
					<div class="message" style=" display:none;">
						<div class="el-message">
							<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjQwcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDQwIDQwIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogICAgPCEtLSBHZW5lcmF0b3I6IFNrZXRjaCAzOS4xICgzMTcyMCkgLSBodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2ggLS0+CiAgICA8dGl0bGU+aWNvbl9zdWNjZXNzPC90aXRsZT4KICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPgogICAgPGRlZnM+PC9kZWZzPgogICAgPGcgaWQ9IkVsZW1lbnQtZ3VpZGVsaW5lLXYwLjIuNCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9Ik1lc3NhZ2UiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02MC4wMDAwMDAsIC0yMTIuMDAwMDAwKSI+CiAgICAgICAgICAgIDxnIGlkPSLluKblgL7lkJFf5L+h5oGvIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MC4wMDAwMDAsIDIxMi4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJSZWN0YW5nbGUtMiI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9Imljb25fc3VjY2VzcyI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGUtMiIgZmlsbD0iIzEzQ0U2NiIgeD0iMCIgeT0iMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIj48L3JlY3Q+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0yNy44MjU1ODE0LDE3LjE0ODQzNTcgTDE5LjAxNzQ0LDI1LjgyODEyMTMgQzE4LjkwMTE2MDksMjUuOTQyNzA4MyAxOC43NjU1MDMzLDI2IDE4LjYxMDQ2NywyNiBDMTguNDU1NDI3LDI2IDE4LjMxOTc2OTMsMjUuOTQyNzA4MyAxOC4yMDM0ODY1LDI1LjgyODEyMTMgTDE4LjAyOTA3MTYsMjUuNjU2MjUgTDEzLjE3NDQxODYsMjAuODQzNzUgQzEzLjA1ODEzOTUsMjAuNzI5MTYzIDEzLDIwLjU5NTQ4MzcgMTMsMjAuNDQyNzA0NyBDMTMsMjAuMjg5OTI5MyAxMy4wNTgxMzk1LDIwLjE1NjI1IDEzLjE3NDQxODYsMjAuMDQxNjY2NyBMMTQuMzY2Mjc3MiwxOC44NjcxODU3IEMxNC40ODI1NiwxOC43NTI2MDIzIDE0LjYxODIxNzcsMTguNjk1MzEwNyAxNC43NzMyNTc3LDE4LjY5NTMxMDcgQzE0LjkyODI5NCwxOC42OTUzMTA3IDE1LjA2Mzk1MTYsMTguNzUyNjAyMyAxNS4xODAyMzA3LDE4Ljg2NzE4NTcgTDE4LjYxMDQ2NywyMi4yNzYwMzggTDI1LjgxOTc2OTMsMTUuMTcxODcxMyBDMjUuOTM2MDQ4NCwxNS4wNTcyODggMjYuMDcxNzA2LDE1IDI2LjIyNjc0MjMsMTUgQzI2LjM4MTc4MjMsMTUgMjYuNTE3NDQsMTUuMDU3Mjg4IDI2LjYzMzcyMjgsMTUuMTcxODcxMyBMMjcuODI1NTgxNCwxNi4zNDYzNTIzIEMyNy45NDE4NjA1LDE2LjQ2MDkzNTcgMjgsMTYuNTk0NjE1IDI4LDE2Ljc0NzM5NCBDMjgsMTYuOTAwMTczIDI3Ljk0MTg2MDUsMTcuMDMzODUyMyAyNy44MjU1ODE0LDE3LjE0ODQzNTcgTDI3LjgyNTU4MTQsMTcuMTQ4NDM1NyBaIiBpZD0iUGF0aCIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+" alt="" class="el-message__img">
							<div class="el-message__group">
								<p>{{ Session::get('flash_message') }}</p>
								<div class="el-message__closeBtn el-icon-close">X</div>
							</div>
						</div>
					</div>
			@endif

			<div class="am-topbar-left am-hide-sm-only">
          <a href="/" class="logo"><span>{{--心有猛虎--}}<span>细嗅蔷薇</span></span><i class="zmdi zmdi-layers"></i></a>
			</div>

			<div class="contain">
				<ul class="am-nav am-navbar-nav am-navbar-left">

					<li><h4 class="page-title">@yield('heading')</h4></li>
				</ul>

				<ul class="am-nav am-navbar-nav am-navbar-right">
					<li class="inform"><i class="am-icon-bell-o" aria-hidden="true"></i></li>
					<li class="hidden-xs am-hide-sm-only">
              <form role="search" class="app-search">
                  <input type="text" placeholder="Search..." class="form-control">
                  <a href=""><img src="/src/assets/img/search.png"></a>
              </form>
          </li>
				</ul>
			</div>
		</header>
		<!-- end page -->

		<div class="admin">
			<!--<div class="am-g">-->
		<!-- ========== Left Sidebar Start ========== -->
		<!--<div class="left side-menu am-hide-sm-only am-u-md-1 am-padding-0">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 548px;">
				<div class="sidebar-inner slimscrollleft" style="overflow: hidden; width: auto; height: 548px;">-->
                  <!-- sidebar start -->
				  <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
				    <div class="am-offcanvas-bar admin-offcanvas-bar">

							<!-- User -->
						<div class="user-box am-hide-sm-only">
								<div class="user-img">
										<img src="/src/assets/img/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
										<div class="user-status offline"><i class="am-icon-dot-circle-o" aria-hidden="true"></i></div>
								</div>
								<h5><a href="/users">{{ Auth::user()->name }}</a> </h5>
								<ul class="list-inline">
										<li>
												<a href="#">
														<i class="fa fa-cog" aria-hidden="true"></i>
												</a>
										</li>

										<li>
												<a href="#" class="text-custom">
														<i class="fa fa-cog" aria-hidden="true"></i>
												</a>
										</li>
								</ul>
						</div>
							<!-- End User -->

						 <ul class="am-list admin-sidebar-list">
							 	<li><a href="/home"><span class="am-icon-home"></span> 首页</a></li>
						    <li><a href="/users"><span class="am-icon-user"></span> 个人简介</a></li>
						    <li class="admin-parent">
						      <a class="am-cf am-collapsed" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-tag"></span> 客户 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list admin-sidebar-sub am-collapse" id="collapse-nav1">
						        <li><a href="/clients" class="am-cf"> 所有客户</span></a></li>
						        <li><a href="/clients/create">新建客户</a></li>
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><i class="am-icon-line-chart" aria-hidden="true"></i> 统计图表 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list admin-sidebar-sub am-collapse" id="collapse-nav2">
						        <li><a href="#" class="am-cf"> 折线图</span></a></li>
						        <li><a href="#" class="am-cf"> 柱状图</span></a></li>
						        <li><a href="#" class="am-cf"> 饼状图</span></a></li>
						      </ul>
						    </li>
						    <li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav5'}"><span class="am-icon-file"></span> 表单 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list admin-sidebar-sub am-collapse" id="collapse-nav5">
						        <li><a href="#" class="am-cf"> 基本表单</a></li>
						        <li><a href="#">表单验证</a></li>
						      </ul>
						    </li>
								<li class="admin-parent">
						      <a class="am-cf" data-am-collapse="{target: '#collapse-nav6'}"><span class="am-icon-file"></span> 表单 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
						      <ul class="am-list admin-sidebar-sub am-collapse" id="collapse-nav6">
						        <li><a href="#" class="am-cf"> 基本表单</a></li>
						        <li><a href="#">表单验证</a></li>
						      </ul>
						    </li>
						  </ul>
				</div>
				  </div>
				  <!-- sidebar end -->

				<!--</div>
			</div>
		</div>-->
		<!-- ========== Left Sidebar end ========== -->



	<!--	<div class="am-g">-->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				@if($errors->any())
					<div class="alert alert-danger">
							@foreach($errors->all() as $error)
									<p>{{ $error }}</p>
							@endforeach
					</div>
				@endif
				@yield('content')
			</div>
		</div>
		<!-- end right Content here -->
		<!--</div>-->
		</div>
		</div>

		<!-- navbar -->
		<a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>

		<script type="text/javascript" src="/src/assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="/js/index.js"></script>
		<script type="text/javascript" src="/src/assets/js/fastclick.js" ></script>
		<script type="text/javascript" src="/src/assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="/src/assets/js/app.js" ></script>
		<script type="text/javascript" src="/src/assets/js/blockUI.js" ></script>
		<script type="text/javascript" src="/src/assets/js/charts/echarts.min.js" ></script>
		<script type="text/javascript" src="/src/assets/js/charts/indexChart.js" ></script>
	</body>

</html>
