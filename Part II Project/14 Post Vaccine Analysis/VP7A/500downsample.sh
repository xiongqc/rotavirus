#!/bin/bash
set -e
if [ ! -d output ]; then
    mkdir output
fi

perl random_sequence_sample.pl -i VP7A1996TO2005.fas -o output/VP7A1996TO2005_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP7A2006TO2015.fas -o output/VP7A2006TO2015_downsample500.fas -n 500

