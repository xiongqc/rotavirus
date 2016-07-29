library("ape")



#names(seq)

base <- read.dna("reference/NSP1Arra.fas",format="fasta",as.matrix=FALSE) 


seq <- read.dna("validated/NSP1_validated.fas",format="fasta",as.matrix=FALSE) 
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
print(i)
}

write.dna(seq, "output/NSP1_labelled.fas", format = "fasta")

