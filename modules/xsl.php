<?php
/** XSL functions.

	See: {@link http://www.php.net/manual/en/ref.xsl.php}
	@package xsl
*/

/*. if_php_ver_4 .*/
	xsl_module_not_available_under_PHP_4)
/*. end_if_php_ver .*/

/*.  require_module 'dom'; .*/

define('XSL_CLONE_AUTO', 1);
define('XSL_CLONE_NEVER', 1);
define('XSL_CLONE_ALWAYS', 1);
define('LIBXSLT_VERSION', 1);
define('LIBEXSLT_VERSION', 1);
define('LIBXSLT_DOTTED_VERSION', '?');
define('LIBEXSLT_DOTTED_VERSION', '?');

class XSLTProcessor {
	/*. void .*/    function __construct(){}
	/*. string .*/  function getParameter(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. bool .*/    function hasExsltSupport(){}
	/*. void .*/    function importStylesheet(/*. DOMDocument .*/ $doc){}
	/*. void .*/    function registerPHPFunctions(){}
	/*. bool .*/    function removeParameter(/*. string .*/ $namespace_, /*. string .*/ $name){}
	/*. bool .*/    function setParameter(/*. string .*/ $namespace_ /*., args .*/){}
	/*. DOMDocument .*/ function transformToDoc(/*. DOMNode .*/ $doc){}
	/*. int .*/     function transformToUri(/*. DOMDocument .*/ $doc, /*. string .*/ $uri){}
	/*. string .*/  function transformToXml(/*. DOMDocument .*/ $doc){}
}
