<!DOCTYPE html>
<html>
<head>
<title>XmpPlaneSpotting</title>
</head>
<body>
<div>
<pre>
<?php

// This is the equivalent to the XMP data in the file below...
$xmp = <<<XMP
<?xpacket begin='ï»¿' id='W5M0MpCehiHzreSzNTczkc9d'?>
<x:xmpmeta xmlns:x='adobe:ns:meta/' x:xmptk='Image::ExifTool 12.21'>
<rdf:RDF xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#'>

 <rdf:Description rdf:about=''
  xmlns:PlaneSpotting='http://www.flederwiesel.com/PlaneSpotting/2.0'>
  <PlaneSpotting:Aircraft>Aircraft</PlaneSpotting:Aircraft>
  <PlaneSpotting:AircraftType>Type</PlaneSpotting:AircraftType>
  <PlaneSpotting:Airline>Airline</PlaneSpotting:Airline>
  <PlaneSpotting:Airport>Airport</PlaneSpotting:Airport>
  <PlaneSpotting:Callsign>Callsign</PlaneSpotting:Callsign>
 </rdf:Description>

 <rdf:Description rdf:about=''
  xmlns:fpv='http://ns.fastpictureviewer.com/fpv/1.0/'>
  <fpv:RichTextComment>
  {\rtf1.\plain{\fs36{\b Aircraft\tab Callsign}}..\tab\fs16{\i Type}
  \par {\fs24 Airline}
  \par {\fs24 Airport}.}
  </fpv:RichTextComment>
 </rdf:Description>
</rdf:RDF>
</x:xmpmeta>
XMP;

$jpg_1x1 = <<<EOF
/9j/4AAQSkZJRgABAQEAYABgAAD/4QBgRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUA
AAABAAAARgEoAAMAAAABAAMAAIKYAAIAAAAKAAAATgAAAAAAAJOjAAAD6AAAk6MAAAPoQ29weXJp
Z2h0AP/hDSxodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvADw/eHBhY2tldCBiZWdpbj0n77u/
JyBpZD0nVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkJz8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0nYWRv
YmU6bnM6bWV0YS8nIHg6eG1wdGs9J0ltYWdlOjpFeGlmVG9vbCAxMi4yMSc+CjxyZGY6UkRGIHht
bG5zOnJkZj0naHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyc+Cgog
PHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9JycKICB4bWxuczpQbGFuZVNwb3R0aW5nPSdodHRw
Oi8vd3d3LmZsZWRlcndpZXNlbC5jb20vUGxhbmVTcG90dGluZy8yLjAnPgogIDxQbGFuZVNwb3R0
aW5nOkFpcmNyYWZ0PkFpcmNyYWZ0PC9QbGFuZVNwb3R0aW5nOkFpcmNyYWZ0PgogIDxQbGFuZVNw
b3R0aW5nOkFpcmNyYWZ0VHlwZT5UeXBlPC9QbGFuZVNwb3R0aW5nOkFpcmNyYWZ0VHlwZT4KICA8
UGxhbmVTcG90dGluZzpBaXJsaW5lPkFpcmxpbmU8L1BsYW5lU3BvdHRpbmc6QWlybGluZT4KICA8
UGxhbmVTcG90dGluZzpBaXJwb3J0PkFpcnBvcnQ8L1BsYW5lU3BvdHRpbmc6QWlycG9ydD4KICA8
UGxhbmVTcG90dGluZzpDYWxsc2lnbj5DYWxsc2lnbjwvUGxhbmVTcG90dGluZzpDYWxsc2lnbj4K
IDwvcmRmOkRlc2NyaXB0aW9uPgoKIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PScnCiAgeG1s
bnM6ZnB2PSdodHRwOi8vbnMuZmFzdHBpY3R1cmV2aWV3ZXIuY29tL2Zwdi8xLjAvJz4KICA8ZnB2
OlJpY2hUZXh0Q29tbWVudD57XHJ0ZjEKXHBsYWlue1xmczM2e1xiIEFpcmNyYWZ0XHRhYiBDYWxs
c2lnbn19CglcdGFiXGZzMTZ7XGkgVHlwZX0KXHBhciB7XGZzMjQgQWlybGluZX0KXHBhciB7XGZz
MjQgQWlycG9ydH0KfTwvZnB2OlJpY2hUZXh0Q29tbWVudD4KIDwvcmRmOkRlc2NyaXB0aW9uPgo8
L3JkZjpSREY+CjwveDp4bXBtZXRhPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
IAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAog
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg
ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hw
YWNrZXQgZW5kPSd3Jz8+/9sAQwD/////////////////////////////////////////////////
/////////////////////////////////////9sAQwH/////////////////////////////////
/////////////////////////////////////////////////////8AAEQgAAQABAwEiAAIRAQMR
Af/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQEC
AwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNE
RUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqy
s7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEB
AQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEH
YXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZX
WFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLD
xMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8AkooooA//2Q==
EOF;

