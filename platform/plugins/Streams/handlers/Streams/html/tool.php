<?php

/**
 * @module Streams-tools
 */
	
/**
 * Inline editor for HTML content
 * @class Streams html
 * @constructor
 * @param {array} [$options] this array contains function parameters
 *   @param {string} $options.publisherId  The publisher's user id.
 *   @param {string} $options.field The name of the stream field used to save the html.
 *   @param {string} [$options.streamName] If empty, and "creatable" is true, then this can be used to add new related streams.
 *   @param {string} [$options.placeholder] The placeholder HTML
 *   @param {string} [$options.editor="auto"]  Can be "ckeditor", "froala", "basic" or "auto".
 *   @param {boolean} [$options.editable] Set to false to avoid showing even authorized users an interface to replace the contents
 *   @param {array} [$options.ckeditor]  The config, if any, to pass to ckeditor
 *   @param {array} [$options.froala]  The config, if any, to pass to froala
 *   @param {string} [$options.preprocess]  Name of an optional function which takes [callback, tool] and calls callback(objectToExtendAnyStreamFields)
 */
function Streams_html_tool($options)
{
	$stylesheets = array(
		"plugins/Q/font-awesome/css/font-awesome.min.css",
		"plugins/Q/js/froala/css/froala_editor.min.css",
		"plugins/Q/js/froala/css/froala_style.min.css",
		"plugins/Q/js/froala/css/plugins/fullscreen.min.css",
		"plugins/Q/js/froala/css/plugins/colors.min.css",
		"plugins/Q/js/froala/css/plugins/image.min.css",
		"plugins/Q/js/froala/css/plugins/table.min.css",
		"plugins/Q/js/froala/css/plugins/code_view.min.css"
	);
	foreach ($stylesheets as $stylesheet) {
		Q_Response::addStylesheet($stylesheet);
	}
	Q_Response::setToolOptions($options);
}