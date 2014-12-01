from ibeon import *


data = '!@#$%%122344asdfADF  F1234'
ib = ibeon
print(ib.strPrev(data))
print(ib.strNext(data))
print(ib.countAlpabets(data))
print(ib.countNumbers(data))
print(ib.countSpaces(data))
print(ib.onlyAlpabets(data))
print(ib.onlyNumbers(data))
print(ib.remSpaces(data))
print(ib.remNumbers(data))
print(ib.remSymbols(data))