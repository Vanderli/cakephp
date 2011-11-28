<!-- .nav -->
<ul class="nav">
	<li>
		<a href="./" <?=($_SERVER['QUERY_STRING']=='')?'class="current"':null;?>>
			<span>home</span>
		</a>
	</li>
	<li>
		<a href="./sobre-o-evento" <?=($_SERVER['QUERY_STRING']=='/sobre-o-evento')?'class="current"':null;?>>
			<span>sobre o evento</span>
		</a>
	</li>
	<li>
		<a href="./como-chegar-ao-evento" <?=($_SERVER['QUERY_STRING']=='/como-chegar-ao-evento')?'class="current"':null;?>>
			<span>como chegar</span>
		</a>
	</li>
</ul>
<!-- /.nav -->