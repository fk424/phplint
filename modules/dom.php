<?php
/** DOM Functions.

The DOM extension is the replacement for the DOM XML extension from PHP 4. The
extension still contains many old functions, but they should no longer be
used. In particular, functions that are not object-oriented should be avoided.
<p>

The extension allows you to operate on an XML document with the DOM API.
<p>

See: {@link http://www.php.net/manual/en/ref.dom.php}
*/

/*. if_php_ver_4 .*/
	This_module_is_not_available_under_PHP_4_use_DOM_XML_from_PECL_instead;
/*. end_if_php_ver .*/

/*. require_module 'standard'; .*/

define("DOMSTRING_SIZE_ERR", 2);
define("DOM_HIERARCHY_REQUEST_ERR", 3);
define("DOM_INDEX_SIZE_ERR", 1);
define("DOM_INUSE_ATTRIBUTE_ERR", 10);
define("DOM_INVALID_ACCESS_ERR", 15);
define("DOM_INVALID_CHARACTER_ERR", 5);
define("DOM_INVALID_MODIFICATION_ERR", 13);
define("DOM_INVALID_STATE_ERR", 11);
define("DOM_NAMESPACE_ERR", 14);
define("DOM_NOT_FOUND_ERR", 8);
define("DOM_NOT_SUPPORTED_ERR", 9);
define("DOM_NO_DATA_ALLOWED_ERR", 6);
define("DOM_NO_MODIFICATION_ALLOWED_ERR", 7);
define("DOM_PHP_ERR", 0);
define("DOM_SYNTAX_ERR", 12);
define("DOM_VALIDATION_ERR", 16);
define("DOM_WRONG_DOCUMENT_ERR", 4);
define("XML_ATTRIBUTE_CDATA", 1);
define("XML_ATTRIBUTE_DECL_NODE", 16);
define("XML_ATTRIBUTE_ENTITY", 6);
define("XML_ATTRIBUTE_ENUMERATION", 9);
define("XML_ATTRIBUTE_ID", 2);
define("XML_ATTRIBUTE_IDREF", 3);
define("XML_ATTRIBUTE_IDREFS", 4);
define("XML_ATTRIBUTE_NMTOKEN", 7);
define("XML_ATTRIBUTE_NMTOKENS", 8);
define("XML_ATTRIBUTE_NODE", 2);
define("XML_ATTRIBUTE_NOTATION", 10);
define("XML_CDATA_SECTION_NODE", 4);
define("XML_COMMENT_NODE", 8);
define("XML_DOCUMENT_FRAG_NODE", 11);
define("XML_DOCUMENT_NODE", 9);
define("XML_DOCUMENT_TYPE_NODE", 10);
define("XML_DTD_NODE", 14);
define("XML_ELEMENT_DECL_NODE", 15);
define("XML_ELEMENT_NODE", 1);
define("XML_ENTITY_DECL_NODE", 17);
define("XML_ENTITY_NODE", 6);
define("XML_ENTITY_REF_NODE", 5);
define("XML_HTML_DOCUMENT_NODE", 13);
define("XML_LOCAL_NAMESPACE", 18);
define("XML_NAMESPACE_DECL_NODE", 18);
define("XML_NOTATION_NODE", 12);
define("XML_PI_NODE", 7);
define("XML_TEXT_NODE", 3);

/*.
	forward abstract class DOMNode{}
	forward class DOMCharacterData{}
	forward class DOMConfiguration{}
	forward class DOMDocument{}
	forward class DOMDocumentType{}
	forward class DOMElement{}
	forward class DOMNamedNodeMap{}
	forward class DOMNodeList{}
	forward class DOMUserData{}
.*/


/** This class is undefined in the official manual. */
class DOMConfiguration
{
}


class DOMNamedNodeMap
{
	/*. DOMNode .*/ function getNamedItem(/*. string .*/ $name){}
	/*. DOMNode .*/ function getNamedItemNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. DOMNode .*/ function item(/*. int .*/ $index){}
}


/**
	Interface Node.
	Note that the DOM specifications requires this class be an interface.
	However, PHP 5 does not allow to define properties inside interfaces,
	so an abstract class is the closest approximation to the standard.
*/
abstract class DOMNode
{

