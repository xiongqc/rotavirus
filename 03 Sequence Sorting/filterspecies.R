#Initialize
library(ape)
library(ade4)
library(seqinr)

#Read FASTA
rota1.seq <- read.dna("rotaseg1.fas",format="fasta",as.matrix=FALSE)
rota2.seq <- read.dna("rotaseg2.fas",format="fasta",as.matrix=FALSE)
rota3.seq <- read.dna("rotaseg3.fas",format="fasta",as.matrix=FALSE)
rota4.seq <- read.dna("rotaseg4.fas",format="fasta",as.matrix=FALSE)
rota5.seq <- read.dna("rotaseg5.fas",format="fasta",as.matrix=FALSE)
rota6.seq <- read.dna("rotaseg6.fas",format="fasta",as.matrix=FALSE)
rota7.seq <- read.dna("rotaseg7.fas",format="fasta",as.matrix=FALSE)
rota8.seq <- read.dna("rotaseg8.fas",format="fasta",as.matrix=FALSE)
rota9.seq <- read.dna("rotaseg9.fas",format="fasta",as.matrix=FALSE)
rota10.seq <- read.dna("rotaseg10.fas",format="fasta",as.matrix=FALSE)
rota11.seq <- read.dna("rotaseg11.fas",format="fasta",as.matrix=FALSE)

#Filter by species and write new fasta files

i=0
print("separating sequences for segment 1")
while (i<9)
  tryCatch({ #using tryCatch to skip errors with species with no entries
    
    i = i + 1
    
    print(paste("Writing FASTA file for species",LETTERS[i]))
  
    species.seq <- ""
    species.seq <- rota1.seq[grep(paste("Rotavirus",LETTERS[i],sep="_"),names(rota1.seq))];
    
    write.dna(species.seq, paste("rota1sp",LETTERS[i],".fas",sep=""), format = "fasta");
  

}, error=function(e){cat("ERROR: No entry found for species",LETTERS[i], "\n")})
print("all sequences separated into FASTA files by species for segment 1")