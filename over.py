import time

g = '\033[32;1m'
k = '\033[33;1m'
w = '\033[37;1m'
r = '\033[31;1m'

a = input("server value(10) \n")

b = r + "flag " + k + "12345" + w if a > 10  else k + "200 " + g + "server ok" + w
print b
time.sleep(20000)