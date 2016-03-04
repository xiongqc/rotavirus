
import sys
import re
from copy import deepcopy
from Bio import AlignIO
from Bio.Align import MultipleSeqAlignment
from Bio.Alphabet import Gapped
from Bio.Alphabet.IUPAC import IUPACAmbiguousDNA, ExtendedIUPACProtein

# Input
fn = sys.argv[1]
ofn = sys.argv[2]
thresh = int(sys.argv[3])
xthresh = int(sys.argv[4])
gapthresh = float(sys.argv[5])

# In[4]:

# Read alignment
align = AlignIO.read(fn,"fasta",alphabet=Gapped(IUPACAmbiguousDNA(),"-"))


# In[5]:

klist=[]
attempt = 0
kozakre = [r"GCC[AG]CCATGG",r"[AG]CCATGG",r"[AG][ACGT][ACGT]ATGG",r"ATG[ACGT]"]
maxattempt = len(kozakre)

while klist==[]:
    attempt+=1
    if attempt>maxattempt:
        stop("Can't find start")
    kozak = re.compile(kozakre[attempt-1],re.IGNORECASE)
    # Find end of regexp
    kozaklist = [kozak.search(str(a.seq)) for a in align]
    kozakmatches = [k for k in kozaklist if k!=None]
    kend = [k.span()[1] for k in kozakmatches]
    # Make a list of hits before threshold
    klist = list(set(kend))
    klist.sort()
    klist = [k for k in klist if k<= thresh]
    klist = [k for k in klist if (k-1)%3==0]


print(kozakre[attempt-1])
kfreq = [kend.count(k) for k in klist]
print(klist,kfreq)
# Make a decision
kpos = [i for i in range(len(kfreq)) if kfreq[i]==max(kfreq)][0]
kvote = klist[kpos]


# In[10]:

# Trim alignment
trimalign=align[:,(kvote-4):]


# In[11]:

pralign = MultipleSeqAlignment(records=[],alphabet=Gapped(ExtendedIUPACProtein(), '-'),annotations=None)
for a in trimalign:
    s=deepcopy(a)
    s.seq = s.seq.translate()
    pralign.append(s)


# In[12]:

xcount = [str(p.seq).count('X') for p in pralign]
xlist = list(set(xcount))
xfreq = [xcount.count(x) for x in xlist]

# In[32]:

# Exclude sequences
trimalign2 = [trimalign[i,:] for i in range(len(pralign)) if xcount[i] <= xthresh]
trimalign2 = MultipleSeqAlignment(records=trimalign2,alphabet=Gapped(IUPACAmbiguousDNA(),"-"))
#trimalign2 = trimalign

# In[46]:

# Count gaps, then go in reverse until the threshold is first crossed
ta2l = trimalign2.get_alignment_length()
ta2n = len(trimalign2)
gapcount = [trimalign2[:,i].count("-") for i in range(ta2l)]
for i in reversed(range(ta2l)):
    if ta2n-gapcount[i] >= round(ta2n*gapthresh):
        break
trimalign3 = trimalign2[:,:(i+1)]


# In[47]:

AlignIO.write(trimalign3,ofn,"fasta")
