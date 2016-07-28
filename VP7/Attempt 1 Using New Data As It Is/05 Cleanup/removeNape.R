library(ape)
seq<-read.dna("01 RVA_VP7_excLVE_Jan18_derecomb.fas",format="fasta",as.character = T)
seq2<-seq
seq2[seq=="n"]<-"-"
write.dna(seq2,"02 RVA_VP7_excLVE_Jan18_derecomb_deN.fas",format = "fasta")
