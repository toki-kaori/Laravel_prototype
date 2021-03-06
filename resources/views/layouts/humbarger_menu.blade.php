<div id="triangle">
	<div id="hamburger_menu">
		<span class="hamburger__line hamburger__line1"></span>
		<span class="hamburger__line hamburger__line2"></span>
		<span class="hamburger__line hamburger__line3"></span>
	</div>
	<nav id ="sidebar">
		<ul id="sidebar_list">
			<li class="sidebar__item"><a href="/">トップ</a></li>
			<li class="sidebar__item"><a href="{{ url('about-us') }}">私たちについて</a></li>
			<li class="sidebar__item"><a href="{{ url('company') }}">会社情報</a></li>
			<li class="sidebar__item"><a href="{{ route('menus_archive') }}">商品一覧</a></li>
			<li class="sidebar__item"><a href="{{ route('news_archive') }}">News</a></li>
			<li class="sidebar__item"><a href="{{ route('blog_archive') }}">ブログ</a></li>
			<li class="sidebar__item"><a href="/contact">お問い合わせ・採用情報</a></li>
			<li class="sidebar__item"><a href="{{ url('privacy_policy') }}">プライバシーポリシー</a></li>
		</ul>
	</nav>
	<div id="gray_backgroud"></div>
</div>