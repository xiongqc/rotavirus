library("ape")

seq <- read.dna("VP7A_downsample100.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

base <- read.dna("VP7A.fas",format="fasta",as.matrix=FALSE) 

#names(base)
i=1
sametitle <- match(names(base),names(seq))
while (i < 101)
{
  if (is.element(i, sametitle) == FALSE)
  {
names(seq)[i] <- names(base)[grep(names(seq)[i],names(base))]
  }
i = i + 1
}

names(seq)

write.dna(seq, "VP7A_downsample100_fixed.fas", format = "fasta")

