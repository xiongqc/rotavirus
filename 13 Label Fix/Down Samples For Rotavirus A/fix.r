library("ape")

seq <- read.dna("VP3A_downsample100.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

base <- read.dna("VP3A.fas",format="fasta",as.matrix=FALSE) 

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

write.dna(seq, "VP3A.downsample100.fixed.fas", format = "fasta")


