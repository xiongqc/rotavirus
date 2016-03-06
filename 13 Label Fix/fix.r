library("ape")

seq <- read.dna("NSP3A_downsample100.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

base <- read.dna("NSP3Arra.fas",format="fasta",as.matrix=FALSE) 

#names(base)
i=1
sametitle <- match(names(base),names(seq))
while (i < 99999)
{
  if (is.element(i, sametitle) == FALSE)
  {
names(seq)[i] <- names(base)[grep(names(seq)[i],names(base))]
  }
i = i + 1
}

write.dna(seq, "NSP3A_downsample100_fixed.fas", format = "fasta")

