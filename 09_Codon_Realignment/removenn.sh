#!/bin/bash

if [ $# != 1 ]; then
    echo "USAGE: ./removenn.sh <fasta-file>"
    exit
fi

awk -v RS='>' '!/[Nn]{2}/{printf $0RT}' $1
