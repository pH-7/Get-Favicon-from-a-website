<?php

/**
 * Get favicon from a URL.
 * 
 * @author Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright (c) 2013, Pierre-Henry Soria. All Rights Reserved.
 * @param string $sUrl
 * @return string The favicon image.
 */
function get_favicon($sUrl)
{
	$sApiUrl = 'http://www.google.com/s2/favicons?domain=';
	$sDomainName = get_domain($sUrl);
	
	return $sApiUrl . $sDomainName;
}

/**
 * Get domain name from a URL (helper function).
 * 
 * @author Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright (c) 2013, Pierre-Henry Soria. All Rights Reserved.
 * @param string $sUrl
 * @return string $sUrl Returns the URL to lower case and without the www. if present in the URL.
 */
function get_domain($sUrl)
{
        $sUrl = str_ireplace('www.', '', $sUrl);
        $sHost = parse_url($sUrl, PHP_URL_HOST);
        return $sHost;
}
?>


<?php
/*
 * DEMO
 */
?>

<a href="http://www.php.net/manual/en/index.php"><img src="<?php echo get_favicon('http://www.php.net/manual/en/index.php') ?>" alt="Favicon" title="See the PHP documentation" width="16" height="16" /></a>
