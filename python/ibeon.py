import re

class ibeon:   
   def remSpaces(data):
     return data.replace(" ", "")

   def remNumbers(data):
       return ''.join([x for x in data if not x.isdigit()])

   def remSymbols(data):
       return re.sub('[^\w]', '', data)

   def onlyNumbers(data):
       return re.sub('[^0-9]', '', data)

   def onlyAlpabets(data):
       return re.sub('[^A-Za-z]', '', data)

   def countSpaces(data):
       return data.count(' ')

   def countNumbers(data): 
       return len(re.sub('[^0-9]', '', data))

   def countAlpabets(data): 
       return len(re.sub('[^A-Za-z]', '', data))

   def strNext(data): 
      ar = list(data)
      r,i='',0
      for x in ar:
         i=ord(x)+1
         i=str(chr(i))
         r+=str(i)
      return r

   def strPrev(data): 
      ar = list(data)
      r,i='',0
      for x in ar:
         i=ord(x)-1
         i=str(chr(i))
         r+=str(i)
      return r