<?php

namespace it\icosaedro\lint\statements;
require_once __DIR__ . "/../../../../all.php";
use it\icosaedro\lint\Globals;
use it\icosaedro\lint\Symbol;
use it\icosaedro\lint\expressions\Expression;

/**
 * Parses the <code>break</code> statement.
 * @author Umberto Salsi <salsi@icosaedro.it>
 * @version $Date: 2014/02/12 14:52:34 $
 */
class BreakStatement {
	 
	/**
	 * Parses the <code>break</code> statement.
	 * @param Globals $globals
	 * @return void
	 */
	public static function parse($globals)
	{
		$pkg = $globals->curr_pkg;
		$scanner = $pkg->scanner;
		if( $pkg->loop_level == 0 )
			$globals->logger->error($scanner->here(), "`break' MUST be inside a loop or a switch");
		$scanner->readSym();
		if( $scanner->sym !== Symbol::$sym_semicolon ){
			$r = Expression::parse($globals);
			$r->checkExpectedType($globals->logger, $scanner->here(), Globals::$int_type);
			$globals->logger->warning($scanner->here(), "`break EXPR'" . ": unadvised programming practice; can't check");
			# FIXME: 'break r;': check if r<>NULL && r[value] > 0 and <= loop_level
		}
	}
	
}

