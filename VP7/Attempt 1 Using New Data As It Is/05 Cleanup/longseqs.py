
import sys
import re
from copy import deepcopy
from Bio import AlignIO
from Bio.Align import MultipleSeqAlignment
from Bio.Alphabet import Gapped
from Bio.Alphabet.IUPAC import IUPACAmbiguousDNA, ExtendedIUPACProtein

fn = sys.argv[1]
ofn = sys.argv[2]
thresh = float(sys.argv[3]) # coverage

align = AlignIO.read(fn,"fasta",alphabet=Gapped(IUPACAmbiguousDNA(),"-"))

al = align.get_alignment_length()
an = len(align)
gapcount = [str(align[i,:].seq).count("-") for i in range(an)]

records = [align[i,:] for i in range(an) if gapcount[i]<=round((1.0-thresh)*al)]
align2 = MultipleSeqAlignment(records,alphabet=Gapped(IUPACAmbiguousDNA(),"-"))

AlignIO.write(align2,ofn,"fasta")
