<div class="social-share">
<style>
    .social-share{
        width:96%;
        clear: both;
        margin-left: auto;
        margin-right: auto;
        padding: 0px 0px 10px 0px;
    }
    .social-share-icon {
        display: flex;
    }
    .social-images {
        background-image: url(/images/socialIcon-50x50.jpg);
        width: 50px;
        height: 50px;
        border-radius: 50px;
        margin-right: 10px;
    }
    .apss-facebook, .apss-twitter,.apss-google-plus, .apss-linkedin, .apss-pinterest, .apss-youtube, .apss-skype, .apss-digg, .apss-email, .apss-print, .apss-whatsapp, .apss-instagram{
        display: flex;
        display: -webkit-inline-flex;
        font-size: 0px;
    }
    .facebook{ background-position: 595px -29px; }
    .twitter{ background-position: 529px -29px; }
    .google-plus{ background-position: 147px -29px; }
    .linkedin{ background-position: 80px -29px; }
    .pinterest{ background-position: 283px -98px; }
    .youtube{ background-position: 214px -98px; }
    .skype{ background-position: 146px -98px; }
    .whatsapp{ background-position: -547px -98px; }
    .instagram{ background-position: -345px -167px; }
    .digg{background-position: 565px -195px;}
    .print{ background-position: -467px -195px; }

</style>
<div class="social-share-icon clearfix">
<?php
    $current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $title = "test";
    $summary = "test";

?>
    <div class="apss-facebook apss-single-icon">
        <a class="social-images facebook" rel="nofollow" title="Share on Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>">Share on Facebook</a>
    </div>
    <div class="apss-twitter apss-single-icon">
        <a class="social-images twitter" rel="nofollow" href="https://twitter.com/intent/tweet?text=;url=<?php echo $current_url; ?>" title="Share on Twitter" target="_blank">Share on Twitter</a>
    </div>
    <div class="apss-google-plus apss-single-icon">
        <a class="social-images google-plus" rel="nofollow" title="Share on Google Plus" target="_blank" href="https://plus.google.com/share?url=<?php echo $current_url; ?>"></a>
    </div>
    <div class="apss-linkedin apss-single-icon">
        <a class="social-images linkedin" rel="nofollow" title="Share on LinkedIn" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php echo $title; ?>;url=<?php echo $current_url; ?>;summary=<?php echo $summary; ?>">Share on LinkedIn</a>
    </div>
    <div class="apss-pinterest apss-single-icon">
        <a class="social-images pinterest" rel="nofollow" title="Share on Pinterest" href="javascript:pinIt();">Share on Pinterest</a>
    </div>
<!--
    <div class="apss-digg apss-single-icon">
        <a class="social-images digg" rel="nofollow" title="Share on Digg" target="_blank" href="http://digg.com/submit?phase=2%20&amp;url=<?php echo $current_url; ?>&amp;title=<?php echo $title; ?>">Share on Digg</a>
    </div>
    <div class="apss-email apss-single-icon">
        <a rel="nofollow" class="share-email-popup" title="Share it on Email" target="_blank" href="mailto:?subject=Please visit this link http://www.newsbsp.com/for-not-offering-floral-tribute-to-dr-ambedkar-mayawati-attacks-president-kovind/&amp;body=Hey Buddy!, I found this information for you: &quot;%E0%A4%A1%E0%A5%89%20%E0%A4%AD%E0%A5%80%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%B5%20%E0%A4%86%E0%A4%82%E0%A4%AC%E0%A5%87%E0%A4%A1%E0%A4%95%E0%A4%B0%20%E0%A4%95%E0%A5%80%20%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A4%E0%A4%BF%E0%A4%AE%E0%A4%BE%20%E0%A4%AA%E0%A4%B0%20%E0%A4%AB%E0%A5%82%E0%A4%B2%20%E0%A4%A8%20%E0%A4%85%E0%A4%B0%E0%A5%8D%E0%A4%AA%E0%A4%BF%E0%A4%A4%20%E0%A4%95%E0%A4%B0%E0%A4%A8%E0%A5%87%20%E0%A4%AA%E0%A4%B0%20%E0%A4%AE%E0%A4%BE%E0%A4%AF%E0%A4%BE%E0%A4%B5%E0%A4%A4%E0%A5%80%20%E0%A4%A8%E0%A5%87%20%E0%A4%B0%E0%A4%BE%E0%A4%B7%E0%A5%8D%E0%A4%9F%E0%A5%8D%E0%A4%B0%E0%A4%AA%E0%A4%A4%E0%A4%BF%20%E0%A4%B0%E0%A4%BE%E0%A4%AE%E0%A4%A8%E0%A4%BE%E0%A4%A5%20%E0%A4%95%E0%A5%8B%E0%A4%B5%E0%A4%BF%E0%A4%82%E0%A4%A6%20%E0%A4%AA%E0%A4%B0%20%E0%A4%AC%E0%A5%8B%E0%A4%B2%E0%A5%88%20%E0%A4%B9%E0%A4%AE%E0%A4%B2%E0%A4%BE&quot;. Here is the website link: http://www.newsbsp.com/for-not-offering-floral-tribute-to-dr-ambedkar-mayawati-attacks-president-kovind/. Thank you.">
            <div class="apss-icon-block clearfix">
                <i class="fa  fa-envelope"></i>
                <span class="apss-social-text">Send email</span>
                <span class="apss-share">Mail</span>
            </div>
        </a>
    </div>
    <div class="apss-print apss-single-icon">
        <a class="social-images print"rel="nofollow" title="Print" href="javascript:void(0);" onclick="window.print(); return false;">Print</a>
    </div>
-->
    <div class="apss-youtube apss-single-icon">
        <a class="social-images youtube" rel="nofillow" title="Share via YouTube" href="whatsapp://send?text=<?php echo $current_url; ?>" data-action="share/whatsapp/share">Share on Whatsapp</a>
    </div>
    <div class="apss-skype apss-single-icon">
        <a class="social-images skype" rel="nofillow" title="Share via Skype" href="whatsapp://send?text=<?php echo $current_url; ?>" data-action="share/whatsapp/share">Share on Whatsapp</a>
    </div>
    <div class="apss-whatsapp apss-single-icon">
        <a class="social-images whatsapp" rel="nofillow" title="Share via Whatsapp" href="whatsapp://send?text=<?php echo $current_url; ?>" data-action="share/whatsapp/share">Share on Whatsapp</a>
    </div>
    <div class="apss-instagram apss-single-icon">
        <a class="social-images instagram" rel="nofillow" title="Share via Instagram" href="whatsapp://send?text=<?php echo $current_url; ?>" data-action="share/whatsapp/share">Share on Whatsapp</a>
    </div>
</div>
</div>
