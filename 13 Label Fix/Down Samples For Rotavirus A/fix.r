library("ape")

seq <- read.dna("VP7A_downsample500.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

base <- read.dna("VP7A.fas",format="fasta",as.matrix=FALSE) 

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

names(seq)

write.dna(seq, "VP7A.downsample500.fixed.fas", format = "fasta")


