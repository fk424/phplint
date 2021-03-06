<?php
/** IRC Gateway Functions.

See: {@link http://www.php.net/manual/en/ref.ircg.php}
@package ircg
*/



/*. bool .*/ function ircg_set_on_read_data(/*. int .*/ $connection, /*. string .*/ $host, /*. int .*/ $port, /*. string .*/ $data){}
/*. bool .*/ function ircg_set_on_die(/*. int .*/ $connection, /*. string .*/ $host, /*. int .*/ $port, /*. string .*/ $data){}
/*. string .*/ function ircg_get_username(/*. int .*/ $connection){}
/*. bool .*/ function ircg_set_file(/*. int .*/ $connection, /*. string .*/ $path){}
/*. bool .*/ function ircg_set_current(/*. int .*/ $connection){}
/*. string .*/ function ircg_nickname_escape(/*. string .*/ $nick){}
/*. string .*/ function ircg_nickname_unescape(/*. string .*/ $nick){}
/*. bool .*/ function ircg_join(/*. int .*/ $connection, /*. string .*/ $channel /*., args .*/){}
/*. bool .*/ function ircg_oper(/*. int .*/ $connection, /*. string .*/ $name, /*. string .*/ $password){}
/*. bool .*/ function ircg_whois( /*. int .*/ $connection, /*. string .*/ $nick){}
/*. bool .*/ function ircg_ignore_add(/*. resource .*/ $connection, /*. string .*/ $nick){}
/*. array .*/ function ircg_fetch_error_msg(/*. int .*/ $connection){}
/*. bool .*/ function ircg_ignore_del(/*. int .*/ $connection, /*. string .*/ $nick){}
/*. bool .*/ function ircg_channel_mode(/*. int .*/ $connection, /*. string .*/ $channel, /*. string .*/ $mode_spec, /*. string .*/ $nick){}
/*. bool .*/ function ircg_topic(/*. int .*/ $connection, /*. string .*/ $channel, /*. string .*/ $topic){}
/*. string .*/ function ircg_html_encode(/*. string .*/ $html_text){}
/*. bool .*/ function ircg_who(/*. int .*/ $connection, /*. string .*/ $mask /*., args .*/){}
/*. bool .*/ function ircg_invite(/*. int .*/ $connection, /*. string .*/ $channel, /*. string .*/ $nickname){}
/*. bool .*/ function ircg_names( /*. int .*/ $connection, /*. string .*/ $channel /*., args .*/){}
/*. bool .*/ function ircg_kick(/*. int .*/ $connection, /*. string .*/ $channel, /*. string .*/ $nick, /*. string .*/ $reason){}
/*. bool .*/ function ircg_lusers(/*. int .*/ $connection){}
/*. bool .*/ function ircg_part(/*. int .*/ $connection, /*. string .*/ $channel){}
/*. bool .*/ function ircg_is_conn_alive(/*. int .*/ $connection){}
/*. bool .*/ function ircg_lookup_format_messages(/*. string .*/ $name){}
/*. bool .*/ function ircg_register_format_messages(/*. string .*/ $name, /*. array .*/ $messages){}
/*. int .*/ function ircg_pconnect(/*. string .*/ $username /*., args .*/){}
/*. bool .*/ function ircg_disconnect(/*. int .*/ $connection, /*. string .*/ $reason){}
/*. bool .*/ function ircg_nick(/*. int .*/ $connection, /*. string .*/ $newnick){}
/*. bool .*/ function ircg_list(/*. int .*/ $connection, /*. string .*/ $channel){}
/*. bool .*/ function ircg_notice(/*. int .*/ $connection, /*. string .*/ $recipient, /*. string .*/ $message){}
/*. array .*/ function ircg_eval_ecmascript_params(/*. string .*/ $params){}
/*. bool .*/ function ircg_msg(/*. int .*/ $connection, /*. string .*/ $recipient, /*. string .*/ $message /*., args .*/){}
