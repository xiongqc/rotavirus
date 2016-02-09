#Initialize
library(ape)
library(ade4)
library(seqinr)

#Read FASTA
# rota_all.seq <- read.fasta("rota_annotated_v2.fas"); # doesnt read spaces in names
rota_all.seq <- read.dna("rota_annotated_v2.fas",format="fasta",as.matrix=FALSE)

# summary(rota_all.seq)

# Test Commands

# summary(rota_all.seq[1])  # first sequence
# names(rota_all.seq[1]) # name of first sequence
# getAnnot(rota_all.seq[1]) # name of first sequence
# getLength(rota_all.seq[1]) # length of first sequence
# rota_long.seq <- rota_all.seq[which(getLength(rota_all.seq)>100)]
# grep("Segment_9",getAnnot(rota_all.seq)) #getAnnot() only works with read.fasta

# grep("Segment_9",names(rota_all.seq)) #works with read.dna
# Create FASTA files by Segment

i=1;

while (i<12)
  {
  print(paste("Writing FASTA file for segment",i))
        
        segment.seq <- ""
        segment.seq <- rota_all.seq[grep(paste("Segment_",i,"$",sep=""),names(rota_all.seq))];
        write.dna(segment.seq, paste("rotaseg",i,".fas",sep=""), format = "fasta");
  
        i = i + 1;
  }
print("all sequences separated into FASTA files by segment number")



