<?php


#	Errors
class H2o_Error extends Exception {}
class H2oParseError extends H2o_Error {}
class TemplateNotFound extends H2o_Error {}
class TemplateSyntaxError extends H2o_Error {}

?>