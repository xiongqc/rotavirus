#!/bin/bash
set -e
if [ ! -d output ]; then
    mkdir output
fi

perl random_sequence_sample.pl -i NSP1A.fas -o output/NSP1A_downsample500.fas -n 500

perl random_sequence_sample.pl -i NSP2A.fas -o output/NSP2A_downsample500.fas -n 500

perl random_sequence_sample.pl -i NSP3A.fas -o output/NSP3A_downsample500.fas -n 500

perl random_sequence_sample.pl -i NSP4A.fas -o output/NSP4A_downsample500.fas -n 500

perl random_sequence_sample.pl -i NSP5A.fas -o output/NSP5A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP1A.fas -o output/VP1A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP2A.fas -o output/VP2A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP3A.fas -o output/VP3A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP4A.fas -o output/VP4A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP6A.fas -o output/VP6A_downsample500.fas -n 500

perl random_sequence_sample.pl -i VP7A.fas -o output/VP7A_downsample500.fas -n 500

