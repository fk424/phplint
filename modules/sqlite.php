<?php
/** SQLite Functions.

See: {@link http://www.php.net/manual/en/ref.sqlite.php}
@package sqlite
*/


# FIXME: dummy values
define('SQLITE_BOTH', 1);
define('SQLITE_NUM', 2);
define('SQLITE_ASSOC', 3);
define('SQLITE_OK', 4);
define('SQLITE_ERROR', 5);
define('SQLITE_INTERNAL', 6);
define('SQLITE_PERM', 7);
define('SQLITE_ABORT', 8);
define('SQLITE_BUSY', 9);
define('SQLITE_LOCKED', 10);
define('SQLITE_NOMEM', 11);
define('SQLITE_READONLY', 12);
define('SQLITE_INTERRUPT', 13);
define('SQLITE_IOERR', 14);
define('SQLITE_CORRUPT', 15);
define('SQLITE_NOTFOUND', 16);
define('SQLITE_FULL', 17);
define('SQLITE_CANTOPEN', 18);
define('SQLITE_PROTOCOL', 19);
define('SQLITE_EMPTY', 20);
define('SQLITE_SCHEMA', 21);
define('SQLITE_TOOBIG', 22);
define('SQLITE_CONSTRAINT', 23);
define('SQLITE_MISMATCH', 24);
define('SQLITE_MISUSE', 25);
define('SQLITE_NOLFS', 26);
define('SQLITE_AUTH', 27);
define('SQLITE_FORMAT', 28);
define('SQLITE_ROW', 29);
define('SQLITE_DONE', 30);

/*. resource .*/ function sqlite_popen(/*. string .*/ $filename /*., args .*/){}
/*. resource .*/ function sqlite_open(/*. string .*/ $filename /*., args .*/){}
/*. object .*/ function sqlite_factory(/*. string .*/ $filename /*., args .*/){}
/*. void .*/ function sqlite_busy_timeout(/*. resource .*/ $db, /*. int .*/ $ms){}
/*. void .*/ function sqlite_close(/*. resource .*/ $db){}
/*. resource .*/ function sqlite_unbuffered_query(/*. string .*/ $query, /*. resource .*/ $db /*., args .*/){}
/*. resource .*/ function sqlite_fetch_column_types(/*. string .*/ $table_name, /*. resource .*/ $db){}
/*. resource .*/ function sqlite_query(/*. string .*/ $query, /*. resource .*/ $db /*., args .*/){}
/*. boolean .*/ function sqlite_exec(/*. string .*/ $query, /*. resource .*/ $db){}
/*. array .*/ function sqlite_fetch_all(/*. resource .*/ $result /*., args .*/){}
/*. array .*/ function sqlite_fetch_array(/*. resource .*/ $result /*., args .*/){}
/*. object .*/ function sqlite_fetch_object(/*. resource .*/ $result /*., args .*/){}
/*. array .*/ function sqlite_array_query(/*. resource .*/ $db, /*. string .*/ $query /*., args .*/){}
/*. array .*/ function sqlite_single_query(/*. resource .*/ $db, /*. string .*/ $query /*., args .*/){}
/*. string .*/ function sqlite_fetch_single(/*. resource .*/ $result /*., args .*/){}
/*. array .*/ function sqlite_current(/*. resource .*/ $result /*., args .*/){}
/*. mixed .*/ function sqlite_column(/*. resource .*/ $result, /*. mixed .*/ $index_or_name /*., args .*/){}
/*. string .*/ function sqlite_libversion(){}
/*. string .*/ function sqlite_libencoding(){}
/*. int .*/ function sqlite_changes(/*. resource .*/ $db){}
/*. int .*/ function sqlite_last_insert_rowid(/*. resource .*/ $db){}
/*. int .*/ function sqlite_num_rows(/*. resource .*/ $result){}
/*. bool .*/ function sqlite_valid(/*. resource .*/ $result){}
/*. bool .*/ function sqlite_has_prev(/*. resource .*/ $result){}
/*. int .*/ function sqlite_num_fields(/*. resource .*/ $result){}
/*. string .*/ function sqlite_field_name(/*. resource .*/ $result, /*. int .*/ $field_index){}
/*. bool .*/ function sqlite_seek(/*. resource .*/ $result, /*. int .*/ $row){}
/*. bool .*/ function sqlite_rewind(/*. resource .*/ $result){}
/*. bool .*/ function sqlite_next(/*. resource .*/ $result){}
/*. bool .*/ function sqlite_prev(/*. resource .*/ $result){}
/*. string .*/ function sqlite_escape_string(/*. string .*/ $item){}
/*. int .*/ function sqlite_last_error(/*. resource .*/ $db){}
/*. string .*/ function sqlite_error_string(/*. int .*/ $error_code){}
/*. bool .*/ function sqlite_create_aggregate(/*. resource .*/ $db, /*. string .*/ $funcname, /*. mixed .*/ $step_func, /*. mixed .*/ $finalize_func /*., args .*/){}
/*. bool .*/ function sqlite_create_function(/*. resource .*/ $db, /*. string .*/ $funcname, /*. mixed .*/ $string_ /*., args .*/){}
/*. string .*/ function sqlite_udf_encode_binary(/*. string .*/ $data){}
/*. string .*/ function sqlite_udf_decode_binary(/*. string .*/ $data){}
