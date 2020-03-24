miArchivo = open("poem.txt")
elTexto = miArchivo.read()
miPoemaBinario=bytes(elTexto,encoding="utf")
print(miPoemaBinario)
ascci_E = miPoemaBinario[0]
ascci_l = miPoemaBinario[1]
print(ascci_E)
print(ascci_l)
f = open("poema_binario.Xcosa","wb")
f.write(miPoemaBinario)
f.close()