	public /*. string .*/ $nodeName;
	public /*. string .*/ $nodeValue;
	public /*. int .*/ $nodeType = 0;  # dummy initial value
	public /*. DOMNode .*/ $parentNode;
	public /*. DOMNodeList .*/ $childNodes;
	public /*. DOMNode .*/ $firstChild;
	public /*. DOMNode .*/ $lastChild;
	public /*. DOMNode .*/ $previousSibling;
	public /*. DOMNode .*/ $nextSibling;
	public /*. DOMNamedNodeMap .*/ $attributes;
	public /*. DOMDocument .*/ $ownerDocument;
	public /*. string .*/ $namespaceURI;
	public /*. string .*/ $prefix;
	public /*. string .*/ $localName;
	public /*. string .*/ $baseURI;
	public /*. string .*/ $textContent;

	abstract /*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild);
	abstract /*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep);
	abstract /*. int     .*/ function getLineNo();
	abstract /*. boolean .*/ function hasAttributes();
	abstract /*. boolean .*/ function hasChildNodes();
	abstract /*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild);
	abstract /*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI);
	abstract /*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other);
	abstract /*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version);
	abstract /*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix);
	abstract /*. string .*/  function lookupPrefix(/*. string .*/ $namespaceURI);
	abstract /*. void .*/    function normalize();
	abstract /*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild);
	abstract /*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild);

	# FIXME: these methods I grabbed from C source apparently not available
	# according to the manual:
	#abstract /*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other);
	#abstract /*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg);
	#abstract /*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version);
	#abstract /*. DOMUserData .*/ function getUserData(/*. string .*/ $key);
	#abstract /*. int .*/ function getNodePath();
}

class DOMException extends Exception{}

class DOMUserData{}

class DOMNodeList
{
	public /*. int .*/ $length = 0; # dummy initial value

	/*. DOMNode .*/ function item(/*. int .*/ $index){}
}

class DOMProcessingInstruction extends DOMNode
{
	public /*. string .*/ $target;
	public /*. string .*/ $data;

	/*. void .*/ function __construct(/*. string .*/ $name /*. , args .*/){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMText extends DOMCharacterData
{
	public /*. string .*/ $wholeText;

	/*. void .*/ function __construct(/*. args .*/){}
	/*. DOMText .*/ function splitText(/*. int .*/ $offset){}
	/*. boolean .*/ function isWhitespaceInElementContent(){}
	/*. DOMText .*/ function replaceWholeText(/*. string .*/ $content){}
}

interface DOMImplementation
{
	####/*. void .*/ function __construct();
	/*. boolean .*/ function hasFeature(/*. string .*/ $feature, /*. string .*/ $version);
	/*. DOMDocumentType .*/ function createDocumentType(/*. string .*/ $qualifiedName, /*. string .*/ $publicId, /*. string .*/ $systemId);
	/*. DOMDocument .*/ function createDocument(/*. string .*/ $namespaceURI, /*. string .*/ $qualifiedName, /*. DOMDocumentType .*/ $doctype);
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version);
}

class DOMAttr extends DOMNode
{
	public /*. string .*/ $name;
	public /*. DOMElement .*/ $ownerElement;
	public /*. bool .*/ $schemaTypeInfo = false; # dummy initial value
	public /*. bool .*/ $specified = false; # dummy initial value
	public /*. string .*/ $value;

