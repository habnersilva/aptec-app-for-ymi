<!-- This is an example page calling the phpsecinfo() function -->
<?php 
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Loaded php.ini: ' . $inipath;
} else {
    echo 'A php.ini file is not loaded';
}

require_once('PhpSecInfo/PhpSecInfo.php'); ?>
<?php phpsecinfo(); ?>

<?php
/**
 * If you want to capture output and/or customize the look and feel,
 * you need to do slightly more work.
 *
 * Example:
 * <code>
 * require_once('PhpSecInfo/PhpSecInfo.php');
 * // instantiate the class
 * $psi = new PhpSecInfo();
 *
 * // load and run all tests
 * $psi->loadAndRun();
 *
 * // grab the results as a multidimensional array
 * $results = $psi->getResultsAsArray();
 * echo "<pre>"; echo print_r($results, true); echo "</pre>";
 *
 * // grab the standard results output as a string
 * $html = $psi->getOutput();
 *
 * // send it to the browser
 * echo $html;
 * </code>
 */
?>
