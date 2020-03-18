f = open("poem.txt", "r")

print("1: ",f.read(2))
print("2: ",f.read())
print("3: ",f.read())
f.close()