#Initialize
library(ape)

rotacount.seq <- read.dna("rota_annotated_v2.fas",format="fasta",as.matrix=FALSE) #Read FASTA
nospecies <- rotacount.seq[grep("Rotavirus_NULL",names(rotacount.seq))]
nosegment <- rotacount.seq[grep("Segment_NULL",names(rotacount.seq))]
hassegment <- rotacount.seq[grep("Segment_NULL",names(rotacount.seq),invert=TRUE)]
fullysorted <- hassegment[grep("Rotavirus_NULL",names(hassegment),invert=TRUE)]


print(paste("Number of sequences without species =",length(nospecies)))
print(paste("Number of sequences without segment =",length(nosegment),"(not sorted into individual segment files)"))
print(paste("Number of sequences fully sorted into segment and species =",length(fullysorted)))
