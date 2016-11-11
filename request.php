<?php

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<input>
    <defintion name="definition" author="Captain America">
        A statement of the exact meaning of a word, especially in a dictionary.
    </definition>
    
    <defintion name="bar" author="Spiderman">
        A place that sells alcholic beverages
    </definition>
    
    <defintion name="ajax" author="Ironman">
        Technique which involves the use of javascript and xml (or JSON)
    </definition>
    
    <defintion name="html" author="Black Widow">
        The standard markup language for creating web pages and web applications.
    </definition>
    
    <defintion name="css" author="Storm">
        A style sheet language used for describing the presentation of a document written in a markup language.
    </definition>
    
    <defintion name="javascript" author="Batman">
        A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
    </definition>
    
    <defintion name="php" author="Flash">
        <name>Storm</name>
        <email>storm@example.com</email>
    </definition>
</input>';

header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();