import pickle
nombre = "Bartolo"
apellido = "Andropolis"
edad = 20
soltero = False
salario =8523.20
registro= [nombre, apellido,edad,soltero,salario]
archivo = open("ArchivoX.txt","wb")
pickle.dump(registro,archivo)
archivo.colse()