// Relevant JFIF marker types
const M_SOI  = 0xd8;
const M_APP1 = 0xe1;
const M_SOS  = 0xda;

class XmpPlaneSpottingParser
{
	// XML parser from https://www.php.net/manual/en/function.xml-parse.php#79790,
	// stripped down to the *very* essential parts...

	private $parser;
	private $name;
	private $data;

	public function __construct(/* XmpPlaneSpotting */ &$data, $file)
	{
		$this->data = $data;

		// Scan JPEG (JFIF) for markers.
		// If M_APP1 section contains "http://ns.adobe.com/xap/1.0/", this is
		// where the XMP data is found -> parse XMP.
		$marker = fread($file, 2);

		if ($marker)
			$marker = unpack("Cff/Ctag", $marker);

		if ($marker)
		if (0xff == $marker["ff"] && M_SOI == $marker["tag"])
		while ($marker)
		{
			$marker = fread($file, 4);

			if ($marker)
			{
				$marker = unpack("Cff/Ctag/nsize", $marker);

				if ($marker)
				if (0xff == $marker["ff"])
				{
					$size = $marker["size"];

					switch ($marker["tag"])
					{
					case M_SOS:
						$marker = NULL;
						break;

					case M_APP1:

						$result = fread($file, $size - 2);

						if ($result == false)
						{
							$marker = NULL;
						}
						else
						{
							// This indicates XMP data is following
							if ("http://ns.adobe.com/xap/1.0/\0" == substr($result, 0, 29))
								$this->parse(substr($result, 29));
						}

						break;

					default:

						// Skip
						if (fseek($file, $size - 2, SEEK_CUR) < 0)
							$marker = NULL;

						break;
					}
				}
			}
		}
	}

	public function parse($xmp)
	{
		$this->parser = xml_parser_create();

		xml_set_object($this->parser, $this);
		xml_set_element_handler($this->parser, "startXML", "endXML");
		xml_set_character_data_handler($this->parser, "charXML");

		xml_parser_set_option($this->parser, XML_OPTION_CASE_FOLDING, false);

		if (!xml_parse($this->parser, $xmp))
		{
			throw new Exception(
				sprintf("XML error at line %d column %d",
					xml_get_current_line_number($this->parser),
					xml_get_current_column_number($this->parser)));
		}
	}

	private function startXML($parser, $name, $attr)
	{
		$this->name = $name;
	}

	private function endXML($parser, $name)
	{
	}

	private function charXML($parser, $data)
	{
		switch ($this->name)
		{
		case "PlaneSpotting:Airport":
			$this->data->airport .= trim($data);
			break;
		case "PlaneSpotting:Callsign":
			$this->data->callsign .= trim($data);
			break;
		case "PlaneSpotting:Aircraft":
			$this->data->aircraft .= trim($data);
			break;
		case "PlaneSpotting:AircraftType":
			$this->data->type .= trim($data);
			break;
		case "PlaneSpotting:Airline":
			$this->data->airline .= trim($data);
			break;
		}
	}
}

class XmpPlaneSpotting
{
	public $airport;
	public $callsign;
	public $aircraft;
	public $type;
	public $airline;

	public function __construct($file)
	{
		new XmpPlaneSpottingParser($this, $file);
	}
}

// Write base64-encoded image data to file
$file = tmpfile();

if ($file)
{
	fwrite($file, base64_decode($jpg_1x1));
	fseek($file, 0, SEEK_SET);
}

$spotting = new XmpPlaneSpotting($file);

print_r($spotting);

?>
</pre>
</div>
</body>
</html>
