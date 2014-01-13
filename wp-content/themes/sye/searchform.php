<head>
<script type="text/javascript">
  function submit_search(){
	  if(jQuery('input[name=\"s\"]').val() != '') 
		  jQuery('#search').submit(); 
 }
</script>
</head>
<form id="search"  action="<?php echo home_url( '/' ); ?>" method="get">
	<label>
		<span class="screen-reader-text">Buscar:</span>
		<input type="search" title="Buscar:" name="s" value="" placeholder="Buscar …" class="search-field">
	</label>
	<input type="button" value="" onclick="submit_search();">
</form>
