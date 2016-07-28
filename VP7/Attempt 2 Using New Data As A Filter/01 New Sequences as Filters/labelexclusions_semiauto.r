library("ape")

new <- read.dna("new/NSP5.fas",format="fasta",as.matrix=FALSE) 

#names(seq)

old <- read.dna("old/NSP5.fas",format="fasta",as.matrix=FALSE) 

#names(base)
i=1

while (i < 9999)
  #tryCatch({
{
  if ( length(grep(names(new)[i],names(old))) != 0){
    names(old)[grep(names(new)[i],names(old))] <- paste(names(old)[grep(names(new)[i],names(old))],"validated",sep="_")
    }
  i = i + 1
  print(i)
}
  #}, error=function(e){})

write.dna(old, "output/NSP5_labelled.fas", format = "fasta")