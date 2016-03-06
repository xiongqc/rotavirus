library("ape")

seq <- read.dna("VP7Arra.fas.nonn.orf.revalign.dedup.trimorf",format="fasta",as.matrix=FALSE) 

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

write.dna(seq, "VP7Arra.fixed.fas", format = "fasta")

