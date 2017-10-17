{*
* Amazon Advanced Payment APIs Modul
* for Support please visit www.patworx.de
*
*  @author patworx multimedia GmbH <service@patworx.de>
*  In collaboration with alkim media
*  @copyright  2013-2015 patworx multimedia GmbH
*  @license    Released under the GNU General Public License
*}
{nocache}
<script>
{literal}
var accessToken = getURLParameter("access_token", $(location).attr('href'));
$(document).ready(function() {	
    $.ajax({
		type: 'GET',
		url: SETUSERAJAX,
		data: 'ajax=true{/literal}{if $toCheckout}&action=checkout{/if}{if $fromCheckout}&action=fromCheckout{/if}{literal}&method=setusertoshop&access_token=' + accessToken,
		success: function(htmlcontent) {
			if (htmlcontent == 'error') {
				alert('An error occured - please try again or contact our support');
			} else {
				window.location = htmlcontent;
			}					   
		 }
	});	
});
{/literal}
</script>

{if $fromCheckout}
<h1>
	{l s='Thank you. Your order has been successful. We now create your account.' mod='amzpayments'}
</h1>
{else}
<h1>
	{l s='Thank you for your login with Amazon Payments' mod='amzpayments'}
</h1>
{/if}

<h3>{l s='You will be redirected in a few seconds...' mod='amzpayments'}</h3>
{/nocache}