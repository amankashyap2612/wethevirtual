
<?= $page_info->footer_text; ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var csrf_token = '<?=csrf_token();?>';
var csrf_hash = '<?=csrf_hash();?>';
function update_token(result)
{
    csrf_token = result.error_token.cname;
    csrf_hash = result.error_token.cvalue;
    $('input[name='+ csrf_token +']').attr('value',csrf_hash);
}



var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f817398f0e7167d0017cf5c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->