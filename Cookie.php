<style>

	.storm-cookie {
		
		/* Base */
		font-family: Helvetica, Arial, sans-serif;
		font-size: 14px;
		line-height: 1.4;
		color: #fff;
		-webkit-text-size-adjust: 100%;
		-ms-text-size-adjust: 100%;
		
		margin-bottom:1em;
		padding-top:1em;
		width:100%;
	}
	
	.cookie__contain {
		
		/* Structure */
		margin:0 auto;
		max-width:900px;
		overflow:hidden;
		padding:.7em;
		width:100%;
		
		/* Styles */
		background: #58585a; /* Old browsers */
		background: -moz-linear-gradient(top,  hsl(240,1%,35%) 0%, hsl(240,1%,25%) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,hsl(240,1%,35%)), color-stop(100%,hsl(240,1%,25%))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  hsl(240,1%,35%) 0%,hsl(240,1%,25%) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  hsl(240,1%,35%) 0%,hsl(240,1%,25%) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  hsl(240,1%,35%) 0%,hsl(240,1%,25%) 100%); /* IE10+ */
		background: linear-gradient(top,  hsl(240,1%,35%) 0%,hsl(240,1%,25%) 100%); /* W3C */
		border:1px solid #444;
		
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		box-sizing:border-box;
		-webkit-box-shadow:0 0 1em rgba(0, 0, 0, 0.5);
		-moz-box-shadow:0 0 1em rgba(0, 0, 0, 0.5);
		box-shadow:0 0 1em rgba(0, 0, 0, 0.5);

	}
	
	.storm-cookie p {
		margin: 0;	
	}
	
	.cookie__title {
		text-shadow:0 1px 0 rgba(0, 0, 0, 1);
		text-transform:uppercase;	
	}
	
	.cookie__content {
		background-color:#fff;
		color:#939598;
		font-size:.857142857em; /* 12 / 14 */
		padding:.5em;
		margin:.5em 0 .6em;
		zoom:1;
	}
	
	.cookie__link {
		color:#939598;
		cursor:pointer;
		font-weight:bold;
		text-decoration:underline;
	}
	
	.cookie__link:hover,
	.cookie__link:focus {
		color:#666;
		text-decoration:none;
	}
	
	.cookie__submit {
		background: #ed1c24; /* Old browsers */
		background: -moz-linear-gradient(top,  hsl(358,85%,52%) 0%, hsl(354,73%,44%) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,hsl(358,85%,52%)), color-stop(100%,hsl(354,73%,44%))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  hsl(358,85%,52%) 0%,hsl(354,73%,44%) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  hsl(358,85%,52%) 0%,hsl(354,73%,44%) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  hsl(358,85%,52%) 0%,hsl(354,73%,44%) 100%); /* IE10+ */
		background: linear-gradient(top,  hsl(358,85%,52%) 0%,hsl(354,73%,44%) 100%); /* W3C */
		border:none;
		color:#fff;
		cursor:pointer;
		float:right;
		font-size:1em;
		margin:0;
		padding:0.5em .7em;
		overflow:visible;
		text-align:center;
		text-shadow:0 1px 0 rgba(0, 0, 0, 0.2);
	}
	
	.cookie__submit:hover,
	.cookie__submit:focus {
		background:#BF1E2E;
	}
	
	.cookie__contain,
	.cookie__content,
	.cookie__submit {
		-webkit-border-radius:0.3em;
		-moz-border-radius:0.3em;
		border-radius:0.3em;
	}
	
	@media screen and (min-width: 768px) {
		
		.cookie__contain {
			position:relative;	
		}
		
		.cookie__content,
		.cookie__submit {
			float:left;
		}
		
		.cookie__content {
			margin-bottom:0;
			max-width:89.7777778%;	
		}
		
		.cookie__submit {
			bottom:.7em;
			min-width:0;
			position:absolute;
			right:.7em;
			width:07.7777778%;
		}
		
		.cookie__submit:active {
			bottom:.45em;	
		}
	}
	
	/* IE Fixes */
	.ie7-cookie,
	.ie6-cookie {
		padding-bottom:.2em;	
	}
	
	.ie6-cookie {
		width:900px;	
	}
	
	/* JS Interaction */
	#js-cookie-info {
		display:none;
	}
	
</style>
<form class="storm-cookie">
    <!--[if IE 6]><div class="cookie__contain ie6-cookie"><![endif]-->
    <!--[if IE 7]><div class="cookie__contain ie7-cookie"><![endif]-->
	<!--[if gt IE 7]><!--> <div class="cookie__contain"> <!--<![endif]-->
        <p class="cookie__title">Important</p>
        <div class="cookie__content">
            <p>This website requires the use of cookies to operate correctly and for your convenience when revisiting in the future. Please click "I Agree" if you would like to enable cookies on this website. For more information <span id="js-cookie-link" class="cookie__link">click here</span>.</p>
            <p id="js-cookie-info">The Privacy and Electronic Communications (EC Directive) Regulations 2003 relate to the use of so called 'cookies' on websites – and in particular how they store users' details when they visit the sites. All users visiting this website are given the option to not use cookies. A cookie is simply a small file that is downloaded onto a computer or mobile device when a user accesses this site. They are then sent back to us on subsequent visits, so we can recognise who is logging on. They are also essential for online stores and other simple software to operate correctly. In short, without them, some aspects of this website will not work. Cookies are also used for analytics software to help us improve the quality of service you receive on future visits to our site. Please click "I Agree" if you would like to enable cookies on this website.</p>
        </div>
        <input type="submit" class="cookie__submit" value="I Agree">
	</div>
</form>
<script>
	var cookieLink = document.getElementById('js-cookie-link'),
		info = document.getElementById('js-cookie-info');
	
	function cookie() {
		
		cookieLink.parentNode.style.display = 'none';
		info.style.display = 'block';
		
	}
	
	cookieLink.onclick = cookie;
	
</script>