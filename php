#!/bin/bash
__DIR__="$(dirname "$0")"
php "-c$__DIR__/stdlib" "$@"
