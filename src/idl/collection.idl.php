<?php
/**
 * Automatically generated by running "php schema.php container".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP
CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

///////////////////////////////////////////////////////////////////////////////

BeginClass(
  array(
    'name'   => "Vector",
    'ifaces' => array('Iterable', 'Countable'),
    'bases'  => array('Sweepable'),
    'desc'   => "A stack-style container.",
    'flags'  =>  IsFinal | HasDocComment | NoDefaultSweep,
    'footer' => <<<EOT

 private:
  TypedValue* m_data;
  int size;
  int capacity;
EOT
,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "isEmpty",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the Vector is empty, false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "count",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the number of values in the Vector.",
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => "at",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, an exception is thrown.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, null is returned.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "put",
    'flags'  =>  HasDocComment,
    'desc'   => "Stores a value into the Vector with the specified key, ".
                "overwriting any previous value that was associated with ".
                "the key. If the key is outside the bounds of the Vector, ".
                "an exception is thrown.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "clear",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes all values from the Vector.",
    'return' => array(
      'type'   => Object,
    ),
  ));


DefineFunction(
  array(
    'name'   => "contains",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the specified key is present in the Vector, ".
                "returns false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "append",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "val",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "add",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "val",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "pop",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "resize",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "sz",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));


DefineFunction(
  array(
    'name'   => "toArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the values from this Vector.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "getIterator",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an iterator that points to beginning of this Vector.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "sort",
    'flags'  =>  HasDocComment,
    'desc'   => "Uses the specified Collator to sort the Vector in place.",
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "col",
        'type'   => Variant,
        'value'  => "null",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "reverse",
    'flags'  =>  HasDocComment,
    'desc'   => "Reverses the values of the Vector in place.",
    'return' => array(
      'type'   => null,
    ),
  ));

// This method is deprecated and will be removed soon
DefineFunction(
  array(
    'name'   => "splice",
    'flags'  =>  HasDocComment,
    'desc'   => "Splices the values of the Vector in place (see the ".
                "documentation for array_splice() on php.net for more ".
                "details.",
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "offset",
        'type'   => Variant,
      ),
      array(
        'name'   => "len",
        'type'   => Variant,
        'value'  => "null",
      ),
      array(
        'name'   => "replacement",
        'type'   => Variant,
        'value'  => "null",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "linearSearch",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns index of the specified value if it is present, " .
                "-1 otherwise.",
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "search_value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "shuffle",
    'flags'  =>  HasDocComment,
    'desc'   => "Shuffles the values of the Vector randomly in place.",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "__toString",
    'return' => array(
      'type'   => String,
    ),
  ));

DefineFunction(
  array(
    'name'   => "__get",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__set",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__isset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__unset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromArray",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a Vector containing the values from the " .
                "specified array.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "arr",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromVector",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a copy of the specified Vector.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "vec",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "slice",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a Vector containing the specified slice of values ".
                "from the specified Vector.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "vec",
        'type'   => Variant,
      ),
      array(
        'name'   => "offset",
        'type'   => Variant,
      ),
      array(
        'name'   => "len",
        'type'   => Variant,
        'value'  => "null",
      ),
    ),
  ));

EndClass(
);

BeginClass(
  array(
    'name'   => "VectorIterator",
    'ifaces' => array('Iterator'),
    'desc'   => "An iterator implementation for iterating over a Vector.",
    'flags'  =>  IsFinal | HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "current",
    'desc'   => "Returns the current value that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "key",
    'desc'   => "Returns the current key that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "valid",
    'desc'   => "Returns true if the iterator points to a valid value, ".
                "returns false otherwise.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "next",
    'desc'   => "Advance this iterator forward one position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "rewind",
    'desc'   => "Move this iterator back to the first position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

EndClass(
);

///////////////////////////////////////////////////////////////////////////////

BeginClass(
  array(
    'name'   => "Map",
    'ifaces' => array('Iterable', 'Countable'),
    'bases'  => array('Sweepable'),
    'desc'   => "An unordered dictionary-style container.",
    'flags'  =>  IsFinal | HasDocComment | NoDefaultSweep,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "isEmpty",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the Map is empty, false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "count",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the number of key/value pairs in the Map.",
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => "at",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, an exception is thrown.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, null is returned.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "put",
    'flags'  =>  HasDocComment,
    'desc'   => "Stores a value into the Map with the specified key, ".
                "overwriting any previous value that was associated with ".
                "the key.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "clear",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes all key/value pairs from the Map.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "contains",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the specified key is present in the Map, ".
                "false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "remove",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes the specified key from this Map.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

// This method is deprecated and will be removed soon
DefineFunction(
  array(
    'name'   => "discard",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes the specified key from this Map.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "toArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the key/value pairs from this ".
                "Map.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

// This method is deprecated and will be removed soon
DefineFunction(
  array(
    'name'   => "copyAsArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the key/value pairs from this ".
                "Map.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "toKeysArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the keys from this ".
                "Map.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "values",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns a Vector containing the values from this ".
                "Map.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "toValuesArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the values from this ".
                "Map.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "updateFromArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Inserts the key/value pairs from the specified array into ".
                "this Map.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "arr",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "updateFromIterable",
    'flags'  =>  HasDocComment,
    'desc'   => "Inserts the key/value pairs produced by the specified ".
                "Iterable.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "it",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "differenceByKey",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "it",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "getIterator",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an iterator that points to beginning of this Map.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "__toString",
    'return' => array(
      'type'   => String,
    ),
  ));

DefineFunction(
  array(
    'name'   => "__get",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__set",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__isset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__unset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromArray",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a Map containing the key/value pairs from the " .
                "specified array.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "mp",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromIterable",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a Map containing the key/value pairs produced by ".
                "the specified Iterable.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "mp",
        'type'   => Variant,
      ),
    ),
  ));

EndClass(
);

BeginClass(
  array(
    'name'   => "MapIterator",
    'ifaces' => array('Iterator'),
    'desc'   => "An iterator implementation for iterating over a Map.",
    'flags'  =>  IsFinal | HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "current",
    'desc'   => "Returns the current value that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "key",
    'desc'   => "Returns the current key that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "valid",
    'desc'   => "Returns true if the iterator points to a valid value, ".
                "returns false otherwise.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "next",
    'desc'   => "Advance this iterator forward one position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "rewind",
    'desc'   => "Move this iterator back to the first position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

EndClass(
);

///////////////////////////////////////////////////////////////////////////////

BeginClass(
  array(
    'name'   => "StableMap",
    'ifaces' => array('Iterable', 'Countable'),
    'bases'  => array('Sweepable'),
    'desc'   => "An ordered dictionary-style container.",
    'flags'  =>  IsFinal | HasDocComment | NoDefaultSweep,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "isEmpty",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the StableMap is empty, false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "count",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the number of key/value pairs in the StableMap.",
    'return' => array(
      'type'   => Int64,
    ),
  ));

DefineFunction(
  array(
    'name'   => "at",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, an exception is thrown.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns the value at the specified key. If the key is ".
                "not present, null is returned.",
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "put",
    'flags'  =>  HasDocComment,
    'desc'   => "Stores a value into the StableMap with the specified key, ".
                "overwriting any previous value that was associated with ".
                "the key.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "clear",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes all key/value pairs from the StableMap.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "contains",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns true if the specified key is present in the ".
                "StableMap, false otherwise.",
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "remove",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes the specified key from this StableMap.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

// This method is deprecated and will be removed soon
DefineFunction(
  array(
    'name'   => "discard",
    'flags'  =>  HasDocComment,
    'desc'   => "Removes the specified key from this StableMap.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "key",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "toArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the key/value pairs from this ".
                "StableMap.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

// This method is deprecated and will be removed soon
DefineFunction(
  array(
    'name'   => "copyAsArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the key/value pairs from this ".
                "StableMap.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "toKeysArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the keys from this ".
                "StableMap.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "values",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns a Vector containing the values from this ".
                "StableMap.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "toValuesArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an array containing the values from this ".
                "StableMap.",
    'return' => array(
      'type'   => VariantMap,
    ),
  ));

DefineFunction(
  array(
    'name'   => "updateFromArray",
    'flags'  =>  HasDocComment,
    'desc'   => "Inserts the key/value pairs from the specified array into ".
                "this StableMap.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "arr",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "updateFromIterable",
    'flags'  =>  HasDocComment,
    'desc'   => "Inserts the key/value pairs produced by the specified ".
                "Iterable.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "it",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "differenceByKey",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "it",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "getIterator",
    'flags'  =>  HasDocComment,
    'desc'   => "Returns an iterator that points to beginning of this ".
                "StableMap.",
    'return' => array(
      'type'   => Object,
    ),
  ));

DefineFunction(
  array(
    'name'   => "__get",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__set",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
      array(
        'name'   => "value",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__isset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__unset",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "name",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "__toString",
    'return' => array(
      'type'   => String,
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromArray",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a StableMap containing the key/value pairs from the ".
                "specified array.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "mp",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "fromIterable",
    'flags'  =>  IsStatic | HasDocComment,
    'desc'   => "Returns a StableMap containing the key/value pairs produced ".
                "by the specified Iterable.",
    'return' => array(
      'type'   => Object,
    ),
    'args'   => array(
      array(
        'name'   => "mp",
        'type'   => Variant,
      ),
    ),
  ));

EndClass(
);

BeginClass(
  array(
    'name'   => "StableMapIterator",
    'ifaces' => array('Iterator'),
    'desc'   => "An iterator implementation for iterating over a StableMap.",
    'flags'  =>  IsFinal | HasDocComment,
  ));

DefineFunction(
  array(
    'name'   => "__construct",
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "current",
    'desc'   => "Returns the current value that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "key",
    'desc'   => "Returns the current key that the iterator points to.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
  ));

DefineFunction(
  array(
    'name'   => "valid",
    'desc'   => "Returns true if the iterator points to a valid value, ".
                "returns false otherwise.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
    ),
  ));

DefineFunction(
  array(
    'name'   => "next",
    'desc'   => "Advance this iterator forward one position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

DefineFunction(
  array(
    'name'   => "rewind",
    'desc'   => "Move this iterator back to the first position.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => null,
    ),
  ));

EndClass(
);

