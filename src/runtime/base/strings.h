/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010- Facebook, Inc. (http://www.facebook.com)         |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#ifndef __HPHP_STRINGS_H__
#define __HPHP_STRINGS_H__

namespace HPHP {
namespace Strings {

const char* const FATAL_NULL_THIS = "$this is null";
const char* const FUNCTION_ALREADY_DEFINED = "Function already defined: %s";
const char* const CONSTANT_ALREADY_DEFINED = "Constant %s already defined";
const char* const CONSTANTS_MUST_BE_SCALAR =
  "Constants may only evaluate to scalar values";
const char* const CONSTANTS_CASE_SENSITIVE =
  "Case insensitive constant names are not supported in HipHop";
const char* const UNDEFINED_CONSTANT =
  "Use of undefined constant %s - assumed '%s'";
const char* const UNDEFINED_VARIABLE = "Undefined variable: %s";
const char* const UNKNOWN_CLASS = "Class undefined: %s";
const char* const CANT_ACCESS_SELF =
  "Cannot access self:: when no class scope is active";
const char* const CANT_ACCESS_PARENT_WHEN_NO_CLASS =
  "Cannot access parent:: when no class scope is active";
const char* const CANT_ACCESS_PARENT_WHEN_NO_PARENT =
  "Cannot access parent:: when current class scope has no parent";
const char* const UNDEFINED_INDEX =
  "Undefined index: %s";
const char* const CANNOT_USE_SCALAR_AS_ARRAY =
  "Cannot use a scalar value as an array";
const char* const CREATING_DEFAULT_OBJECT =
  "Creating default object from empty value";
const char* const FUNCTION_NAME_MUST_BE_STRING =
  "Function name must be a string";
const char* const METHOD_NAME_MUST_BE_STRING =
  "Method name must be a string";

} // namespace Strings
} // namespace HPHP

#endif // __HPHP_STRINGS_H__
