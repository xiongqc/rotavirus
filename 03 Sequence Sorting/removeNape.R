library(ape)
seq<-read.dna("rotaseg1spA_alignm2.fas",format="fasta",as.character = T)
seq2<-seq
seq2[seq=="n"]<-"-"
write.dna(seq2,"rotaseg1spA_alignm2rN.fas",format = "fasta")
