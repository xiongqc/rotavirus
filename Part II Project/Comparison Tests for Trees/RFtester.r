library(ape)
library(phangorn)

print("Please choose the tree to be randomized")
#phy<-read.tree("COI_bank_outgrouprooted.tre")
phy<-read.tree(file.choose())
print(phy)
print("Please choose the second tree to compare the first tree to")
#tree2<-read.tree("WSP_bank_midrooted.tre")
tree2<-read.tree(file.choose())
print(tree2)
dist.vector=NULL
i<-0
print("Please specify how many times to run the loop")
loops<-scan(what=integer(), nmax=1)
print("Running randomization ...")

for (i in 1:loops)
{
n<-length(phy$tip.label)

phy$tip.label <- phy$tip.label[sample.int(n)]

dist<-RF.dist(phy,tree2)
dist.vector[i] <- dist
}
print(table(dist.vector))
