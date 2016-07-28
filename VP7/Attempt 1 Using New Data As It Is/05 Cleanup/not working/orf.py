import sys
from Bio import SeqIO

currentCid = ''
buffer = []

for record in SeqIO.parse(open(sys.argv[1]),"fasta"):
    cid = str(record.description).split('.')[0][1:]

    if currentCid == '':
        currentCid = cid
    else:
        if cid != currentCid:
            buffer.sort(key = lambda x : len(x[1]))
            print '>' + buffer[-1][0]
            print buffer[-1][1]
            currentCid = cid
            buffer = [(str(record.description),str(record.seq))]
        else:
            buffer.append((str(record.description),str(record.seq)))

buffer.sort(key = lambda x : len(x[1]))
print '>' + buffer[-1][0]
print buffer[-1][1]