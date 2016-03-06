library("ape")

seq <- read.dna("VP4Arra.fixed.fas",format="fasta",as.matrix=FALSE) 

i=2015

while (i > 1995)
{
    postvac <- seq[grep(paste(i,"-",sep=""),names(seq))]
    write.dna(postvac, paste("VP4",i,".fas",sep="_"), format = "fasta")
  i = i - 1
}