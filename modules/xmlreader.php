<?php
/** XMLReader functions.

See: {@link http://www.php.net/manual/en/ref.xmlreader.php}

<p>
An useful quote from the manual:
<p>
The XMLReader extension is available in PECL for PHP 5.0 and is included
and enabled in PHP 5.1 by default. It can be enabled by adding the argument
--enable-xmlreader	 (or --with-xmlreader before 5.1) to your configure
line. The libxml extension is required.
@package xmlreader
*/

/*. require_module 'libxml'; .*/

class XMLReader
{
	const
		NONE = 0,
		ELEMENT = 1,
		ATTRIBUTE = 2,
		TEXT = 3,
		CDATA = 4,
		ENTITY_REF = 5,
		ENTITY = 6,
		PI = 7,
		COMMENT = 8,
		DOC = 9,
		DOC_TYPE = 10,
		DOC_FRAGMENT = 11,
		NOTATION = 12,
		WHITESPACE = 13,
		SIGNIFICANT_WHITESPACE = 14,
		END_ELEMENT = 15,
		END_ENTITY = 16,
		XML_DECLARATION = 17,
		LOADDTD = 1,
		DEFAULTATTRS = 2,
		VALIDATE = 3,
		SUBST_ENTITIES = 4;

	public /*. int    .*/ $attributeCount = 0;  # dummy initial value
	public /*. int    .*/ $depth = 0;  # dummy initial value
	public /*. int    .*/ $nodeType = 0;  # dummy initial value
	public /*. bool   .*/ $hasAttributes = FALSE;  # dummy initial value
	public /*. bool   .*/ $hasValue = FALSE;  # dummy initial value
	public /*. bool   .*/ $isDefault = FALSE;  # dummy initial value
	public /*. bool   .*/ $isEmptyElement = FALSE;  # dummy initial value
	public /*. string .*/ $baseURI;
	public /*. string .*/ $localName;
	public /*. string .*/ $name;
	public /*. string .*/ $namespaceURI;
	public /*. string .*/ $prefix;
	public /*. string .*/ $value;
	public /*. string .*/ $xmlLang;

	/*. boolean .*/ function close(){}
	/*. string .*/ function getAttribute(/*. string .*/ $name){}
	/*. string .*/ function getAttributeNo(/*. int .*/ $index){}
	/*. string .*/ function getAttributeNs(/*. string .*/ $name, /*. string .*/ $namespaceURI){}
	/*. boolean .*/ function getParserProperty(/*. int .*/ $property){}
	/*. boolean .*/ function isValid(){}
	/*. string .*/ function lookupNamespace(/*. string .*/ $prefix){}
	/*. boolean .*/ function moveToAttribute(/*. string .*/ $name){}
	/*. boolean .*/ function moveToAttributeNo(/*. int .*/ $index){}
	/*. boolean .*/ function moveToAttributeNs(/*. string .*/ $name, /*. string .*/ $namespaceURI){}
	/*. boolean .*/ function moveToElement(){}
	/*. boolean .*/ function moveToFirstAttribute(){}
	/*. boolean .*/ function moveToNextAttribute(){}
	/*. boolean .*/ function read(){}
	/*. boolean .*/ function next( /*. args .*/){}
	/*. boolean .*/ function open(/*. string .*/ $URI, /*. string .*/ $encoding = NULL, $options = 0){}
	/*. boolean .*/ function readInnerXml(){}
	/*. boolean .*/ function readOuterXml(){}
	/*. boolean .*/ function readString(){}
	/*. boolean .*/ function setSchema(/*. string .*/ $filename){}
	/*. boolean .*/ function setParserProperty(/*. int .*/ $property, /*. boolean .*/ $value){}
	/*. boolean .*/ function setRelaxNGSchema(/*. string .*/ $filename){}
	/*. boolean .*/ function setRelaxNGSchemaSource(/*. string .*/ $source){}
	/*. boolean .*/ function xml(/*. string .*/ $source, /*. string .*/ $encoding = NULL, $options = 0){}
	/*. boolean .*/ function expand(){}
}
