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
// @generated by HipHop Compiler

#ifndef __GENERATED_cls_DOMException_h050df05a__
#define __GENERATED_cls_DOMException_h050df05a__

#include <runtime/base/hphp_system.h>
#include <system/gen/sys/literal_strings_remap.h>
#include <system/gen/sys/scalar_arrays_remap.h>
#include <cls/Exception.h>

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

/* SRC: classes/exception.php line 340 */
FORWARD_DECLARE_CLASS(DOMException);
extern const ObjectStaticCallbacks cw_DOMException;
class c_DOMException : public c_Exception {
  public:

  // Properties

  // Class Map
  DECLARE_CLASS_NO_SWEEP(DOMException, DOMException, Exception)
  c_DOMException(const ObjectStaticCallbacks *cb = &cw_DOMException) : c_Exception(cb) {
    if (!hhvm) setAttribute(NoDestructor);
  }
  public: void t___construct(Variant v_message, Variant v_code);
  public: c_DOMException *create(CVarRef v_message, CVarRef v_code);
  DECLARE_METHOD_INVOKE_HELPERS(__construct);
};
ObjectData *coo_DOMException() NEVER_INLINE;

///////////////////////////////////////////////////////////////////////////////
}

#endif // __GENERATED_cls_DOMException_h050df05a__
