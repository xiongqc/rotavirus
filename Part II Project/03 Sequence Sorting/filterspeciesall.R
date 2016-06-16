#Initialize
library(ape)

#Filter by species and write new fasta files
for (s in 1:11)
{rotasort.seq <- read.dna(paste("rotaseg",s,".fas",sep=""),format="fasta",as.matrix=FALSE) #Read FASTA
print(paste("sorting segment",s))
i=0
while (i<9)
  tryCatch({ #using tryCatch to skip errors with species with no entries
    
    i = i + 1
    
    print(paste("Writing FASTA file for segment",s,"species",LETTERS[i]))
    
    species.seq <- ""
    species.seq <- rotasort.seq[grep(paste("Rotavirus",LETTERS[i],sep="_"),names(rotasort.seq))];
    
    write.dna(species.seq, paste("rotaseg",s,"sp",LETTERS[i],".fas",sep=""), format = "fasta");
    
    
  }, error=function(e){cat("ERROR: No entry found for species",LETTERS[i], "\n")})
print(paste("all sequences separated into FASTA files by species for segment",s))
}