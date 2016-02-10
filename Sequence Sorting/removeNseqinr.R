library(seqinr)
x=read.fasta("myoriginal.fasta")
new=lapply(seq(length(x)), function(i) {
  s2c(gsub("N","",c2s(getSequence(x[[i]]))))
})
write.fasta(new,names=names(x),file="newfile.fasta",nbchar=60)