	/*. void .*/ function __construct(/*. string .*/ $name /*., args .*/){}
	/*. bool .*/ function isId(){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMCdataSection{}

class DOMDocumentFragment extends DOMNode
{
	public /*. bool .*/ function appendXML(/*. string .*/ $data){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMDocumentType extends DOMNode
{
	public /*. string .*/ $publicId;
	public /*. string .*/ $systemId;
	public /*. string .*/ $name;
	public /*. DOMNamedNodeMap .*/ $entities;
	public /*. DOMNamedNodeMap .*/ $notations;
	public /*. string .*/ $internalSubset;
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMElement extends DOMNode
{

	/** @deprecated This property not implemented yet, always returns NULL. */
	public /*. bool .*/ $schemaTypeInfo = false; # dummy initial value

	public /*. string .*/ $tagName;

	/*. void .*/ function __construct(/*. string .*/ $name /*. , args .*/){}
	/*. string .*/ function getAttribute(/*. string .*/ $name){}
	/*. void .*/ function setAttribute(/*. string .*/ $name, /*. string .*/ $value){}
	/*. void .*/ function removeAttribute(/*. string .*/ $name){}
	/*. DOMAttr .*/ function getAttributeNode(/*. string .*/ $name){}
	/*. DOMAttr .*/ function setAttributeNode(/*. DOMAttr .*/ $newAttr){}
	/*. DOMAttr .*/ function removeAttributeNode(/*. DOMAttr .*/ $oldAttr){}
	/*. DOMNodeList .*/ function getElementsByTagName(/*. string .*/ $name){}
	/*. string .*/ function getAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. void .*/ function setAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $qualifiedName, /*. string .*/ $value){}
	/*. void .*/ function removeAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. DOMAttr .*/ function getAttributeNodeNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. DOMAttr .*/ function setAttributeNodeNS(/*. DOMAttr .*/ $newAttr){}
	/*. DOMNodeList .*/ function getElementsByTagNameNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. boolean .*/ function hasAttribute(/*. string .*/ $name){}
	/*. boolean .*/ function hasAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. void .*/ function setIDAttribute(/*. string .*/ $name, /*. boolean .*/ $isId){}
	/*. void .*/ function setIDAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName, /*. boolean .*/ $isId){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMCharacterData extends DOMNode
{
	public /*. string .*/ $data;
	public /*. int .*/ $length = 0; # dummy initial value

	/*. string .*/ function substringData(/*. int .*/ $offset, /*. int .*/ $count){}
	/*. void .*/ function appendData(/*. string .*/ $arg){}
	/*. void .*/ function insertData(/*. int .*/ $offset, /*. string .*/ $arg){}
	/*. void .*/ function deleteData(/*. int .*/ $offset, /*. int .*/ $count){}
	/*. void .*/ function replaceData(/*. int .*/ $offset, /*. int .*/ $count, /*. string .*/ $arg){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMComment extends DOMCharacterData
{
	/*. void .*/ function __construct(/*. args .*/){}
}

class DOMEntityReference extends DOMNode
{
	/*. void .*/ function __construct(/*. string .*/ $name){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMDocument extends DOMNode
{
	public /*. string .*/ $actualEncoding;
	public /*. DOMConfiguration .*/ $config;
	public /*. DOMDocumentType .*/ $doctype;
	public /*. DOMElement .*/ $documentElement;
	public /*. string .*/ $documentURI;
	public /*. string .*/ $encoding;
	public /*. bool .*/ $formatOutput = false; # dummy initial value
	public /*. DOMImplementation .*/ $implementation;
	public /*. bool .*/ $preserveWhiteSpace = false; # dummy initial value
	public /*. bool .*/ $recover = false; # dummy initial value
	public /*. bool .*/ $resolveExternals = false; # dummy initial value
	public /*. bool .*/ $standalone = false; # dummy initial value
	public /*. bool .*/ $strictErrorChecking = false; # dummy initial value
	public /*. bool .*/ $substituteEntities = false; # dummy initial value
	public /*. bool .*/ $validateOnParse = false; # dummy initial value
	public /*. string .*/ $version;
	public /*. string .*/ $xmlEncoding;
	public /*. bool .*/ $xmlStandalone = false; # dummy initial value
	public /*. string .*/ $xmlVersion;

	/*. void .*/ function __construct(/*. args .*/){}
	/*. DOMElement .*/ function createElement(/*. string .*/ $tagName /*., args .*/){}
	/*. DOMDocumentFragment .*/ function createDocumentFragment(){}
	/*. DOMText .*/ function createTextNode(/*. string .*/ $data){}
	/*. DOMComment .*/ function createComment(/*. string .*/ $data){}
	/*. DOMCdataSection .*/ function createCDATASection(/*. string .*/ $data){}
	/*. DOMProcessingInstruction .*/ function createProcessingInstruction(/*. string .*/ $target, /*. string .*/ $data){}
	/*. DOMAttr .*/ function createAttribute(/*. string .*/ $name){}
	/*. DOMEntityReference .*/ function createEntityReference(/*. string .*/ $name){}
	/*. DOMNodeList .*/ function getElementsByTagName(/*. string .*/ $tagname){}
	/*. DOMNode .*/ function importNode(/*. DOMNode .*/ $importedNode, /*. boolean .*/ $deep)
		/*. throws DOMException .*/ {}
	/*. DOMElement .*/ function createElementNS(/*. string .*/ $namespaceURI, /*. string .*/ $qualifiedName /*., args .*/){}
	/*. DOMAttr .*/ function createAttributeNS(/*. string .*/ $namespaceURI, /*. string .*/ $qualifiedName){}
	/*. DOMNodeList .*/ function getElementsByTagNameNS(/*. string .*/ $namespaceURI, /*. string .*/ $localName){}
	/*. DOMElement .*/ function getElementByID(/*. string .*/ $elementId){}
	/*. DOMNode .*/ function adoptNode(/*. DOMNode .*/ $source){}
	/*. void .*/ function normalizeDocument(){}
	/*. DOMNode .*/ function load(/*. string .*/ $source){}
	/*. boolean .*/ function loadXML(/*. string .*/ $source, $options = 0){}
	/*. int .*/ function save(/*. string .*/ $file){}
	/*. string .*/ function saveXML( /*. args .*/){}
	/*. int .*/ function xinclude(){}
	/*. boolean .*/ function validate(){}
	/*. boolean .*/ function schemaValidateFile(/*. string .*/ $filename){}
	/*. boolean .*/ function schemaValidate(/*. string .*/ $source){}
	/*. boolean .*/ function relaxNGValidateFile(/*. string .*/ $filename){}
	/*. boolean .*/ function relaxNGValidateXML(/*. string .*/ $source){}
	/*. boolean .*/ function loadHTMLFile(/*. string .*/ $source){}
	/*. boolean .*/ function loadHTML(/*. string .*/ $source){}
	/*. int .*/ function saveHTMLFile(/*. string .*/ $file){}
	/*. string .*/ function saveHTML(/*. DOMNode .*/ $node = NULL){}
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMString{}

class DOMObject{}

abstract class DOMEntity extends DOMNode
{
	public /*. string .*/ $publicId;
	public /*. string .*/ $systemId;
	public /*. string .*/ $notationName;
	public /*. string .*/ $actualEncoding;
	public /*. string .*/ $encoding;
	public /*. string .*/ $version;
}

class DOMNotation extends DOMNode
{
	public /*. string .*/ $publicId;
	public /*. string .*/ $systemId;
	/*. DOMNode .*/ function insertBefore(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $refChild){}
	/*. DOMNode .*/ function replaceChild(/*. DOMNode .*/ $newChild, /*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function removeChild(/*. DOMNode .*/ $oldChild){}
	/*. DOMNode .*/ function appendChild(/*. DOMNode .*/ $newChild){}
	/*. boolean .*/ function hasChildNodes(){}
	/*. DOMNode .*/ function cloneNode(/*. boolean .*/ $deep){}
	/*. void .*/    function normalize(){}
	/*. boolean .*/ function isSupported(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. boolean .*/ function hasAttributes(){}
	/*. int .*/     function compareDocumentPosition(/*. DOMNode .*/ $other){}
	/*. boolean .*/ function isSameNode(/*. DOMNode .*/ $other){}
	/*. string .*/  function lookup_prefix(/*. string .*/ $namespaceURI){}
	/*. boolean .*/ function isDefaultNamespace(/*. string .*/ $namespaceURI){}
	/*. string .*/  function lookupNamespaceURI(/*. string .*/ $prefix){}
	/*. boolean .*/ function isEqualNode(/*. DOMNode .*/ $arg){}
	/*. DOMNode .*/ function getFeature(/*. string .*/ $feature, /*. string .*/ $version){}
	/*. DOMUserData .*/ function getUserData(/*. string .*/ $key){}
	/*. int .*/ function getNodePath(){}
	/*. int .*/ function getLineNo(){}
	/*. string .*/ function lookupPrefix(/*. string .*/ $namespaceURI){}
}

class DOMXPath
{
	public /*. DOMDocument .*/ $document;

	/*. void .*/ function __construct(/*. DOMDocument .*/ $doc){}
	/*. boolean .*/ function registerNamespace(/*. string .*/ $prefix, /*. string .*/ $uri){}
	/*. mixed .*/ function evaluate(/*. string .*/ $expr /*., args .*/){}
	/*. DOMNodeList .*/ function query(/*. string .*/ $expr /*., args .*/){}
}
