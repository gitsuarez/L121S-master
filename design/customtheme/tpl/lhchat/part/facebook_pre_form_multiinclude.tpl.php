<script type="text/javascript">
	var myWindow;
	var cInterval;
	function fblogout() {
		myWindow  = window.open('/facebook-logout.php', '_blank', 'height=620, width=620');
		cInterval = setInterval(function(){ 
			if(myWindow.closed){
				window.location.reload();
				clearInterval(cInterval);
			}
		}, 1000);	
	}
	function fbauth(){
		myWindow  = window.open('/facebook-auth.php', '_blank', 'height=620, width=620');
		cInterval = setInterval(function(){ 
			if(myWindow.closed){
				window.location.reload();
				clearInterval(cInterval);
			}
		}, 1000);		
	}
</script>