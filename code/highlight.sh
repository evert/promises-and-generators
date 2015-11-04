#!/bin/sh
(cd src; find ./*.js ./*.php) | xargs -n1 -Ifoo pygmentize -o rtf/foo.rtf src/foo
