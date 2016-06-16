library(ape)
library(ade4)
print("Please enter the name of the first FASTA file for loading.")
f1 <- read.FASTA(file.choose())
print("Please enter the name of the second FASTA file for loading.")
f2 <- read.FASTA(file.choose())
print("Please enter the number of species.")
n <- scan(what=integer(), nmax=1)
print("Please enter the number of randomizations to run.")
perm <- scan(what=integer(), nmax=1)

d1 <- dist.dna(f1,model="F84")
d2 <- dist.dna(f2,model="F84")

d1 <- as.matrix(d1,n,n)
d2 <- as.matrix(d2,n,n)

print("Mantel test results:")
print(mantel.test(d1,d2,nperm=perm))
