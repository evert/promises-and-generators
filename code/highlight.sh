#!/bin/sh
(cd src; find ./*.js ./*.php ./*.go) | xargs -n1 -Ifoo pygmentize -o rtf/foo.rtf src/foo
