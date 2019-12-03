<?php
defined('ROOT') OR exit('No direct script access allowed');
?>
<!-- Footer are 'sticky' -->
<footer class="footer">
	<hr>
	<div class="fcontent">
		<a target="_blank" href="@( 'mailto:admin@kazuyamarino.com' )">Vikry Yuansah</a>
		<span>-</span>
		<a href="@( base_url() )">NSY 2015 - @( date("Y") )</a>
	</div>
</footer>
<!-- call footer assets method -->
@( pull::footer_assets() )

<!-- call datatables init method -->
@( pull::datatables_crud_init() )
</body>
</html>
