library("ape")

new <- read.dna("new/VP1.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

old <- read.dna("old/VP1.fas",format="fasta",as.matrix=FALSE) 

#names(base)
i=1
o=1
out <- ""

while (i < 9999)
{
  if ( length(grep(names(new)[i],names(old))) == 0){
    i = i + 1
    }
  else {
    out[o] <- old[grep(names(new)[i],names(old))] #out<-old[1] works but out[1]<-old[1] doesnt!
    i = i + 1
    o = o + 1
  }
}

write.dna(out, "output/VP1.fas", format = "fasta")